<?php

namespace Pricehawk\PricereaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PriceReaderBundle:Default:index.html.twig', array('name' => $name));
    }
}
