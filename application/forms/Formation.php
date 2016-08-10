<?php

class Labo_Form_Formation extends Labo_Form_Default{

    public function init($name="FormFormation"){
        /* Form Elements & Other Definitions Here ... */
        $this->setName($name);

        $this->NewElement('hidden', 'form_id', '');
        $this->NewElement('select', 'fk_pers_id', 'Personne');
        $this->NewElement('select', 'fk_poste_id', 'Poste');
        $this->NewElement('select', 'fk_tache_id', 'tache');

        $this->NewElement('date', 'form_date_deb', 'Date de début');
        $this->NewElement('date', 'form_date_fin', 'Date de fin');
        $this->NewElement('text', 'form_duree', 'Durée');
        $this->NewElement('date', 'form_date_valid', 'Date de validation');
        $this->NewElement('select', 'fk_formateur', 'Formateur');
        $this->NewElement('checkbox', 'form_sign', 'Signature Formateur');
        $this->NewElement('html', 'eval_title', 'Evaluation');
        $this->NewElement('datalist', 'eval_type', 'Type Evaluation', array('datalist_options'=>array("dd", "rr")));
        $this->NewElement('date', 'eval_date_deb', 'Date de début');
        $this->NewElement('date', 'eval_date_fin', 'Date de fin');
        $this->NewElement('text', 'eval_duree', 'Durée');
        $this->NewElement('select', 'fk_evaluateur','Evaluateur');
        $this->NewElement('checkbox', 'eval_sign', 'Signature Evaluateur');
        $this->NewElement('checkbox', 'form_maitrise', 'Maitrise');
        
        $this->NewElement('button', 'cancel', 'Annuler');

        $this->NewElement('submit', 'valid', 'Valider');
    }

}
