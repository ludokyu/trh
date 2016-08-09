<?php

class Labo_Form_Document extends Labo_Form_Default
{

    public function init($name="DocumentForm")
    {
        /* Form Elements & Other Definitions Here ... */
         $this->setName($name);
          $this->NewElement('hidden', 'doc_id','');
        $this->NewElement('hidden', 'doc_part','');
         $this->NewElement('text', 'doc_libelle', 'Libellé');
        $this->NewElement('file', 'doc_url','Fichier');
        
          $this->NewElement('button', 'cancel', 'Annuler', array("style"=>"clear:both"));
        $this->NewElement('submit', 'valid', 'Valider');

    }


}

