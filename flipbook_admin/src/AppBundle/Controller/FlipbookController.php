<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FlipbookController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('flipbook_admin/index.html.twig');
    }
}
