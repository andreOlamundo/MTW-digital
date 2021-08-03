<?php


// Aqui ele pega o valor da varíavel do navegador.
$cod = $_GET['cod'];

// A condição switch faz com que o valor dos códigos do primeiro script represente uma página html que carregará na div conteudo.
switch($cod){

case '1'; // Aqui por exemplo, lá é page.php?cod=1, certo? Então ela vai carregar a página "home"institucional.html na div conteúdo.
include('register.php');
break;


}

?>
