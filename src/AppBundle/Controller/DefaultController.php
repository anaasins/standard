<?php

/*namespace AppBundle\Controller;

//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
*/
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * home_page
     *
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
}
