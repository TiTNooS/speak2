<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/profil", name="profil")
     */
    public function profilAction()
    {
        return $this->render('FrontBundle:Default:profil.html.twig');
    }

    /**
     * @Route("/tchat", name="tchat")
     */
    public function tchatAction()
    {
        return $this->render('FrontBundle:Default:tchat.html.twig');
    }
}
