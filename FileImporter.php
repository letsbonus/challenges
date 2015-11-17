<?php

class FileImporter
{
    /**
     * Read a file into memory.
     *
     * Read a given file and splits its contents into rows and columns liable
     * to be written in a DB table.
     *
     * @param string filename
     * @return Bi-dimensional array of rows and columns
     * @throws Exception on error
     */
    public function read($filename)
    {
        $rows = [];
        $file = fopen($filename, 'r');
        if ($file === false) {
            throw new Exception("could not open file '{$filename}'");
        }

        fgets($file); // first line discarded, contains column titles
        while (($line = fgets($file)) !== false) {
            $rows[] = explode("\t", $line);
        }
        fclose($file);

        return $rows;
    }

    /**
     * Validate the rows read.
     *
     * @param array $rows An array returned by read function
     * @return true if validation is correct
     * @throws LengthException if a row has a different number of columns
     * @throws UnexpectedValueException if a columns is not of the expected type
     */
    public function validate(array $rows)
    {
        $line = 1;
        $columns = 7;  // mandatory number of columns per row
        foreach ($rows as $row) {
            $count = count($row);

            // check length
            if ($count != $columns) {
                throw new LengthException("incorrect number of columns in row {$line}");
            }

            foreach ($row as $i => $field) {
                $fieldNumber = $i+1;
                switch ($i) {
                    case 0: // item title
                    case 1: // item description
                        // any string valid
                        break;

                    case 2: // item price
                        if (!filter_var($field, FILTER_VALIDATE_FLOAT)) {
                            throw new UnexpectedValueException("float number expected in field {$fieldNumber} of line {$line}");
                        }
                        break;

                    case 3: // item init date
                    case 4: // item expiry date
                        if (strtotime($field) === false) {
                            throw new UnexpectedValueException("date expected in field {$fieldNumber} of line {$line}");
                        }
                        break;

                    case 5: // merchant address
                    case 6: // merchant name
                        // any string valid
                        break;
                }
            }

            $line++;
        }

        return true;
    }

    /**
     * Save imported file to DB.
     *
     * @param array $rows Rows read and validated
     * @return true on success
     *
     * NOTE: row contains
     *       0 => item title,
     *       1 => item description,
     *       2 => item price,
     *       3 => item init date,
     *       4 => item expiry date,
     *       5 => merchant address,
     *       6 => merchant name
     */
    public function save(array $rows)
    {
        $this->checkDB();

        foreach ($rows as $row) {
            $this->importProduct($row);
        }

        return true;
    }

    /**
     * Get products per month.
     *
     * @return array of number of products imported/month
     */
    public function getProductsPerMonth()
    {
        return $this->productsPerMonth;
    }

    /**
     * Get products per merchant.
     *
     * @return array of number of products imported/merchant
     */
    public function getProductsPerMerchant()
    {
        return $this->productsPerMerchant;
    }

    // -----------------------------------------------------------------------------
    //
    //     PROTECTED INTERFACE
    //
    // -----------------------------------------------------------------------------

    /**
     * Check that the DB exist.
     *
     * @return true if schema exists
     * @throws Exception if cannot check DB
     */
    protected function checkDB()
    {
        $this->connectDB();

        $created = false;
        $result = $this->dbConnection->query('show databases;');
        if ($result !== false) {
            while ($dbs = $result->fetch_array()) {
                foreach ($dbs as $db) {
                    if ($db == $this->mysql['database']) {
                        $created = true;
                        break;
                    }
                }
            }
            $result->free();
            if (!$created) {
                return $this->createDB();
            }
            return true;
        } else {
            throw new Exception("could not get list of databases");
        }
    }


    // -----------------------------------------------------------------------------
    //
    //     PRIVATE INTERFACE
    //
    // -----------------------------------------------------------------------------

    /**
     * Connects to DB.
     *
     * @return true if connection is correctly established
     * @throws Exception if connection failed
     */
    private function connectDB()
    {
        if ($this->dbConnection != NULL) {
            // already connected
            return true;
        }

        include("mysql.conf");
        $this->mysql = $mysql;

        $this->dbConnection = new mysqli(
            $mysql['host'],
            $mysql['username'],
            $mysql['password']
        );
        if ($this->dbConnection === false) {
            throw new Exception("could not connect to DB");
        }
        $this->dbConnection->set_charset("utf8");

        return true;
    }

    /**
     * Create DB structure for imported files.
     *
     * @return true if the database has been successfully created
     * @throws Exception
     */
    private function createDB()
    {
        $query = <<<EOT
CREATE SCHEMA IF NOT EXISTS `{$this->mysql['database']}` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
EOT;
        $result = $this->dbConnection->query($query);
        if ($result === true) {
            $result = $this->dbConnection->select_db($this->mysql['database']);
            if ($result == true) {
                if ($this->createTable($this->merchantsTableQuery) and
                    $this->createTable($this->productsTableQuery)) {
                    return true;
                }
            } else {
                throw new Exception("could not select default database {$this->mysql['database']}");
            }
        } else {
            throw new Exception("could not create database {$this->mysql['database']}");
        }
    }

