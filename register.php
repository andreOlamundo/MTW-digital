<?php

 //(esta biblioteca adiciona as funções de hashing de senha)
 require_once("libraries/password_compatibility_library.php");

// Incluir as configs / constantes para a conexão do banco de dados
require_once("config/db.php");

// Carregar a classe de registro
require_once("classes/Registration.php");

// Crie o objeto de registro. Quando este objeto é criado, ele fará todo o material de registro automaticamente
// Portanto, esta única linha que processa todo o processo de registro.
$registration = new Registration();

// Mostram a vista do registo (com o formulário de registo e mensagens / erros)
include("views/login_out/register.php");
