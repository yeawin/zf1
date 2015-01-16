<?php
//演示如何在多数据库中初始化一个表对象
class Application_Model_MulitiDBTemplate extends Zend_Db_Table_Abstract
{
    public function __construct ()
    {
        $db1 = Zend_Registry::get('wage');
        $this->setDefaultAdapter($db1);
        parent::__construct();
    }
}

