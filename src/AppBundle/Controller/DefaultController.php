<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * Amène sur la homepage
     * @Route("/", name="homepage")
     *
     * indexAction
     *
     * @return void
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
}
