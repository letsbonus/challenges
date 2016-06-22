<?php

class Application_Form_File extends Zend_Form {

   /***************************************************************
    * This Form is used to load a file for processing its data
    */
   public function __construct($options = null) {
      parent::__construct($options);

      // set form attributes
      $this->setMethod('post');
      $this->setAction('/index/handlefile');
      $this->setAttrib('id', 'formFile');
      $this->setAttrib('name', 'formFile');

      // create a file element
      $file = new Zend_Form_Element_File('file');

      // Set manual reception of uploaded files
      $file->setValueDisabled(true);

      // Add the file element to form
      $this->addElements(array($file));
      // add submit button to form
      $this->addElement('submit', 'Cargar');
   }
}