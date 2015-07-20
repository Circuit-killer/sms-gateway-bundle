<?php

namespace EffectiveSolutions\SMSGatewayBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EffectiveSolutionsSMSGatewayBundle:Default:index.html.twig', array('name' => $name));
    }
}
