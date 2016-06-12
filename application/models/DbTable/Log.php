<?php

class Labo_Model_DbTable_Log extends Zend_Db_Table_Abstract
{

    protected $_name = 'log';

    public function log($id_user,$action){
        $this->insert(array("fk_user_id"=>$id_user,
                    "log_ip"=>$_SERVER["REMOTE_ADDR"],
                    "log_url"=>$_SERVER["REQUEST_URI"],
                    "log_action"=>$action));
    }
}

