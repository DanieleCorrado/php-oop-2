<?php 

  require_once('./models/product.php');

  try {
    $products = [
      new product('', 'cibo', 10, "https://picsum.photos/150/100", 'cani'),
      new product('Osso giocattolo', 'gioco', -20, "https://picsum.photos/150/100", 'cani'),
      new product('Carny', 'cibo', 8, "https://picsum.photos/150/100", 'gatti'),
      new product('Cuccia cane', 'cucce', 60, "https://picsum.photos/150/100", 'cani')
    ];
  } catch (Exception $e) {
    echo "Error: " . $e -> getMessage();
  }

?>