<?php

class Labo_Form_Integration extends Labo_Form_Default{

    public function init($name='formIntegration'){
        /* Form Elements & Other Definitions Here ... */

        $this->setName($name);
        /* table utilisateur */
        $this->NewElement('hidden', 'user_id', '');
        $this->NewElement('text', 'user_nom', 'Nom');
        $this->NewElement('text', 'user_prenom', 'Prénom');
        $this->NewElement('date', 'user_date_naiss', 'Date de naissance');
        $this->NewElement('text', 'user_mail', 'Adresse e-mail');
        $this->NewElement('textarea', 'user_adresse', 'Adresse');
        $this->NewElement('text', 'user_code_postal', 'Code Postal');
        $this->NewElement('text', 'user_ville', 'Ville');
        $this->NewElement('text', 'user_numsec', 'Numéro de sécurité sociale');

        $this->NewElement('select', 'fk_site', 'Site');


        $this->NewElement('MultiCheckbox', 'fk_poste_user', 'Postes concernés');

        /* table user_integration */
        $this->NewElement('select', 'fk_tuteur', 'Tuteur');

        $this->NewElement('text', 'duree_integration', 'Durée de l\'intégration');

        $this->NewElement('date', 'date_integration', 'Date de l\'intégration');

        $this->NewElement('html', 'integration_personnel', 'Integration personnel');
        $this->NewElement('html', 'visite_presentation', 'Visite et présentation');
        $this->NewElementIntegration('visite_locaux', 'Visite des locaux');
        $this->NewElementIntegration('organigramme', 'Présentation des organigrammes');
        $this->NewElementIntegration('pres_resp_personnel', 'Présentation des responsables et du personnel');
        $this->NewElementIntegration('pres_activite', 'Présentation de l\'activité');
        
        $this->NewElement('html', 'administratif', 'Administratif');
        $this->NewElementIntegration('signature_contrat', 'Signature du contrat de travail');
        $this->NewElementIntegration('lecture_reglement', 'Lecture du règlement intérieur');
        $this->NewElementIntegration('convention_collective', 'Convention collective (présentation)');
        $this->NewElementIntegration('signature_charte', 'Signature de la Charte informatique');
        $this->NewElementIntegration('affichage_obligatoire', 'Affichage obligatoire (présentation)');
        $this->NewElementIntegration('horaire_pointage', 'Présentation des horaires et pointage');
        $this->NewElementIntegration('badge', 'Port du badge');
        $this->NewElementIntegration('visite_medical', 'Visite médical d\'embauche');
        $this->NewElementIntegration('vaccination_obligatoire', 'Suivi des vaccinations obligatoires');
        $this->NewElementIntegration('Cas_particuliers', 'Cas particuliers');
        
        $this->NewElement('html', 'formation_habilitation', 'Formation / habilitation');
        $this->NewElementIntegration('fiche_poste', 'Présentation de la fiche de poste');
        $this->NewElementIntegration('signature_confidentialiate', 'Signature de l\'engagement de confidentialité');
        $this->NewElementIntegration('modele_signature', 'Modèle de signatures');
        $this->NewElementIntegration('nomination_formateur', 'Nomination des formateurs');
        $this->NewElementIntegration('Présentation_prog_formation', 'Présentation du programme de formation');
        
        $this->NewElement('html', 'HSD', 'HSD');
         $this->NewElementIntegration('doc_hygiene', 'Documents liés à l\'hygiène, la sécurité et la gestion des déchets');
         $this->NewElement('html', 'Qualite', 'Qualité');
         $this->NewElementIntegration('pres_norme', 'Présentation des normes et du SMQ');
         $this->NewElementIntegration('redac_fiche_conform', 'Rédaction d\'une fiche de non-conformité');
         $this->NewElementIntegration('redac_fiche_derog', 'Rédaction d\'une fiche de dérogation');
         $this->NewElementIntegration('logiciel_manag_qualite', 'Utilisation du logiciel de management et de la qualité');
         $this->NewElementIntegration('redac_verif_doc_interne', 'Rédaction et vérification d\'un document qualité interne');
         $this->NewElementIntegration('lecture_AR_doc_interne', 'Lecture et A/R des documents qualités internes');
         $this->NewElementIntegration('Lecture_manuel_qualite', 'Lecture du manuel qualité');
          $this->NewElement('html', 'Syst_info', 'Système informatique');
         $this->NewElementIntegration('Hab_util_logiciel', 'Habilitation à l \'utilisation du logiciel');
         
        $this->NewElement('button', 'cancel', 'Annuler');

        $this->NewElement('submit', 'valid', 'Valider');
    }

    public function NewElementIntegration($code, $libelle){
        $this->NewElement('html', $code.'_libelle', $libelle);
        $this->NewElement('file', $code.'_doc', "");

        $this->NewElement('date', $code.'_date', '');
        $this->NewElement('checkbox', $code.'_visa_tuteur', '');
        $this->NewElement('checkbox', $code.'_visa_stagiaire', '');
    }

}



