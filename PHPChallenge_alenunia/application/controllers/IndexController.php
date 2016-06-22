<?php

class IndexController extends Zend_Controller_Action {

   /******************************************************************/
   public function indexAction() {
      
      // Get a new form for file upload and send it to the view
      $this->view->formFile = new Application_Form_File();
      
      // Get the information about the items on the DB and send it to the view
      $item_model = new Application_Model_Items();
      $this->view->items_month = $item_model->getbyMonth();
      $this->view->items_merchant = $item_model->getbyMerchant();
      
      // Is the request from a redirect?
      $request = $this->getRequest();
      if($request->isGet()) {
         $this->view->valid = $request->getParam('valid');
      }
   }

   /******************************************************************
    * This action do the file process in the project
    */
   public function handlefileAction() {
   
      $this->_helper->layout->disableLayout();
      $this->_helper->viewRenderer->setNoRender(TRUE);

      $valid = 0;
      $request = $this->getRequest();
      $utils = new LBChallenge_Utils();   // Just for debugging
      
      if($request->isPost()) {
         
         // Define an Http transport
         $upload = new Zend_File_Transfer_Adapter_Http();
         $upload->addValidator('Extension', false, array('tab', 'case' => true));   // Check the file extension
         if($upload->isValid()) {
            
            $utils->Log("Valid File Type, I will to process it!\n");
            // The file is OK, I create a handler and will to process the data
            $fileHandler = new LBChallenge_FileParser();
            $fileHandler->processFile($upload);
            $valid = 1;
         }
      }
      $this->redirect("/?valid=".$valid);
   }
}

