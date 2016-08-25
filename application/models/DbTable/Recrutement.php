<?php

class Labo_Model_DbTable_Recrutement extends Zend_Db_Table_Abstract{

    protected $_name='recrutement';

    public function addRecrutement($data, $id=0){
        $Data = new Labo_Model_DbTable_Data();
        
        if($id==0){
            $id=$this->insert(array("recrut_statut"=>1));
        }
        else{
            $Data->clear($id);
        }
        $Data->add($data,$this->_name,$id);
        
        $Log = new Labo_Model_DbTable_Log();
        $action="Ajout/Modification d'un recrutement";
        $Log->log($id_user,$action);
    }

}
