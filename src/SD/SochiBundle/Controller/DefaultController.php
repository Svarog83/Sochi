<?php

namespace SD\SochiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SDSochiBundle:Default:index.html.twig', array('name' => $name));
    }
}
