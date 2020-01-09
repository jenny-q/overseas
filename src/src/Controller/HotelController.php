<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HotelController extends AbstractController
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index()
    {
        return $this->render('overseas/index.html.twig');
    }
}
