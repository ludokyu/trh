<?php

class EvalcompetenceController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->view->controller = $this->_request->getControllerName();
        $this->view->title="Evaluation des compétences";
    }

    public function indexAction()
    {
        // action body
    }
    
    public function accesAction()
    {
        // action body
    }

    public function documentAction()
    {
        // action body
    }

    public function utilisationAction()
    {
        // action body
    }

    public function impressionAction()
    {
        // action body
    }

    public function historiqueAction()
    {
        // action body
    }

    public function alerteAction()
    {
        // action body
    }
  public function formaccesAction()
    {
        // action body
    }

     public function addAction()
    {
        // action body
         $this->view->form=new Labo_Form_Evaluation();
    }

}

