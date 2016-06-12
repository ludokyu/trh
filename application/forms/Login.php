<?php

class Labo_Form_Login extends Labo_Form_Default
{

    public function init($name="login")
    {
        /* Form Elements & Other Definitions Here ... */
        parent::init($name);


        $this->NewElement('text','username','Login',array("required"=>true, "ErrorMessage"=>"Veuillez renseigner l'identifiant"));
      
        $this->NewElement('password','password','Mot de passe',array("required"=>true,"ErrorMessage"=>"Veuillez renseigner le mot de passe","Label"=>array("style"=>"clear:both;float:left")))
          ->getDecorator('label')->setOption('style','clear:both;float:left;');
        
        $this->NewElement('submit','submit','Se Connecter',array("ignore"=>true,"attribs"=>array("style"=>"clear:both;margin-top:20px;float:left")));

        //$this->NewElement('button','cancel','Sortir',array("attribs"=>array("onclick"=>"location.href='/'","style"=>"margin-right:20px;float:right")));

    }


}

