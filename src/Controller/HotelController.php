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
    //   $hotel->setRoomA('King Bed Apartment with ocean view');
    //   $hotel->setRoomPriceA(593);
    //   $hotel->setRoomB('Queen Bedroom with partial ocean view');
    //   $hotel->setRoomPriceB(535);
    //   $hotel->setRoomC('Twin Bed Studio with street view');
    //   $hotel->setRoomPriceC(500);
    //   $hotel->setImage('images.unsplash.com/photo-1551882547-ff40c63fe5fa');
    //   $hotel->setPromo('Free night when you book 5 nights');
    //   $entityManager->persist($hotel);
    //   $entityManager->flush();
    //   return new Response('Saved a hotel with the id of  '.$hotel->getId());
    //}
}
