<?php

class Parametrage_Form_Profil extends Labo_Form_Default
{

    public function init($name="FormProfil")
    {
        /* Form Elements & Other Definitions Here ... */
         $this->setName($name);
        $this->NewElement("hidden", "poste_id", "");
        $this->NewElement("text", "code_poste", "Code");
        $this->NewElement("text", "libelle_poste", "Libellé");
        $this->NewElement('button', 'cancel', 'Annuler', array("style"=>"clear:both"));
        $this->NewElement('submit', 'valid', 'Valider');
    }


}

