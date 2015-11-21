<?php

class DataManipulator {
	private $conn = null;  // Connection to the MySQL DB
	
	private $head = null;  // For future use..
	private $body = null;
	
	private $merchants = array();
	private $products = array();
	
	public function DataManipulator($conn) {
		$this->conn = $conn;
	}
	
	// Main method to do the work of conversion (and printing) from the file
	public function conversion($data) {
		$this->getData(utf8_decode($data));
		
		echo "Products by merchants: <br/>" . $this->getMerchantData();
		echo "<br/>-----------------";
		echo "<br/>Products by month: <br/>" . $this->getProductsData();
	}
	
	// Put the data into arrays (head & body)
	private function getData($data) {
		$array = explode("\n", $data);
		foreach ($array as $key => $rowTab) {
			$row = explode("\t", $rowTab);
			if ($key == 0) {
				$this->head = $row;
			} else {
				$this->body[] = $row;
			}
		}
		$this->fillMerchants();
		$this->fillProducts();
	}	
	
	// Fill the merchants data in the class and in the DB
	private function fillMerchants() {
		// Create local data
		foreach ($this->body as $row) {
			$m_name = trim($row[6]);
			$m_address = trim($row[5]);
			
			$sql = "SELECT ID FROM MERCHANTS WHERE NAME = '$m_name' AND ADDRESS = '$m_address'";
			$result = $this->conn->query($sql);
			if ($result->num_rows == 0) {
				$sql = "INSERT INTO MERCHANTS(NAME, ADDRESS) VALUES ('$m_name', '$m_address')";
				$this->conn->query($sql);
				$id = $this->conn->insert_id;
				$this->merchants[$id]['name'] = $m_name;
				$this->merchants[$id]['addr'] = $m_address;
			}
		}
	}
	
	// Report the number of products by merchant
	private function getMerchantData() {
		$html = "";
		foreach ($this->merchants as $merc_id => $val) {
			$html .= "<br/>" . $val['name'] . " - " . $val['addr'] . ": ";
			$i = 0;
			foreach ($this->products as $prod) {
				if ($prod['merc_id'] == $merc_id) {
					$i++;
				}
			}
			$html .= $i;
		}
		return $html;
	}
	
	// Fill the products data in the class and in the DB
	private function fillProducts() {
		$i = 0;
		foreach($this->body as $row) {
			$row = array_map('trim', $row);
			
			// Create local data
			$this->products[$i] = array();
			$title = $this->products[$i]['title'] = $row[0];
			$descr = $this->products[$i]['descr'] = $row[1];
			$price = $this->products[$i]['price'] = $row[2];
			$init_date = $this->products[$i]['init_date'] = $row[3];
			$expr_date = $this->products[$i]['expr_date'] = $row[4];
			
			$sql = "SELECT ID FROM MERCHANTS WHERE NAME = '$row[6]' AND ADDRESS = '$row[5]'";
			$result = $this->conn->query($sql);
			$rec = $result->fetch_row();
			$mer_id = $this->products[$i]['merc_id'] = $rec[0];
			
			// Create a new product in the DB
			$sql = "INSERT INTO
						PRODUCTS (TITLE, DESCRIPTION, PRICE, INIT_DATE, EXPIRY_DATE, MERCHANT_ID)
					VALUES
						('$title', '$descr', '$price', '$init_date', '$expr_date', $mer_id)";
			$this->conn->query($sql);
			$i++;
		}
	}
	
	// Report the number of products by month
	// NOTE: the text of the problem doesn't specify whitch month I have to take.. I have used init date and printed by (year/)month.
	private function getProductsData() {
		$html = '';
		$m_count = array();
		
		foreach ($this->products as $rec) {
			$y = date("Y",strtotime($rec['init_date']));
			$m = date("m",strtotime($rec['init_date']));
			if (isset($m_count[$y][$m])) {
				$m_count[$y][$m]++;
			} else {
				$m_count[$y][$m] = 1;
			}
		}
		ksort($m_count);
		foreach($m_count as $year => $month) {
			$html .= "<br/>$year";
			ksort($m_count[$year]);
			foreach ($m_count[$year] as $key => $val) {
				$html .= "<br/>- " . jdmonthname( $key, 1) . ": $val";
			}
		}
		return $html;
	}
}
?>
