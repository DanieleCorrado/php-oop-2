<?php

trait Price {

  private $price;

  public function getPrice() {

      return $this -> price;
  }
  public function setPrice($price) {

      if ($price <= 0) {

          throw new Exception("Price can't be negative");
      }

      $this -> price = $price;
  }
}
?>