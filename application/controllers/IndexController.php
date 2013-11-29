<?php

class IndexController extends Zend_Controller_Action
{
    protected $em = null;
    
    public function init()
    {
        /* Initialize action controller here */
         $this->em = \Zend_Registry::get('doctrine')->getEntityManager();
    }

    public function indexAction()
    {
        // action body
    }


}