    /**
     * Creates a table with the given query.
     *
     * @return true if the table has been successfully created
     * @throws Exception
     */
    private function createTable($query)
    {
        $result = $this->dbConnection->query($query);
        if ($result === true) {
            return true;
        }
        throw new Exception($this->dbConnection->error);
    }

    /**
     * Import a new merchant, if doesn't exists.
     *
     * @param array $row A row of imported data
     * @return merchant id
     * @throws Exception on error
     */
    private function importMerchant($row)
    {
        $merchant_id = 0;
        $merchant_name = trim($row[6]);
        $merchant_address = trim($row[5]);

        $query = <<<EOT
SELECT id FROM `{$this->mysql['database']}`.merchants
 WHERE name = '{$merchant_name}';
EOT;
        $result = $this->dbConnection->query($query);
        if ($result === false) {
            throw new Exception("in ".__METHOD__.": {$this->dbConnection->error}");
        }

        if ($result->num_rows == 0) {
            // import new merchant
            $insert = <<<EOT
INSERT INTO `{$this->mysql['database']}`.merchants (name, address)
VALUES ('{$merchant_name}', '{$merchant_address}');
EOT;
            $result = $this->dbConnection->query($insert);
            $merchant_id = $this->dbConnection->insert_id;
        } else {
            $data = $result->fetch_assoc();
            $merchant_id = $data['id'];
            $result->free();
        }

        return [ $merchant_id, $merchant_name ];
    }

    /**
     * Import a new Product, if doesn't exists.
     *
     * @param array $row A row of imported data
     * @return product id
     * @throws Exception on error
     */
    private function importProduct($row)
    {
        $product = [
            'title' => trim($row[0]),
            'description' => trim($row[1]),
            'price' => $row[2],
            'init_date' => $row[3],
            'expiry_date' => $row[4],
            'status' => 0,   // inactive by default, pending to review or stock update
            'stock' => 0,    // default stock
        ];

        $query = <<<EOT
SELECT id FROM `{$this->mysql['database']}`.products
 WHERE title = '{$product["title"]}';
EOT;
        $result = $this->dbConnection->query($query);
        if ($result === false) {
            throw new Exception("in ".__METHOD__.": {$this->dbConnection->error}");
        }

        if ($result->num_rows == 0) {
            // import new product
            list($merchant_id, $merchant_name) = $this->importMerchant($row);
            $insert = <<<EOT
INSERT INTO `{$this->mysql['database']}`.`products`
      (title, description, price, init_date, expiry_date, status, stock, merchant_id)
VALUES ('{$product["title"]}',
        '{$product["description"]}',
         {$product['price']},
        "{$product['init_date']}",
        "{$product['expiry_date']}",
         {$product['status']},
         {$product['stock']},
         {$merchant_id}
       );
EOT;
            $result = $this->dbConnection->query($insert);
            if ($result === false) {
                throw new Exception("in ".__METHOD__.": {$this->dbConnection->error}");
            }

            // products per month
            $month = strftime("%B", strtotime("2014-10-01T23:59:59+01:00"));
            if (array_key_exists($month, $this->productsPerMonth) === false) {
                $this->productsPerMonth[$month] = 0;
            }
            $this->productsPerMonth[$month]++;

            // products per merchant
            if (array_key_exists($merchant_name, $this->productsPerMerchant) === false) {
                $this->productsPerMerchant[$merchant_name] = 0;
            }
            $this->productsPerMerchant[$merchant_name]++;
        }
    }

    // -----------------------------------------------------------------------------

    private $mysql = null;
    private $dbConnection = null;
    private $productsPerMonth = [];
    private $productsPerMerchant = [];

    private $merchantsTableQuery = <<<EOT
CREATE TABLE IF NOT EXISTS `merchants` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL COMMENT '',
  `address` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;
EOT;

    private $productsTableQuery = <<<EOT
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `title` VARCHAR(128) NULL COMMENT '',
  `description` TEXT NULL COMMENT '',
  `price` DOUBLE NULL COMMENT '',
  `init_date` DATETIME NULL COMMENT '',
  `expiry_date` DATETIME NULL COMMENT '',
  `status` TINYINT(1) NULL COMMENT '',
  `stock` INT UNSIGNED NULL COMMENT '',
  `merchant_id` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_table1_merchant_idx` (`merchant_id` ASC)  COMMENT '',
  CONSTRAINT `fk_table1_merchant`
    FOREIGN KEY (`merchant_id`)
    REFERENCES `merchants` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;
EOT;
}
