<?php

namespace Application\Niagara\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Template
     */
    public function indexAction()
    {
//        return $this->render('MainBundle:Default:index.html.twig', array('name' => 'aizen'));
        return array('name' => 'I');
    }
}
