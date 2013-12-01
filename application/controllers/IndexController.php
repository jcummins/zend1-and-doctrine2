<?php
use Doctrine\DBAL\DriverManager;

class IndexController extends Zend_Controller_Action
{
    protected $em = null;
    
    public function init()
    {
        /* Initialize action controller here */
        $this->em = \Zend_Registry::get('doctrine')->getEntityManager();
        $conn = $this->em->getConnection();
        var_dump($conn);

    }

    public function indexAction()
    {
        // action body
    }


}

