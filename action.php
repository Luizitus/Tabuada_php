<?php
require ('variaveis.php');?>

Numerador escolhido foi: <?php echo (int)$_POST['tabuada']?><br>
Quantidade multiplicada foi: <?php echo (int)$_POST['multiplicada'];?><br>
<?
$tabuada = (int)($_POST['tabuada']);
for($multiplicador = 1; $multiplicador <= (int)$_POST['multiplicada']; $multiplicador++){
    $resultado = $tabuada * $multiplicador;
    echo("<p> $tabuada X $multiplicador = $resultado <p>");
}

?>    