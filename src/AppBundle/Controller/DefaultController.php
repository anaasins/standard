<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * home_page
     */
    public function homeAction(Request $request)
    {
        return $this->render('frontal/index.html.twig');
    }

    /**
     * login_page
     */
    public function loginAction(Request $request)
    {
        return $this->render('frontal/login.html.twig');
    }

    /**
     * contact_page
     */
    public function contactAction(Request $request)
    {
        return $this->render('frontal/contact.html.twig');
    }

    /**
     * games_page
     */
    public function gamesAction(Request $request)
    {
        return $this->render('frontal/entrenamientos.html.twig');
    }
}
