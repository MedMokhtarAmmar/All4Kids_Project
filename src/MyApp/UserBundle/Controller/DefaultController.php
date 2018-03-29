<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle::Login.html.twig');
    }
    public function InscritptionAction()
    {
        return $this->render('MyAppUserBundle:Security:login.html.twig');
    }

    public function homeAction()
    {
        $user=$this->getUser();
        return $this->render('MyAppUserBundle::home.html.twig',array("user"=>$user));
    }
    public function EnfantAction()
    {$user=$this->getUser();
        return $this->render('MyAppUserBundle::espaceEnfant.html.twig',array("user"=>$user));
    }
    public function AdminAction()
    {$user=$this->getUser();
        return $this->render('MyAppUserBundle::page_Admin.html.twig',array("user"=>$user));
    }
}
