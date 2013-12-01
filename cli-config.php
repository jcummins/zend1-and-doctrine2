<?php
// cli-config.php
require_once "application/Bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(\Zend_Registry::get('doctrine')->getEntityManager());