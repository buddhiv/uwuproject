<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 12/8/2015
 * Time: 1:11 PM
 */

namespace Application\ClientBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function clientHomeAction()
    {
        return $this->render('ApplicationClientBundle:Default:home.html.twig');
    }

    public function clientApplicationViewAction(){
        return $this->render('ApplicationClientBundle:Default:main.html.twig');
    }
}