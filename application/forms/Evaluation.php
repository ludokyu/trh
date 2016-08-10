<?php

class Labo_Form_Evaluation extends Labo_Form_Default
{

    public function init($name="EvaluationForm")
    {
        /* Form Elements & Other Definitions Here ... */
         $this->setName($name);
        
          $this->NewElement('hidden', 'eval_id','');
         
           
          $this->NewElement('date', 'eval_periode','Date de validité de l\'évaluation');
          $this->NewElement('select', 'fk_pers_id','Personne');
          $this->NewElement('select', 'fk_poste_id','Poste');
          $this->NewElement('select', 'fk_tache_id','tache');
          $this->NewElement('datalist', 'eval_critere','Critère');
          $this->NewElement('datalist', 'eval_type','Type Evaluation',array('datalist_options'=>array("dd","rr")));
          $this->NewElement('number', 'eval_score','Score');
          
           $this->NewElement('button', 'cancel', 'Annuler');
        
         $this->NewElement('submit', 'valid', 'Valider');
    }


}

