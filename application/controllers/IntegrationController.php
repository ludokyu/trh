<?php

class IntegrationController extends Zend_Controller_Action{

    public function init(){
        /* Initialize action controller here */
        $this->view->controller=$this->_request->getControllerName();
        $this->view->title="Integration";
          $auth=Zend_Auth::getInstance();
        $resourceLoader=new Zend_Loader_Autoloader_Resource(array(
            'basePath'=>'../application/',
            'namespace'=>'grh',
        ));
        $resourceLoader->addResourceType('dbtable', 'models/DbTable', 'Model_DbTable')
                ->addResourceType('forms', 'forms', 'Form');
        if($auth->hasIdentity()){
// l'identité existe ; on la récupère
            $identite=$auth->getIdentity();
            $this->user=& $identite;
            $this->view->identite=$identite;
            Zend_Debug::dump($identite);
            if(!isset($identite))
                $this->_helper->redirector("index", "index");
        }
       else
            $this->_helper->redirector("index", "index");
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

        $form=new Labo_Form_Integration();
        $Table=new Labo_Model_DbTable_User();
        if($this->getRequest()->isPost()){

            $values=$this->getRequest()->getPost();
            $form->populate($values);
            if($form->isValid($values)){
                unset($values["submit"]);
               
                    $id=$Table->add($values);
               
                $form->newElement("button", "end", "Terminer", array("attribs"=>array("onclick"=>"location.href='".$this->view->url(array("action"=>"index", "controller"=>$this->view->controller), null, "default")."'")));
                $this->view->message="Les données de l\'utilisateur ont correctement été mises à jour !\n";
            }
        }
        elseif($id!=0){
            $s=$Table->getUser($id);
            $form->populate($s->toArray());
        }
        $this->view->form=$form;
    }

}
