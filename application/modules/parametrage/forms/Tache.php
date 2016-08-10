<?php

class Parametrage_Form_Tache extends Labo_Form_Default
{

    public function init($name="FormTache")
    {
        /* Form Elements & Other Definitions Here ... */
         $this->setName($name);
        $this->NewElement("hidden", "tache_id", "");
        $this->NewElement("text", "code_tache", "Code");
        $this->NewElement("text", "libelle_tache", "Libellé");
        $this->NewElement('button', 'cancel', 'Annuler', array("style"=>"clear:both"));
        $this->NewElement('submit', 'valid', 'Valider');
    }


}

