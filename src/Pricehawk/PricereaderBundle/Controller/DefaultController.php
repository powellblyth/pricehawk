<?php

namespace Pricehawk\PricereaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pricehawk\PricereaderBundle\Entity\Pricesource;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PriceReaderBundle:Default:index.html.twig', array('name' => $name));
    }

	public function prepareGather()
	{

	}

	pu
	protected function getSources($page, $number)
	{
		$sourceModel = new Pricesource();
		$sourceModel->findAll();
	}

}
