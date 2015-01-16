<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDB(){

        $options = $this->getOption('resources');
        $resource = $this->getPluginResource('multidb');
        $resource->init();
        $db1 = $resource->getDb('wage');           //工资数据库
        $db2 = $resource->getDb('certify');        //职员数据库
         
        Zend_Registry::set('wage', $db1);
        Zend_Registry::set('certify', $db2);
        Zend_Db_Table::setDefaultAdapter($db1);
         
        $dbAdapters = array();
    }
}

