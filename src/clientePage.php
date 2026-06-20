<?php

//Código de error
// 1 = Sem  nível de acesso disponível. Má inicialização da Session.
// 2 = SESSION não encontrada/ Não Iniciada.

require 'db.php';
require_once 'php/functions/sessionVerifier.php';

sessionVerifier(1);

$user_id = $_SESSION['user_id'];

$sql_pedidos = "SELECT * FROM public.orders LEFT JOIN public.products ON orders.product_id = products.id WHERE orders.user_id = $user_id ORDER BY orders.order_id";

$resultado_pedidos = $pdo->query($sql_pedidos);

$pedidos = $resultado_pedidos->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/header.css">
</head>

<body>

<header>

    <img id="nav-icon-header" src="assets/icons/nav-icon.svg" alt="">

    <img src="assets/images/logo-servitec.jpg" alt="Logo da Emprea Servitec" id="logo-header">

    <span id="texto-especialista-header"><a id="whatsapp-link-header" href="https://wa.me/c/5522981021821">Fale com um
        dos nossos especialistas:<br>(22) 98102-1821</a></span>


    <div id="search-wrapper-header">
      <form action="">
        <input type="text" placeholder="Pesquise aqui:" id="">
        <button class="btn-search-submit" type="submit"><img id="search-icon-header" src="assets/icons/search-icon.svg"
            alt=""></button>
      </form>
    </div>

    <a class="hyperlink-header" href="">FAQ</a>
    <a class="hyperlink-header" href="">Contato</a>
    <a class="hyperlink-header" href="">Financiamento</a>
    <a class="hyperlink-header" href="">Blog</a>

    <div id="cart-wrapper-header">


      <img src="assets/icons/cart-shopping-svgrepo-com.svg" alt="" id="icon-carrinho-header">

      <span id="red-counter-header">0</span>

      <div id="cart-dropdownlist"></div>

    </div>

    <div id="user-wrapper-header">
      <a href="login.php">
        <img src="assets/icons/user-icon.svg" alt="" id="">
      </a>
    </div>




  </header>

  <nav>
    <ul>
      <li>
        <a>PAINEIS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">400WP</a>
          <a href="">500WP</a>
          <a href="">650WP</a>
          <a href="">750WP</a>
          <a href="">800WP</a>
          <a href="">900WP</a>

        </div>
      </li>
      <li>
        <a>KITS FOTOVOLTAICOS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">KIT RESIDENCIAL</a>
          <a href="">KIT COMERCIAL</a>
          <a href="">KIT INDUSTRIAL</a>

        </div>
      </li>
      <li>
        <a>INVERSORES</a>
        <div class="wrapper-dropdown-menu">
          <a href="">INVERSOR</a>
          <a href="">MICROINVERSOR</a>
          <a href="">HIBRIDO</a>

        </div>
      </li>
      <li>
        <a>OUTROS</a>
        <div class="wrapper-dropdown-menu">
          <a href="">OUTROS</a>

        </div>
      </li>

    </ul>

  </nav>


  <?php
  foreach ($pedidos as $pedido) {
    echo "<div>
      <p>ID do Pedido: " . $pedido['order_id'] . "</p>
      <p>Produto: " . $pedido['nome'] . "</p>
      <p>Status: " . $pedido['status'] . "</p>
    </div>";
  }
  ?>

  <footer>
    <img id="footer-logo" src="assets/images/logo-servitec.jpg" alt="">

    <div>

    </div>
  </footer>

</body>

</html>