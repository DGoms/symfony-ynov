<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SportController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $sports = $em->getRepository('AppBundle:Sport')->findAll();

        return $this->render('AppBundle::sport/index.html.twig', [
            'sports' => $sports
        ]);
    }

    public function getSportAction(Request $request, int $id)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $sport = $em->getRepository('AppBundle:Sport')->find($id);
        $clubs = $em->getRepository('AppBundle:Club')->findBySport($sport);

        return $this->render('AppBundle::sport/showSport.html.twig', [
            'sport' => $sport,
            'clubs' => $clubs
        ]);
    }
}
