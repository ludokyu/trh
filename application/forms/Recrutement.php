<?php

class Labo_Form_Recrutement extends Labo_Form_Default{

    public function init($name = 'Recrutement'){
        /* Form Elements & Other Definitions Here ... */
        $this->setName($name);
        $this->NewElement('hidden', 'recrutement_id','');
        $this->NewElement('text', 'poste', 'Poste/Recrutement');

        $this->NewElement('text', 'raison', 'Raison du recrutement');

        $this->NewElement('text', 'directeur', 'Directeur chargé du recrutement');

        $this->NewElement('date', 'echeance', 'Echéance du recrutement');

        $this->NewElement('text', 'rmq', 'remarque');

        $this->NewElement('html', 'profil_title', 'Profil du candidat');
        $this->NewElement('text', 'diplome_o', 'Diplomes Obligatoires');
        $this->NewElement('text', 'diplome_s', 'Diplomes Souhaitables');

        $this->NewElement('text', 'qualif', 'Qualification Formations');

        $this->NewElement('text', 'exp_o', 'Expériences Obligatoires');
        $this->NewElement('text', 'exp_s', 'Expériences Souhaitables');

        $this->NewElement('html', 'modalite_title', "Modalité de recherche et d'obtention des candidatures");

        $this->NewElement('MultiCheckbox', 'passage_annonce', "Passage d'annonce", array("options"=>array("ANPE"=>"ANPE", "Internet"=>"Internet", "Revues"=>"Revues", "Autres"=>"Autres")));
        $this->NewElement('MultiCheckbox', 'consultation_annonce', "Consultations d'annonces", array("options"=>array("ANPE"=>"ANPE", "Internet"=>"Internet", "Revues"=>"Revues", "Autres"=>"Autres")));


        $this->NewElement('html', 'entretien_title', "Entretien d'embauche");

        $this->NewElement('text', 'candidat', 'Candidat');
        $this->NewElement('textarea', 'synthese', 'Synthese - Points forts - Points faibles');

        $this->NewElement('html', 'conclusion', 'Conclusion du directeur chargé du recrutement');


        $this->NewElement('date', 'embauche', 'date d\'embauche');
        $this->NewElement('text', 'formation', 'Formation à prévoir');
        
        $this->NewElement('button', 'cancel', 'Annuler');
        
         $this->NewElement('submit', 'valid', 'Valider');

    }

}
