<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>MTW Digital E-commerce</title>
     <meta name="description" content="PROJETO INTERDISCIPLINAR ANHEMBIMORUMBI">
    <meta name="author" content="GRUPO ADS e GTI">
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="images/favicon.png" rel="icon" >     
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="css/dashboard.css" rel="stylesheet">  
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="col-sm-12">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
 <!--INCLUIR TAG IMG--><a class="navbar-brand" href="#myPage">MTW LOGO</a>
    </div>
    <div class="navbar-collapse collapse"  id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
              <li><a href="index.php">HOME</a></li>
        
      </ul>
      </div>
  </div>
</nav>


<div class="container-fluid">
<div Class="row text-center">
<div class="col-sm-12">
  <h2>CADASTRO DE CLIENTES</h2>
  <hr class="featurette-divider">
<?php
// Mostrar potenciais erros / feedback (do objeto de registro)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!-- register form -->

<form method="post" action="register.php" name="registerform">
<div class="form-group row">
    <!--O campo de entrada de nome de usuário usa uma verificação de padrão HTML5 -->
      <div class="col-xs-6">
    <label for="login_input_username">Nome de Usuário </label>
    <input id="login_input_username" class="form-control" type="text" placeholder="EX: NomeSobrenome" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

    <!-- O campo de entrada de e-mail usa uma verificação de tipo de e-mail HTML5 -->
    
    <label for="login_input_email">E-mail</label>
    <input id="login_input_email" class="form-control" type="email" placeholder="EX: mtw-ecomerce@MTW.com" name="user_email" required />    

        <label for="login_input_cpf">CPF</label>
    <input id="login_input_cpf" class="form-control" type="text" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="EX: 123.456.789-10" class="form-control" name="user_cpf" required />
    </div>
 
    <div class="col-xs-3">
    <label for="login_input_password_new">Senha</label>
    <input id="login_input_password_new" class="form-control" type="password" placeholder="min. 6 Caracteres" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
   
    <label for="login_input_password_repeat">Digite a senha Novamente</label>
    <input id="login_input_password_repeat" class="form-control" type="password" class="form-control" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

   
    </div>
 <div class="col-sm-12">
 <hr class="featurette-divider">
     <input type="submit" class="btn btn-success" name="register" value="Register"/>
    </div>
  

</div>
</form>

<!-- backlink -->

</div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 2017 MTW Digital E-commerce CO., LTD. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

</div>

<script>
$(document).ready(function(){
  //Adicione rolagem suave a todos os links no link navbar + footer
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Certifique-se de que this.hash tem um valor antes de substituir o comportamento padrão
    if (this.hash !== "") {
      // Evitar o comportamento de clique de âncora padrão
      event.preventDefault();

      // hash
      var hash = this.hash;

      // Usando o método jQuery animate () para adicionar rolagem de página suave
      // O número opcional (900) especifica o número de milissegundos necessários para rolar para a área especificada
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Adicionar hash (#) ao URL quando feito scroll (comportamento de clique padrão)

        window.location.hash = hash;
      });
    } // fim if
  });

  var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>
</body>
</html>
