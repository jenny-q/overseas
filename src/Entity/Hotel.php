<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository")
 */
class Hotel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

      /**
     * @ORM\Column(name="address", type="string", length=255, unique=true)
     */
    private $address;

     /**
     * @ORM\Column(name="price", type="integer", length=255, unique=false)
     */
    private $price;

    /**
     * @ORM\Column(name="rating", type="integer", length=255, unique=true)
     */
    private $rating;

    /**
     * @ORM\Column(name="room", type="string", length=255, unique=true)
     */
    private $room;

    /**
     * @ORM\Column(name="image", type="string", length=255, unique=true)
     */
    private $image;

     /**
     * @ORM\Column(name="roomPrice", type="integer", length=255, unique=false)
     */
    private $roomPrice;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }
    public function getPrice(): ?int
    {
        return $this->price;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getRating(): ?int
    {
        return $this->rating;
    }
    public function setRating($rating) {
        $this->rating = $rating;
    }
    public function getRoomPrice(): ?int
    {
        return $this->roomPrice;
    }
    public function setRoomPrice($roomPrice) {
        $this->roomPrice = $roomPrice;
    }
    public function getRoom() {
        return $this->room;
    }
    public function setRoom($room) {
        $this->room = $room;
    }

}
