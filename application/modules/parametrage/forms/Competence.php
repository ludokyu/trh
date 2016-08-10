<?php

class Parametrage_Form_Competence extends Labo_Form_Default
{

    public function init($name="FormCompetence")
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setName($name);
        $this->NewElement("hidden", "competence_id", "");
        $this->NewElement("text", "libelle_competence", "Libellé");
        $this->NewElement('button', 'cancel', 'Annuler', array("style"=>"clear:both"));
        $this->NewElement('submit', 'valid', 'Valider');
        
    }


}

