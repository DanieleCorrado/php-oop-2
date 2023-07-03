<?php

  class product {
    private $name;
    private $type;
    private $price;
    private $image;
    private $category;

    public function __construct($name, $type, $price, $image, $category) {

      $this -> setName($name);
      $this -> setType($type);
      $this -> setPrice($price);
      $this -> setImage($image);
      $this -> setCategory($category);

    }

    public function setName($name) {
      $this -> name = $name;
    }

    public function getName() {
      return $this -> name;
    }

    public function setType($type) {
      $this -> type = $type;
    }

    public function getType() {
      return $this -> type;
    }

    public function setPrice($price) {
      $this -> price = $price;
    }

    public function getPrice() {
      return $this -> price;
    }

    public function setImage($image) {
      $this -> image = $image;
    }

    public function getImage() {
      return $this -> image;
    }

    public function setCategory($category) {
      $this -> category = $category;
    }

    public function getCategory() {
      return $this -> category;
    }

  }
?>