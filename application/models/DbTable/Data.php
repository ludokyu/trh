<?php

class Labo_Model_DbTable_Data extends Zend_Db_Table_Abstract
{

    protected $_name = 'data';
    public function add($data,$champ,$id){
        foreach($data as $k=>$d){
            $this->insert(array("fk_champ_id"=>$id,$champ,$k,$d ));
        }
    }
    
    public function clear($id){
        $this->update(array("statut"=>0), "champ_id=".$id);
    }

}

