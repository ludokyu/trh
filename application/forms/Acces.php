<?php

class Labo_Form_Acces extends Labo_Form_Default
{

    public function init($name="Acces")
    {
        /* Form Elements & Other Definitions Here ... */
        $this->NewElement("hidden", "fac_id","");
        $this->NewElement("hidden", "fk_acces_id","");
        $this->NewElement("select", "fk_user_id", "Utilisateur",array("options"=>array(1=>"Dupont Jean")));
         $this->NewElement("checkbox", "acces", "Acces",array("style"=>"clear:both"));
         $this->NewElement("checkbox", "document", "Documents");
         $this->NewElement("checkbox", "utilisation", "Gestion");
          $this->NewElement("checkbox", "impression", "Impression");
           $this->NewElement("checkbox", "historique", "Documents");
            $this->NewElement("checkbox", "alerte", "Alerte");
            
               $this->NewElement('submit','submit','Valider',array("style"=>"clear:both"));
                
     
    }


}

