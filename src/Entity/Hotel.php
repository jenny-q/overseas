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
     * @ORM\Column(name="roomA", type="string", length=255, unique=true)
     */
    private $roomA;

    /**
     * @ORM\Column(name="roomB", type="string", length=255, unique=true)
     */
    private $roomB;

    /**
     * @ORM\Column(name="roomC", type="string", length=255, unique=true)
     */
    private $roomC;

    /**
     * @ORM\Column(name="image", type="string", length=255, unique=true)
     */
    private $image;

     /**
     * @ORM\Column(name="roomPriceA", type="integer", length=255, unique=false)
     */
    private $roomPriceA;

    /**
     * @ORM\Column(name="roomPriceB", type="integer", length=255, unique=false)
     */
    private $roomPriceB;

    /**
     * @ORM\Column(name="roomPriceC", type="integer", length=255, unique=false)
     */
    private $roomPriceC;

    /**
     * @ORM\Column(name="promo", type="string", length=255, unique=false)
     */
    private $promo;


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
    public function getRoomPriceA(): ?int
    {
        return $this->roomPriceA;
    }
    public function setRoomPriceA($roomPriceA) {
        $this->roomPriceA = $roomPriceA;
    }
    public function getRoomPriceB(): ?int
    {
        return $this->roomPriceB;
    }
    public function setRoomPriceB($roomPriceB) {
        $this->roomPriceB = $roomPriceB;
    }
    public function getRoomPriceC(): ?int
    {
        return $this->roomPriceC;
    }
    public function setRoomPriceC($roomPriceC) {
        $this->roomPriceC = $roomPriceC;
    }
    public function getRoomA() {
        return $this->roomA;
    }
    public function setRoomA($roomA) {
        $this->roomA = $roomA;
    }
    public function getRoomB() {
        return $this->roomB;
    }
    public function setRoomB($roomB) {
        $this->roomB = $roomB;
    }
    public function getRoomC() {
        return $this->roomC;
    }
    public function setRoomC($roomC) {
        $this->roomC = $roomC;
    }
    public function getImage() {
        return $this->image;
    }
    public function setImage($image) {
        $this->image = $image;
    }
    public function getPromo($promo) {
        return $this->promo;
    }
    public function setPromo($promo) {
        $this->promo = $promo;
    }

}
