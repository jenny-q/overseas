<?php

namespace App\Controller;

use App\Entity\Hotel;
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
        //grab database info
        $hotels = $this->getDoctrine()->getRepository(Hotel::class)->findAll();

        return $this->render('overseas/index.html.twig',
            array('hotel' => $hotels));
    }

     /**
     * @Route("/hotel/save")
     */
    //adding hotel data
    // public function save() {
    //   $entityManager = $this->getDoctrine()->getManager();
    //   $hotel = new Hotel();
    //   $hotel->setName('Setai');
    //   $hotel->setAddress('2001 Collins Ave, Miami Beach, USA');
    //   $hotel->setPrice(593);
    //   $hotel->setRating(4);
    //   $hotel->setRoom('Balcony suite with ocean view');
    //   $hotel->setRoomPrice(610);
    //   $entityManager->persist($hotel);
    //   $entityManager->flush();
    //   return new Response('Saved a hotel with the id of  '.$hotel->getId());
    // }
}
