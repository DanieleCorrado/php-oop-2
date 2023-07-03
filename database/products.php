<?php 

  require_once('./models/product.php');

  $product1 = new product('Monge', 'cibo', 10, "https://picsum.photos/150/100", 'cani');
  $product2 = new product('Osso giocattolo', 'gioco', 20, "https://picsum.photos/150/100", 'cani');
  $product3 = new product('Carny', 'cibo', 8, "https://picsum.photos/150/100", 'gatti');
  $product4 = new product('Cuccia cane', 'cucce', 60, "https://picsum.photos/150/100", 'cani');

?>