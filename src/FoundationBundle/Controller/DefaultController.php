<?php

namespace FoundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FoundationBundle:Default:index.html.twig');
    }
}
