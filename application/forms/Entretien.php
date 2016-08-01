<?php

class Labo_Form_Entretien extends Labo_Form_Default{

    public function init($name='entretien'){
        /* Form Elements & Other Definitions Here ... */
        $this->setName($name);
        $this->NewElement('hidden', 'entretien_id', '');

        $this->NewElement('date', 'date_entretien', 'Date de l\'entretien');
        $this->NewElement('html', 'Personne_entretien', 'Personne chargée de l\'entretien');
        $this->NewElement('text', 'Personne_entretien_nom_prenom', 'Nom, prénom ');
        $this->NewElement('text', 'Personne_entretien_fonction', 'Fonction ');
        $this->NewElement('text', 'Personne_entretien_service', 'Service ');


        $this->NewElement('html', 'salarie_entretien', 'Le salarié');
        $this->NewElement('text', 'Salarie_entretien_nom_prenom', 'Nom, prénom ');
        $this->NewElement('text', 'Salarie_entretien_sexe', 'Sexe ');
        $this->NewElement('text', 'Salarie_entretien_age', 'Age ');
        $this->NewElement('date', 'Salarie_date_embauche', 'Date d\'embauche');

        $this->NewElement('text', 'Salarie_poste', 'Poste actuel ');
        $this->NewElement('date', 'Salarie_poste_depuis', 'Depuis le');
        $this->NewElement('textarea', 'Salarie_detail_poste', 'Poste occupé(s) depuis l\'entrée des l\'entreprise (intitulés, durées) ');


        $this->NewElement('html', 'salarie_parcours', 'Votre parcours professionnel dans l\'entreprise (postes, activités, évolutions)');

        $this->NewElement('html', 'salarie_missions', 'Vos missions et fonctions');
        $this->NewElement('textarea', 'Salarie_mission_desc', 'Pouvez-vous décrire votre fonction et les missions que vous exercez dans l\'entreprise ? (responsabilités, liens hiérarchiques...)');

        $this->NewElement('html', 'salarie_evolution', 'les évolutions rencontrées depuis le dernier entretien professionnel');

        $this->NewElement('text', 'Salarie_evolution_desc', 'Vos missions/fonctions ont-elles évoluées depuis votre dernier entretien ?');

        $param=array("Label"=>array("style"=>"padding-left:30px"));
        $this->NewElement('text', 'Salarie_evolution_desc_why_y', 'Si oui, décrivez en quoi (changement de service, de métier, prise de nouvelles responsabilités ...)')
        ;

        $this->NewElement('text', 'Salarie_evolution_desc_with', '  Avez-vous été accompagné(e) et/ou bénéficié d\'une aide pour y faire face ?', $param)
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_evolution_desc_how', '   Comment avez-vous vécu ces évolutions ?')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_evolution_desc_how2', '  Avez-vous rencontré des difficutés? Si oui , précisez lesquelles')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_evolution_desc_why_n', 'Si non, auriez-vous aimé qu\'elles évoluent ? De quelle manière ?');

        $this->NewElement('html', 'Salarie_appreciation', 'Votre appréciation sur votre métier, votre fonction, vos missions');
        $this->NewElement('text', 'Salarie_appreciation_satisfait', 'Êtes vous satisfait de votre fonction et vos missions actuelles ?')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_appreciation_plait_p', 'Qu est ce qui vous plait le plus dans votre métier (intérêts, motivations)?');

        $this->NewElement('text', 'Salarie_appreciation_plait_m', 'Qu est ce qui vous plait le moins dans votre métier (manques, regrets) ?');

        $this->NewElement('textarea', 'Salarie_appreciation_diff', 'Rencontrez vous des difficultés ? Si oui, lesquelles ?', array("attribs"=>array("style"=>"margin-left:30px")));


        $this->NewElement('html', 'salarie_action', 'les actions de formation / bilan e compétences / VAE dont vous aurez bénéficié depuis votre arrivée dans l\'entreprise');


        $this->NewElement('text', 'Salarie_formation_nb_h', 'Nombre d\'heures de formation depuis 2 ans');

        $this->NewElement('text', 'Salarie_formation_bilan', 'Avez-vous suivi une formation ou réalisé un bilan de compétences / une VAE depuis votre embauche .');

        $this->NewElement('text', 'Salarie_formation_satisfait', 'Etes vous statisfait des actions suivies');

        $this->NewElement('text', 'Salarie_formation_apport', 'Qu est ce que ces actions vous apportent dans l\'exercice quotidien de votret travail / l\'évolution de vos missions /fonctions ?');

        $this->NewElement('html', 'Salarie_diplome_html', 'Les diplômes, titres que vous avez obtenus');

        $this->NewElement('text', 'Salarie_diplome', 'Etes vous satisfait d\'avoir obtenu cette cetification');

        $this->NewElement('text', 'Salarie_diplome_bilan', 'Qu est ce qu elle vous apporte dans l\'exercice quotidien de votre travail / l\'évolution de vos missions/ fonctions ?');

        $this->NewElement('html', 'Salarie_evolution', 'Vos souhaits pour l\'évolution de votre parcours professionnel, vos souhaits et vos projets');

        $this->NewElement('html', 'Salarie_evolution_poursuite', 'La pousuite de vote parcours professionnel');

        $this->NewElement('text', 'Salarie_evolution_souhait', 'Avez vous des souhaits pour l avenir, si oui, précisez votre objectif ');


        $this->NewElement('text', 'Salarie_evolution_metier', 'Evolution de votre métier / vos missions / fonctions')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_evolution_metier', 'Evolution de votre métier / vos missions / fonctions')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_evolution_changement', 'Changement de poste, d activité / rise de responsabilité')
                ->getDecorator('Label')->setOption('class', 'padding');
        $this->NewElement('text', 'Salarie_evolution_projet', 'Projet de formation / VAE')
                ->getDecorator('Label')->setOption('class', 'padding');

        $this->NewElement('text', 'Salarie_projet', 'Avez-vous un projet déjà défini ? lequel ?');

        $this->NewElement('text', 'Salarie_cpf', 'Envisagez vous d utiliser votre compte personnel de formation (PCF)?');

        $this->NewElement('html', 'Salarie_oeuvre', 'Pour mettre en oeuvre ce proje, quels-sont');

        $this->NewElement('text', 'Salarie_pt_fort', 'Vos points forts/ atouts ?');

        $this->NewElement('text', 'Salarie_contraintes', 'Vos contraintes (professionnelles, personnelles) / freins ?');

        $this->NewElement('text', 'Salarie_pt_mieux', 'les points à améliorer / difficultés à lever / manques à combler ?');

        $this->NewElement('html', 'Salarie_pers_agee_45', 'Si la personne a de 45 à 55 ans');

        $this->NewElement('textarea', 'Salarie_suite_carriere', 'Comment envisagez-vous la suite de votre carriere ?');
        $this->NewElement('textarea', 'Salarie_elan_carriere', 'SOuhaitez vous lui donner un nouvel élan en vous formant, en changeant d\'emploi, en diversifiant vos activités ?');

        $this->NewElement('html', 'Salarie_pers_agee_45', 'Si la personne a 55 ans ou plus');

        $this->NewElement('textarea', 'Salarie_approche_retraite', 'Comment vivez-vous l\'approche de la retraite ?  (crainte, souhait de continuer à travailer/de réduire votre temps de travail en poursuivant votre activité...)?');
        $this->NewElement('textarea', 'Salarie_depart_retraite', 'Comment envisagez-vous votre départ à la retraite ? Avez-vous un projet ?');
        $this->NewElement('textarea', 'Salarie_transmission_competence', 'Avez vous songé à organiser la transmission de vos compétences ?');
        $this->NewElement('html', 'Salarie_no_evolution', 'Si vous n\'avez pas de projet / souhait d\'évolution');
        $this->NewElement('textarea', 'Salarie_no_evolution_why', 'Savez vous pourquoi ? (absence d\'envie, contraintes personnelles, "peur" du changement, satisfaction de votre situation actuelle...)');
        $this->NewElement('textarea', 'Salarie_no_evolution_more', 'Aimeriez vous en discuter ? Disposer de plus d\'informations pour connaître vos possibilités ?');

        $this->NewElement('html', 'salarie_info', 'Avant de poursuivre l\'entretien sur la mise en oeuvre effective du projet, informez le salarié sur les différentes solutions à mobiliser (dispositifs de formation, bilan de compétences, VAE...), les évolutions possibles au sein de l\'entreprise... Sollicitez des questions et ptéparez vous à y répondre.');
        $this->NewElement('html', 'salarie_evol', 'La mise en oeuvre de votre projet d\'évolution professionnelle');
        $this->NewElement('html', 'salarie_action_formation', 'Actions de formation');
        $this->NewElement('text', 'Salarie_theme_formation', 'Thèmes / intitulés');
        $this->NewElement('text', 'Salarie_periode_prevision', 'Période prévisionnelle de réalisation');
        $this->NewElement('text', 'Salarie_Modalite', 'Modalités de réalisation envisagées (dispositif, réalisation pendant / hors temps de travail...)');

        $this->NewElement('html', 'salarie_VAE', 'VAE');
        $this->NewElement('text', 'Salarie_certif_visee', 'Certification visée (diplôme-titre-CQP)');
        $this->NewElement('text', 'Salarie_VAE_periode_prevision', 'Période prévisionnelle de réalisation');
        $this->NewElement('text', 'Salarie_VAE_Modalite', 'Modalités de réalisation envisagées (dispositif, réalisation pendant / hors temps de travail...)');


        $this->NewElement('html', 'salarie_Bilan', 'Bilan de compétences');
        $this->NewElement('text', 'Salarie_Bilan_periode_prevision', 'Période prévisionnelle de réalisation');
        $this->NewElement('text', 'Salarie_Bilan_Modalite', 'Modalités de réalisation envisagées (dispositif, réalisation pendant / hors temps de travail...)');
        
        $this->NewElement('html', 'salarie_Autre_formation', 'Autres actions envisagées, précisez');
        $this->NewElement('text', 'Salarie_Autre_resp', 'Nouvelles responsabilités au sein de l\'entreprise');
        $this->NewElement('text', 'Salarie_Autre_Modalite', 'Modalités interne / externe');
        $this->NewElement('text', 'Salarie_Autre_Accomp', 'Accompagnement / formation interne /tutorat');
        $this->NewElement('text', 'Salarie_Creation_entreprise', 'Création d entreprise');
        
          $this->NewElement('textarea', 'Entretien_comm', 'Vos commentaires éventuels');

          
        $this->NewElement('button', 'cancel', 'Annuler');

        $this->NewElement('submit', 'valid', 'Valider');
    }

}
