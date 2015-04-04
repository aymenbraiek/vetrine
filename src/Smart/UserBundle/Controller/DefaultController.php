<?php

namespace Smart\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SmartUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
