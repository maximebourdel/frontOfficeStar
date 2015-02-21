<?php

namespace Star\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

// import des Collections
use Star\ChartBundle\Document\ligne;
use Star\ChartBundle\Document\arretbus;
use Star\ChartBundle\Document\arret;

// import des formulaires
use Star\ChartBundle\Form\LigneConsultType;

class DefaultController extends Controller
{

    /**
     * page d'accueil
     * 
     * @param Request $request            
     */
    public function indexAction (Request $request)
    {
        $post = Request::createFromGlobals();
        
        //si c'est le formulaire ligne_submit qui a ete renvoye
        if ($post->request->has('ligne_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showLigne', 
                    array(
                        'id_ligne' => $request->get('ligne_id_ligne'), 
                        'direction' => $request->get('ligne_direction')
                    )
            ));
        //si c'est le formulaire arret_submit qui a ete renvoye
        } if ($post->request->has('arret_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showArret', 
                    array(
                        'id_arret' => $request->get('arret_id_arret'), 
                    )
            ));
        //si c'est le formulaire ligne_arret qui a ete renvoye
        } if ($post->request->has('ligne_arret_submit')) {
            return $this->redirect($this->generateUrl('star_chart_showLigneArret', 
                    array(
                        'id_ligne' => $request->get('ligne_arret_id_ligne'),
                        'id_arret' => $request->get('ligne_arret_id_arret'),
                    )
            ));
        }
         
        // recupere le GTFS ligne
        $lignes = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findAll();
        
        // recupere le GTFS arret
        $arrets = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:arret')
            ->findBy(array(), array('name' => 'ASC'));
        
        return $this->render('StarChartBundle:Default:index.html.twig', 
                array(
                    
                    'arrets' => $arrets,
                    'lignes' => $lignes,
                    'post' => $post
                ));
    }

    /**
     * page d'affichage des donnees
     * @param Request $request
     */
    public function showDataAction (Request $request)
    {
        $filter = array();
        $order = array("date_requete" => "ASC");
        if ($request->get('id_arret')) {
            $filter['id_arret'] = $request->get('id_arret');
        }
        if ($request->get('id_ligne')) {
            $filter['id_ligne'] = $request->get('id_ligne');
        }
        if ($request->get('direction') == "0"|| $request->get('direction') == "1") {
            $filter['direction'] = $request->get('direction');
        }
        
        $arretbuses = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:arretbus')
            ->findBy($filter);
        
        return $this->render('StarChartBundle:Default:showData.html.twig', 
                array(
                    'arretbuses' => $arretbuses,
                        'filter' => $filter
                ));
    }
  
}
