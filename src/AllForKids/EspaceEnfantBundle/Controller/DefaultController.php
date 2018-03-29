<?php

namespace AllForKids\EspaceEnfantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspaceEnfantBundle:Default:index.html.twig');
    }
}
