<?php

namespace GOL\FooterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FooterController extends Controller
{
    public function footerAction()
    {
        return $this->render('GOLFooterBundle:Footer:footer.html.twig');
    }
}
