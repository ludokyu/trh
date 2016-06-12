<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

 protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
    protected  function _initPlaceholders(){
        $this->bootstrap('view');
        $view = $this->getResource('view');

        $view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
        $view->headTitle()->setSeparator(' -- ');

       

    }

    protected function _initView() {
        $view = new Zend_View();
        //... code de paramétrage de votre vue : titre, doctype ...
//        $view->addHelperPath('ZendX/JQuery/View/Helper', 'ZendX_JQuery_View_Helper');
//        //... paramètres optionnels pour les helpeurs jQuery ....
//        ZendX_JQuery::enableView($view);
//                    $view->jQuery()
//                                ->addStylesheet($view->BaseUrl('/js/css/smoothness/jquery-ui-1.8.17.custom.css'))
//                                ->setLocalPath($view->BaseUrl('/js/jquery/js/jquery-1.7.1.min.js'))
//                                ->setUiLocalPath($view->BaseUrl('/js/jquery/js/jquery-ui-1.8.17.custom.min.js'))
//                                ->addJavascriptFile($view->BaseUrl('/js/jquery/development-bundle/ui/i18n/jquery.ui.datepicker-fr.js'))
//                                ->enable()
//                                ->uiEnable();
//        $viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
//        $viewRenderer->setView($view);
        return $view;
    }

}

