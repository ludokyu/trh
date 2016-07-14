<?php

class Labo_Form_Entretien extends Zend_Form
{

    public function init($name='entretien')
    {
        /* Form Elements & Other Definitions Here ... */
          $this->NewElement('date', 'date_entretien', 'Date de l\'entretien');
          $this->NewElement('html', 'Personne_entretient', 'Personne chargée de l\'entretien');
          $this->NewElement('text', 'Personne_entretien_nom_prenom', 'Nom, prénom :');
          $this->NewElement('text', 'Personne_entretien_fonction', 'Fonction :');
          $this->NewElement('text', 'Personne_entretien_service', 'Service :');

    }


}

