<?php

require_once 'db.php';
    session_start();

/* product_id, product_price, product_name */

$teste = $_SESSION['user'];
echo($teste);


if (!isset($_SESSION['user'])){

    $_SESSION['pedido']['product_id'] = $_POST['product_id'];
    $_SESSION['pedido']['product_price'] = $_POST['product_price'];
    $_SESSION['pedido']['product_name'] = $_POST['product_name'];
    header('location:login.php');
}




// Tipo assim, isso daqui obviamente é basicamente você abrir uma porta para um SQL Injection, 
// mas pelo menos do meu lado eu não estou conseguindo usar o prepare & execute do PDO.

$userQuery = $pdo->query("SELECT * FROM public.usuarios WHERE nome = 'eee'");

$userQueryResult = $userQuery->fetch();


?>
