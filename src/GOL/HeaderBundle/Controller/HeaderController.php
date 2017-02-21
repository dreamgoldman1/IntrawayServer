<?php

namespace GOL\HeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HeaderController extends Controller
{
    public function headerAction()
    {
        return $this->render('GOLHeaderBundle:Header:header.html.twig', array(
            'env' => $this->getEnv(),
        ));
    }
    
    /**
     * Get environment
     * @global type $kernel
     * @return string
     */
    public function getEnv() {
        global $kernel;
        return $kernel->getEnvironment() == "prod" ? "/" : "/app_dev.php/";
    }
}
