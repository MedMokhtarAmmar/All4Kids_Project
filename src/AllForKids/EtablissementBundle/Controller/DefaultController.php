<?php

namespace AllForKids\EtablissementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AllForKidsEtablissementBundle:Default:index.html.twig');
    }




}
