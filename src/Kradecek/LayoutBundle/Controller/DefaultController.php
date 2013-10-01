<?php

namespace Kradecek\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KradecekLayoutBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('KradecekLayoutBundle:Default:admin.html.twig');
    }

    public function loginAction()
    {
        return $this->render('KradecekLayoutBundle:Default:login.html.twig');
    }
}
