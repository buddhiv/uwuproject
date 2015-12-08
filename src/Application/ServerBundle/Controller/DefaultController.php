<?php

namespace Application\ServerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationServerBundle:Default:index.html.twig');
    }
}
