<?php

namespace AllForKids\AstuceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AstuceBundle:Default:index.html.twig');
    }
}
