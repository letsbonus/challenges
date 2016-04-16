<?php

class Application_Model_Merchants extends Zend_Db_Table_Abstract {
    
   protected $_name = 'merchants';
   protected $_primary = 'merchant_id';
            
   /*********************************************************************
    * Returns all the data on the table
    */
   public function getAll() {
      return $this->fetchAll();
   }

   /**********************************************************************
    * Returns the row given for the $key, in this case the merchant_id number
    */
   public function getRow($key) {

      $row = $this->find((int)$key)->current();
      return $row;
   }

   /**********************************************************************
    * Save the $data into the table
    */
   public function saveRow($data) {

      // Check if the id exists on the Table
      $key = $data['merchant_id'];
      $row = $this->getRow($key);
      if(is_null($row)) {
         $row = $this->createRow();
         $merchant_id = $this->getAdapter()->lastInsertId();
      }
      $row->setFromArray($data);
      $row->save();
      $merchant_id = $row['merchant_id'];

      return $merchant_id;
   }

   /**********************************************************************
    * Delete the Row given by the itemid in the data array
    */
   public function deleteRow($data) {

      $key = $data['merchant_id'];
      $row = $this->getRow($key);

      if($row) {
         $row->delete();
         return true;
      }
      return false;
   }
   
   //*****************************************************************************************
   // Returns the Merchant information with the name required
   public function getByName($name) {
      
      $select = $this->select()->where("merchant_name=?", $name);
      $row = $this->fetchRow($select);
      if(count($row)) {
         return $row;
      }
      return NULL;
   }
}