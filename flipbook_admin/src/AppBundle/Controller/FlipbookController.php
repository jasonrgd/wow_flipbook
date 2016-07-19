<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\flipbook;

class FlipbookController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function listAction(Request $request)
    {
        // replace this example code with whatever you need
        //$allFlipbooks = new flipbook();

        $flipBookRepository = $this->getDoctrine()->getRepository('AppBundle:flipbook');
        $allFlipbooks = $flipBookRepository->findAll();
        return $this->render('flipbook_admin/index.html.twig', [ 'flipbooks' => $allFlipbooks ]);
    }
}
