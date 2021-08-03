<?php

 //(esta biblioteca adiciona as funções de hashing de senha)
 require_once("libraries/password_compatibility_library.php");

// incluem as configs / constantes para a conexão do banco de dados
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// Criar um objeto de logon. Quando este objeto é criado, ele fará todo o login / logout automaticamente
// Esta única linha trata o processo inteiro do início de uma sessão.
$login = new Login();

// Pergunta se estamos conectados aqui:
if ($login->isUserLoggedIn() == true) {
    // O usuário está conectado. 
    // Apresenta a pagina principal para o usuário conectado.

    include("views/login_in/index.php");

} else {
    //O usuário não está logado.
    // Apresenta a pagina principal para o usuário não conectado.
      
    include("views/login_out/index.php");

}
