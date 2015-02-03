<?php

namespace Star\ChartBundle\Controller;

use Star\StartChartBundle\Document\arretbus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $arretbuses = $this->get('doctrine_mongodb')
	->getRepository('StarChartBundle:arretbus')
	->findAll()->limit(714);
;

	return $this->render('StarChartBundle:Default:index.html.twig', array('arretbuses' => $arretbuses));
    }
}
