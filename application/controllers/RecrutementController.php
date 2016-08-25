<?php

class RecrutementController extends Zend_Controller_Action{

    public function init(){
        /* Initialize action controller here */
        $this->view->controller=$this->_request->getControllerName();
        $this->view->title="Recrutement";
    }

    public function indexAction(){
        // action body
    }

    public function accesAction(){
        // action body
    }

    public function documentAction(){
        // action body
    }

    public function utilisationAction(){
        // action body
    }

    public function impressionAction(){
        // action body
    }

    public function historiqueAction(){
        // action body
    }

    public function alerteAction(){
        // action body
    }

    public function formaccesAction(){
        // action body
    }

    public function addAction(){
        // action body
        $Table=new Labo_Model_DbTable_Recrutement();
        $form=new Labo_Form_Recrutement();
        if($this->getRequest()->isPost()){

            $values=$this->getRequest()->getPost();
            $form->populate($values);
            if($form->isValid($values)){
                unset($values["submit"]);
               
                    $id=$Table->addRecrutement($values);
               
                $form->newElement("button", "end", "Terminer", array("attribs"=>array("onclick"=>"location.href='".$this->view->url(array("action"=>"index", "controller"=>"recrutement"), null, "default")."'")));
                $this->view->message="Les données du recrutement ont correctement été mises à jour !\n";
            }
        }
        elseif($id!=0){
            $s=$Table->getRecrutement($id);
            $form->populate($s->toArray());
        }
        $this->view->form=$form;
    }

}
