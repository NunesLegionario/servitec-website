<?php

require 'db.php';
    session_start();

/* product_id, product_price, product_name */

$teste = $_SESSION['user'];
echo($teste);


if (!isset($_SESSION['user'])){

    $_SESSION['pedido']['product_id'] = $_POST['product_id'];
    $_SESSION['pedido']['product_price'] = $_POST['product_price'];
    $_SESSION['pedido']['product_name'] = $_POST['product_name'];
    header('location:login.php');
    exit();
}


$user_id = $_SESSION['user_id'];


$product_id = $_SESSION['pedido']['product_id'];


$sql_pedido = "INSERT INTO public.orders (user_id, product_id, status) VALUES ($user_id, $product_id, 'pendente')";

$pdo->exec($sql_pedido);
header('location:clientePage.php')


?>
