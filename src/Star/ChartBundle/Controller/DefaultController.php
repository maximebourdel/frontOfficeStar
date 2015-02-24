<?php

namespace Star\ChartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

// import des Collections
use Star\ChartBundle\Document\ligne;
use Star\ChartBundle\Document\arretbus;
use Star\ChartBundle\Document\arret;
use Star\ChartBundle\Document\retardmoyenlignes;
use Star\ChartBundle\Document\retardmoyenabsolulignes;

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
        
        
        // recupere le MAP REDUCE retardmoyenlignes 
        $retardmoyenlignes = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:retardmoyenlignes')
            ->findAll();
        
        // recupere le MAP REDUCE retardmoyenlignes
        $retardmoyenlignesabs = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:retardmoyenabsolulignes')
            ->findAll();
        
        
        /**
         * Cette partie ne s'occupe que de la récupération des lignes 
         * la PLUS en retard et la MOINS en retard
         */
        
        //on initialise avec la premiere valeur
        $lignePlusRetardVal = $retardmoyenlignes[0]->getValue();
        $ligneMoinsRetardVal = $retardmoyenlignes[0]->getValue();
        
        
        //
        foreach ($retardmoyenlignes as $retardmoyenligne){
            
            if($retardmoyenligne->getValue() < $lignePlusRetardVal){
                $lignePlusRetardVal = $retardmoyenligne->getValue();
                $lignePlusRetardNum = $retardmoyenligne->getId();
            }
            if($retardmoyenligne->getValue() > $ligneMoinsRetardVal){
                $ligneMoinsRetardVal = $retardmoyenligne->getValue();
                $ligneMoinsRetardNum = $retardmoyenligne->getId();
            }
        }
        
        // recupere les infos concernant la ligne la PLUS en retard
        $lignesPlusRetardNom = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findBy(array("id_ligne" => $lignePlusRetardNum));
        
        // recupere les infos concernant la ligne la MOINS en retard
        $lignesMoinsRetardNom = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findBy(array("id_ligne" => $ligneMoinsRetardNum));
        
        //Voici les tableaux finaux affichant les valeurs que l'on désire
        $lignePlusRetard = array($lignesPlusRetardNom[0],$lignePlusRetardVal); 
        $ligneMoinsRetard = array($lignesMoinsRetardNom[0],$ligneMoinsRetardVal);
        
        
        
        
        
        /**
         * Cette partie ne s'occupe que de la récupération des lignes
         * la PLUS en retard et la MOINS en retard ABSOLUE
         */
        
        //on initialise avec la premiere valeur
        $lignePlusRetardValAbs = $retardmoyenlignesabs[0]->getValue();
        $ligneMoinsRetardValAbs = $retardmoyenlignesabs[0]->getValue();
        
        
        //
        foreach ($retardmoyenlignesabs as $retardmoyenligneab){
            if($retardmoyenligneab->getValue() < $lignePlusRetardValAbs){
                $lignePlusRetardValAbs = $retardmoyenligneab->getValue();
                $lignePlusRetardNumAbs = $retardmoyenligneab->getId();
            }
            if($retardmoyenligneab->getValue() > $ligneMoinsRetardValAbs){
                $ligneMoinsRetardValAbs = $retardmoyenligneab->getValue();
                $ligneMoinsRetardNumAbs = $retardmoyenligneab->getId();
            }
        }
        
        // recupere les infos concernant la ligne la PLUS en retard
        $lignesPlusRetardNomAbs = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findBy(array("id_ligne" => $lignePlusRetardNumAbs));
        
        // recupere les infos concernant la ligne la MOINS en retard
        $lignesMoinsRetardNomAbs = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:ligne')
            ->findBy(array("id_ligne" => $ligneMoinsRetardNumAbs));
        
        //Voici les tableaux finaux affichant les valeurs que l'on désire
        $lignePlusRetardAbs = array($lignesPlusRetardNomAbs[0],$lignePlusRetardValAbs);
        $ligneMoinsRetardAbs = array($lignesMoinsRetardNomAbs[0],$ligneMoinsRetardValAbs);
        
        
        
        //on renvoie la vue
        return $this->render('StarChartBundle:Default:index.html.twig', 
                array(
                    
                    'arrets' => $arrets,
                    'lignes' => $lignes,
                    'ligneMoinsRetard' => $ligneMoinsRetard,
                    'lignePlusRetard' => $lignePlusRetard,
                    'ligneMoinsRetardAbs' => $ligneMoinsRetardAbs,
                    'lignePlusRetardAbs' => $lignePlusRetardAbs
                ));
    }

    /**
     * page d'affichage des donnees
     * @param Request $request
     */
    public function showDataAction (Request $request)
    {
        //recupere les valeurs renvoyees par le formulaire de la page index
        $filter = array();
        
        //et les ajoute au filtre
        if ($request->get('id_arret')) {
            $filter['id_arret'] = $request->get('id_arret');
        }
        if ($request->get('id_ligne')) {
            $filter['id_ligne'] = $request->get('id_ligne');
        }
        if ($request->get('direction') == "0"|| $request->get('direction') == "1") {
            $filter['direction'] = $request->get('direction');
        }
        
        //recherche les donnees a recuperer en fonction du filtre
        $arretbuses = $this->get('doctrine_mongodb')
            ->getRepository('StarChartBundle:arretbus')
            ->findBy($filter);
        
        
        //on renvoie la vue
        return $this->render('StarChartBundle:Default:showData.html.twig', 
                array(
                    'arretbuses' => $arretbuses,
                        'filter' => $filter
                ));
    }
  
}
