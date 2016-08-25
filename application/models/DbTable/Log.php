<?php

class Labo_Model_DbTable_Log extends Zend_Db_Table_Abstract
{

    protected $_name = 'log';

    public function log($id_user,$action,$old_value=0,$new_value=0){
        $this->insert(array("fk_user_id"=>$id_user,
                    "log_ip"=>$_SERVER["REMOTE_ADDR"],
                    "log_url"=>$_SERVER["REQUEST_URI"],
                    "log_action"=>$action,
                    "log_old_data_id"=>$old_value,
                    "log_new_data_id"=>$new_value));
    }
}

