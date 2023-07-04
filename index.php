



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

<?php 
  foreach ($products as $product) { ?>

    <h1>
      <?php echo $product -> getName(); ?>
    </h1>

    <div>
      <img src="<?php echo $product -> getImage()?>" alt="Immagine prodotto">
    </div>

    <div>
      <b>Tipologia:</b> <?php echo $product -> getType(); ?>
    </div>

    <div>
      <b>Prezzo:</b> <?php echo $product -> getPrice(); ?> E
    </div>
      
    <div>
      <b>Categoria:</b> <?php echo $product -> getCategory(); ?>  
    </div>

<?php } ?>


</body>
</html>