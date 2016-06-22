<?php

require_once 'defines.php';   // Include some defines for the project

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

   /****************************************************************************
    * Setup the MySQL Default Connector
    */
    protected function _initDb() {
    
        $dbResource = $this->getPluginResource('db');
        $db = $dbResource->getDbAdapter();
        
        // Seteo esto para corregir acentos y demas caracteres "defectuosos"
        $db->query('SET NAMES UTF8');
        $db->query('SET CHARACTER SET UTF8');
        
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
    }
    
    /***************************************************************************
     * Setup the View
     */
    protected function _initView () {
        
        // Initialize view
        $view = new Zend_View();
        $view->doctype('HTML5');
        $view->setEncoding('UTF-8');
        $view->headTitle('LetsBonus Challenge');
        $view->headMeta()->appendName('author', 'Alejandro Nunia');
        
        $view->headLink()->appendStylesheet("/css/layout.css");
        $view->headLink()->appendStylesheet("/css/txt.css");

        // Add it to the ViewRenderer
        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setView($view);

        // Return it, so that it can be stored by the bootstrap
        return $view;
    }
}

