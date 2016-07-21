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

    /**
     * @Route("/flipbook/{id}", name="flipbook_view")
     */
    public function viewAction($id,Request $request){
        $flipBookRepository = $this->getDoctrine()->getRepository('AppBundle:flipbook');
        $cuurentFlipbook = $flipBookRepository->find($id);
        return $this->render('flipbook_admin/flipbook.html.twig',['flipbook' => $cuurentFlipbook ]);
    }
}
