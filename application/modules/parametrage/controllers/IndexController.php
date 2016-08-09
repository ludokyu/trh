<?php

class Parametrage_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
     }
    
    public function addaccesAction()
    {
        // action body
        $form= new Labo_Form_Acces();
        $this->view->form=$form;
    }


}

