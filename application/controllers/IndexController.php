<?php

class IndexController extends Zend_Controller_Action{

    public function init(){
        /* Initialize action controller here */
    }

    public function indexAction(){
        // action body
     //   $this->view->title="Authentification";
        $this->view->headTitle()->prepend("Authentification");
        $form=new Labo_Form_Login();
        $this->view->message='';
        $this->view->InlineScript()->appendScript("document.getElementById('username').focus();");
        $this->view->form=$form;
        if($this->getRequest()->isPost()){
            $values=$this->getRequest()->getPost();

            if($form->isValid($values)){

                $this->view->message=$this->login($values);
            }
            else{
                $this->view->message="Veuillez renseigner l'identifiant et le mot de passe !";
            }
        }
        $this->view->RHLabo_version=$this->getVersion();
    }

    private function login($values){
        Zend_Loader::loadClass('Zend_Filter_StripTags');
        $f=new Zend_Filter_StripTags();
        $username=$f->filter($values['username']);
        $password=$f->filter($values['password']);
        $dbAdapter=Zend_Db_Table::getDefaultAdapter();
        $authAdapter=new Zend_Auth_Adapter_DbTable($dbAdapter);
        $authAdapter->setTableName('utilisateur')
                ->setIdentityColumn('user_login')
                ->setCredentialColumn('user_password')
                ->setCredentialTreatment('PASSWORD(?)');
        $authAdapter->setIdentity($username);
        $authAdapter->setCredential($password);
        $auth=Zend_Auth::getInstance();
        $result=$auth->authenticate($authAdapter);
        if($result->isValid()){
            $this->view->message='Connexion réussi !';
            $identite=$result->getIdentity();
            $storage=$auth->getStorage();
            $storage->write($identite);
            $log=new Labo_Model_DbTable_Log();
            $log->log($result->getCode(), "Identification");
            
           $this->_helper->redirector("accueil","index");
            
        }
        else{
            return 'Échec de la connexion !<br/>Identifiant ou mot de passe incorrect';
        }
    }

    public function getVersion(){
        $bootstrap=$this->getInvokeArg('bootstrap');
        $ns=rtrim($bootstrap->getAppNamespace(), '_');
        // Récupère les paramètres sous la forme d'un tableau
        $config=$bootstrap->getOption($ns);

        return $config['version'];
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

    public function accueilAction(){
        // action body
    }

}
