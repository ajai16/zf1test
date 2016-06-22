<?php

class Default_Model_User extends Zend_Db_Table_Abstract
{
    protected $dbTable = 'users';
    
    public function save($data){
        $db = Zend_Db_Table::getDefaultAdapter();
        $db->insert($this->dbTable, $data);
    }

}

