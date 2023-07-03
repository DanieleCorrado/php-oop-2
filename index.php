<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>

  <?php 
    require_once('./database/products.php');
  ?>

  
</head>
<body>

<!-- Prodotto -->

<div>

  <h1>
    <?php echo $product1 -> getName(); ?>
  </h1>

  <div>
    <img src="<?php echo $product1 -> getImage()?>" alt="Immagine prodotto">
  </div>

  <div>
    <b>Tipologia:</b> <?php echo $product1 -> getType(); ?>
  </div>

  <div>
    <b>Prezzo:</b> <?php echo $product1 -> getPrice(); ?> E
  </div>
  
  <div>
    <div>
      <b>Categoria:</b> <?php echo $product1 -> getCategory(); ?>
    </div>  
  </div>
  
</div>

<!-- Prodotto -->

<div>

  <h1>
    <?php echo $product2 -> getName(); ?>
  </h1>

  <div>
    <img src="<?php echo $product1 -> getImage()?>" alt="Immagine prodotto">
  </div>

  <div>
    <b>Tipologia:</b> <?php echo $product2 -> getType(); ?>
  </div>

  <div>
    <b>Prezzo:</b> <?php echo $product2 -> getPrice(); ?> E
  </div>

  <div>
    <div>
      <b>Categoria:</b> <?php echo $product2 -> getCategory(); ?>
    </div>  
  </div>
  
</div>

<!-- Prodotto -->

<div>

  <h1>
    <?php echo $product3 -> getName(); ?>
  </h1>

  <div>
    <img src="<?php echo $product1 -> getImage()?>" alt="Immagine prodotto">
  </div>

  <div>
    <b>Tipologia:</b> <?php echo $product3 -> getType(); ?>
  </div>

  <div>
    <b>Prezzo:</b> <?php echo $product3 -> getPrice(); ?> E
  </div>

  <div>
    <div>
      <b>Categoria:</b> <?php echo $product3 -> getCategory(); ?>
    </div>  
  </div>
  
</div>

<!-- Prodotto -->

<div>

  <h1>
    <?php echo $product4 -> getName(); ?>
  </h1>

  <div>
    <img src="<?php echo $product1 -> getImage()?>" alt="Immagine prodotto">
  </div>

  <div>
    <b>Tipologia:</b> <?php echo $product4 -> getType(); ?>
  </div>

  <div>
    <b>Prezzo:</b> <?php echo $product4 -> getPrice(); ?> E
  </div>

  <div>
    <div>
      <b>Categoria:</b> <?php echo $product4 -> getCategory(); ?>
    </div>  
  </div>
  
</div>
  
</body>
</html>