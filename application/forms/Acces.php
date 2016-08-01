<?php

class Labo_Form_Acces extends Labo_Form_Default{

    public function init($name="Acces"){
        /* Form Elements & Other Definitions Here ... */
        $this->setName($name);
        $this->NewElement("hidden", "fac_id", "");
        $this->NewElement("select", "fk_user_id", "Utilisateur", array("options"=>array(1=>"Dupont Jean")));

        $this->NewElement("Checkbox", "acces", "Acces");
        $this->NewElement("Checkbox", "param", "Paramétrage");
        $this->NewElement("MultiCheckbox", "recrutement", "Recrutement", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));
        $this->NewElement("MultiCheckbox", "integration", "Integration", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));
        $this->NewElement("MultiCheckbox", "formation", "Formation", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));
        $this->NewElement("MultiCheckbox", "habilitation", "Habilitation", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));
        $this->NewElement("MultiCheckbox", "competence", "Competences", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));
        $this->NewElement("MultiCheckbox", "entretien", "Entretien", array("options"=>array("documents"=>"Documents", "utilisation"=>"Application", "impression"=>"Impression", "historique"=>"Historique", "alerte"=>"Alerte")));

        $this->NewElement('button', 'cancel', 'Annuler', array("style"=>"clear:both"));
        $this->NewElement('submit', 'valid', 'Valider');
    }

}
