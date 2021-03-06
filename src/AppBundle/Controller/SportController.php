<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Sport;
use AppBundle\Form\SportType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SportController extends Controller
{
    
    public function homeAction(Request $request){
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $sports = $em->getRepository('AppBundle:Sport')->findAll();
    
        return $this->render('AppBundle::sport/index.html.twig', [
            'sports' => $sports
        ]);
    }
    
    /*
     * SPORT
     */
    public function getSportsAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $sports = $em->getRepository('AppBundle:Sport')->findAll();

        return $this->render('AppBundle::sport/indexSport.html.twig', [
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
    
    public function addSportAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        
        $sport = new Sport();
        
        $form = $this->createForm(SportType::class, $sport);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $sport = $form->getData();
            
            $em->persist($sport);
            $em->flush();
            
            return $this->redirectToRoute('sport_show', ['id' => $sport->getId()]);
        }
        
        return $this->render('AppBundle::sport/addSport.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
    /*
     * CLUBS
     */
    public function getClubsAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $clubs = $em->getRepository('AppBundle:Club')->findAll();
        
        return $this->render('AppBundle::sport/indexClub.html.twig', [
            'clubs' => $clubs
        ]);
    }
    
    public function getClubAction(Request $request, int $id){
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('AppBundle:Club')->find($id);
        //$clubs = $em->getRepository('AppBundle:Club')->findBySport($sport);
    
        return $this->render('AppBundle::sport/showClub.html.twig', [
            'club' => $club,
            //'clubs' => $clubs
        ]);
    }
    
    /*
     * JOUEURS
     */
    public function getJoueursAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $joueurs = $em->getRepository('AppBundle:Joueur')->findAll();
        
        return $this->render('AppBundle::sport/indexJoueur.html.twig', [
            'joueurs' => $joueurs
        ]);
    }
    
    public function getJoueurAction(Request $request, int $id){
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository('AppBundle:Joueur')->find($id);
        
        return $this->render('AppBundle::sport/showJoueur.html.twig', [
            'joueur' => $joueur
        ]);
    }
}
