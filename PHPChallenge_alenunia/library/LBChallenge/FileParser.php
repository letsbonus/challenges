<?php

/*
 * This class do the file parsing and dat saving for the selected file
 */
class LBChallenge_FileParser {
   
   private $fileName;
   private $fileHandler;
   
   /******************************************************/
   /* Class Constructor
    */
   public function __construct() {
      
   }
   
   /******************************************************/
   /* This method upload the file to a desired path and calls
    * the parser for load the data.
    */
   public function processFile($uploader) {
      
      $uploader->setDestination(TMP_PATH);   // TMP_PATH is defined in 'defines.php'
      if($uploader->receive()) {
         $fileInfo = $uploader->getFileInfo();
         $this->parse($fileInfo['file']['tmp_name']);
         return TRUE;
      }
      return FALSE;
   }
   
   /*****************************************************/
   /* The parser function
    * This is the main process function, on it I process 
    * the information and save it into the DB
    */
   public function parse($fileName) {
      
      $utils = new LBChallenge_Utils();   // Get an Utils object for Log the process
      $this->fileName = $fileName;        // Save the filename, just in case, and try to open the file for parser
      
      if(($this->fileHandler = fopen($fileName, "r"))) {
         
         $utils->Log("INIT PARSER\n");
         $utils->Log($this->fileName."\n");
         $utils->Log("------------------------------------------\n");
         
         // Process the data
         $item_model = new Application_Model_Items();
         $merchant_model = new Application_Model_Merchants();
         $data = array();
         $str = fgets($this->fileHandler);   // Do a fgets for jump the header process
         while(!feof($this->fileHandler)) {
            $str = fgets($this->fileHandler);
            $fields = explode("\t", $str);

            // I get the fields now, I start the normalization and data saving
            $data[DB_ITEM_ID] = NULL;
            $data[DB_ITEM_TITLE] = $fields[ITEM_TITLE];
            $data[DB_ITEM_DESCRIPTION] = $fields[ITEM_DESCRIPTION];
            $data[DB_ITEM_PRICE] = $fields[ITEM_PRICE];
            $data[DB_ITEM_INIT_DATE] = $fields[ITEM_INIT_DATE];
            $data[DB_ITEM_EXP_DATE] = $fields[ITEM_EXP_DATE];
            
            // Analize the Merchant information
            // If exists, load the name
            // If not, creates a new one and set it to the item
            $fields[ITEM_MERCHANT_NAME] = trim(str_replace(array("\n", "\r", "\n\r"), ' ', $fields[ITEM_MERCHANT_NAME]));
            $row = $merchant_model->getByName($fields[ITEM_MERCHANT_NAME]);
            if($row) {
               $data[DB_MERCHANT_ID] = $row[DB_MERCHANT_ID];
            }
            else {
               $subdata = array();
               $subdata[DB_MERCHANT_ID] = NULL;
               $subdata[DB_MERCHANT_NAME] = $fields[ITEM_MERCHANT_NAME];
               $subdata[DB_MERCHANT_ADDRESS] = $fields[ITEM_MERCHANT_ADD];
               $data[DB_MERCHANT_ID] = $merchant_model->saveRow($subdata);
            }
            
            $item_model->saveRow($data);
         }
      }
   }
}

