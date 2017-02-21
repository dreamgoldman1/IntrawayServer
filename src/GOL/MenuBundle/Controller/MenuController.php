<?php

namespace GOL\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        return $this->render('GOLMenuBundle:Menu:menu.html.twig', array(
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
