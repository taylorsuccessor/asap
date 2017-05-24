<?php


class asap_helloworld_indexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {




        $this->loadLayout();
        echo 'my name is mohammad hashim';
        $this->renderLayout();
//        Zend_Debug::dump($this->getLayout()->getUpdate()->getHandles());
//
//        $this->getResponse()->setBody('hello world this is mohammad hashim');
    }

    protected function _getSession()
    {
        return Mage::getSingleton('customer/session');
    }

    public function loginAction(){

        if ($this->_getSession()->isLoggedIn()) {
            $this->_redirect('*/*/');
            return;
        }
        $this->getResponse()->setHeader('Login-Required', 'true');
        $this->loadLayout();
        $this->_initLayoutMessages('customer/session');
        $this->_initLayoutMessages('catalog/session');
        $this->renderLayout();
    }

}
