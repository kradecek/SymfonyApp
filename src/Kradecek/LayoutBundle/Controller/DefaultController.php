<?php

namespace Kradecek\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
        $defaultData = array('message' => 'Type your message here');
        $form = $this->createFormBuilder($defaultData)
        ->add('email', 'email', array('label' => 'Email address'))
        ->add('password', 'password', array('label' => 'Password'))
        ->add('send', 'submit', array('label' => 'Sign in'))
        ->getForm();
        return $this->render('KradecekLayoutBundle:Default:login.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Template
     */
    public function usersAction() {
        $users = array();
        for($i = 1; $i <= 10; ++$i) {
            $users[] = array('id' => $i, 'email' => "user$i@example.com");
        }
        
        // If I use @Template anotation (without arguments) then Symfony finds the view for this action
        return array('users' => $users);
    }
}
