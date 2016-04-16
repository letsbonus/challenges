<?php

class Application_Model_Items extends Zend_Db_Table_Abstract {
    
   protected $_name = 'items';
   protected $_primary = 'item_id';
            
   /*********************************************************************
    * Returns all the data on the table
    */
   public function getAll() {
      return $this->fetchAll();
   }

   /**********************************************************************
    * Returns the row given for the $key, in this case the item_id number
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
      $key = $data['item_id'];
      $row = $this->getRow($key);
      if(is_null($row)) {
         $row = $this->createRow(); // Create a new one row
      }
      $row->setFromArray($data);    // Setup the data and save
      $row->save();

      return true;
   }

   /**********************************************************************
    * Delete the Row given by the itemid in the data array
    */
   public function deleteRow($data) {

      $key = $data['item_id'];
      $row = $this->getRow($key);

      if($row) {
         $row->delete();
         return true;
      }
      return false;
   }
   
   /*****************************************************************************************
    * Returns a grid with the statistics ot items per year and month
    */
   public function getByMonth() {

      $select = $this->select()
         ->from('items', array("COUNT(`item_id`) AS quantity", "YEAR(`item_init_date`) AS year", "MONTHNAME(STR_TO_DATE(MONTH(`item_init_date`), '%m')) AS month"))
         ->group(array("YEAR(`item_init_date`)", "MONTH(`item_init_date`)"));
      
      return $this->fetchAll($select);
   }
   
   /*****************************************************************************************
    * Returns a grid with the statistics ot items per merchant
    */
   public function getbyMerchant() {
      
      $select = $this->select()->setIntegrityCheck(false)
            ->from(array('I' => 'items'), array("I.merchant_id", "COUNT(`item_id`) AS quantity"))
            ->joinInner(array('M' => 'merchants'), "`M`.`merchant_id` = `I`.`merchant_id`", array("merchant_name"))
            ->group("I.merchant_id");
      
//      $utils = new LBChallenge_Utils();
//      $utils->Log($select->__toString());
      
      return $this->fetchAll($select);
   }
}