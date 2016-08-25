<?php

class Labo_Model_DbTable_User extends Zend_Db_Table_Abstract{

    protected $_name='utilisateur';

    public function getUser($id){
        $user=$this->find($id);

        $select=$this->select()
                ->setIntegrityCheck(false)
                ->from(array("ui"=>"user_integration"), array("integr_id", "integr_fields", "integr_data"))
                ->where("integr_statut=1 AND fk_user_id =", $id);
        $rows=$this->fetchAll($select);
    }

    public function add($array){
        Zend_Debug::dump($array);

        $log=new Labo_Model_DbTable_Log();
    }

    public function liste(){
        
    }

    public function delUser(){

        $log=new Labo_Model_DbTable_Log();
    }

}
