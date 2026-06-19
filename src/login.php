<?php
session_start();
?>

<form action="auth.php" method="post">
    <input type="text" id="userName" name="userName">
    <input type="password" id="password" name="password">

    <?php if(isset($_SESSION['pedido'])){
       echo("<input type=\"hidden\" name=\"formCheckout\" value=\"true\">");
    } ?>
    
    <input type="submit">


</form>