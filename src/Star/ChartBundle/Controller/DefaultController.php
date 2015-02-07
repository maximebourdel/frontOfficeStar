<?php

namespace Star\ChartBundle\Controller;

use Star\StartChartBundle\Document\arretbus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $arretbuses = $this->get('doctrine_mongodb')
	       ->getRepository('StarChartBundle:arretbus')
	       ->findBy(
	               array('id_ligne'=> $request->get('id_ligne'))	               
            );
;

	return $this->render('StarChartBundle:Default:index.html.twig', array('arretbuses' => $arretbuses));
    }
}
