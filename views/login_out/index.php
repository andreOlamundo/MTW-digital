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
    <script type='text/javascript'>
     $(document).ready(function(){
// Executa o evento CLICK em todos os links do menu
    $('#menu a').live('click',function(){

 // Faz o carregamento da pÃƒÂ¡gina de acordo com o COD da pÃƒÂ¡gina, que vai pegar os valores da pÃƒÂ¡gina page.php.
    $('#conteudo').load($(this).attr('href'));
    return false;
});

});

    // Faz o carregamento do balão informativo: tooltip.
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
    </script>
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
                <ul  class="nav navbar-nav navbar-left">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#servico">SERVIÇOS</a></li>
        <li><a href="#contato">CONTATO</a></li>
       <li><a data-toggle="tooltip" data-placement="bottom" title="Se ainda não possui cadastro, clique qui!" href="register.php">CADASTRO</a></li>
     
      </ul>
           <form method="post" action="index.php" name="loginform" class="navbar-form navbar-right">
            <div class="form-group">
              <input id="login_input_username" type="text" placeholder="Usuário" class="form-control login_input" name="user_name" required>
            </div>
            <div class="form-group">
              <input id="login_input_password"  type="password"  placeholder="Senha" class="form-control login_input" name="user_password" autocomplete="off" required>
            </div>
           <button data-toggle="tooltip" data-placement="bottom" title="Se já possui cadastro, faça o login aqui!" type="submit" class="btn btn-success" name="login" value="Log in">Login</button>

<div class="login_input">

                       <?php
// Mostrar potenciais erros / feedback (do objeto de login)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
 
</div>
</form>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>MTW</h1> 
 
  <p>Digital E-commerce</p> 
  </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>SOBRE A MTW Digital E-commerce</h2><br>
      <h4>A WTM Digital E-commerce  é uma empresa 100% brasileira que desenvolve Software para E-commerce, com Ferramentas de Inteligência em Vendas.</h4><br>
      <p> WTM oferece ferramentas que aumentam consideravelmente as vendas a um investimento muito baixo. Nosso Sistema de Vendas adota técnicas simples, respeita a cultura e os valores da sua empresa e aproveita ao máximo, as ferramentas técnicas e políticas da sua área comercial.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h4><strong>VALORES:</strong>
        Comprometimento, Respeito, Transparencia, Ética e Confiança.</h4>
       <h4><strong>MISSÃO:</strong> A missão da WTM é comercializar liçenças de Software, fornecendo Ferramentas de Inteligência em Vendas, com auta performance, segurança a um preço justo.</h4>
      <h4><strong>VISÃO:</strong>Nossa visão consiste em desenvolver e inovar Softwares nos baseando em técnicas de Inteligência em Vendas, que consistem em obter informações confiáveis para o planejamento, tomada de decisão e estratégias de ação.</h4>
    </div>
   </div>
</div>

<!-- Container (SERVIÇO Section) -->
<div id="servico" class="container-fluid text-center">
  <h2>Nossos serviços</h2>
  <h4>WTM oferece ferramentas que aumentam consideravelmente as vendas a um investimento muito baixo. Nosso Sistema de Vendas E-comerce adota técnicas simples, respeita a cultura e os valores da sua empresa e aproveita ao máximo as ferramentas, técnicas e políticas da sua área comercial.</h4>
  <br>
  <div class="row">
  <div class="col-sm-12">

  <div class="col-sm-4">
  <h4>Pagina Inicial</h4>
<img class="img-responsive" src="images/paginaInicial.jpg" alt="MTW-digital">
</div>
  <div class="col-sm-4">
  <h4>Detalhes dos Produtos</h4> 
<img class="img-responsive" src="images/detalhesDosProdutos.jpg" alt="MTW-digital">
</div>
  <div class="col-sm-4">
  <h4>Carrinho de Compras</h4>
<img class="img-responsive" src="images/carrinhoDeCompras.jpg" alt="MTW-digital">
</div>

  <h3 class="col-sm-12 text-center"><hr class="featurette-divider">COMPRE AGORA SUA LICENÇA DE SOFTWARE E-COMERCE,<br>CRIE UMA LOJA VIRTUAL COMECE 
A VENDER ONLINE: <a data-toggle="tooltip" data-placement="bottom" title="Clique aqui, Cadastre-se e conheça mais sobre nosso SOFTWARE" href="register.php"><botton class="btn btn-default btn-sm">CADASTRO</botton></a></h3>

<div id='conteudo'>

</div>

</div>



  </div>

</div>

<!-- Container (Contato Section) -->

<div id="contato" class="container-fluid bg-grey">
  <div class="row text-center">
    <h2>ENTRE EM CONTATO COM NOSSA EQUIPE</h2>
      <div class="col-sm-12">

        <ul class="list-group">
    Thiago Henrique de Campos <br>
       Tatiane Fernandes Barbosa<br>
       Michele Alves de Queiroz<br>
       Gustavo Martins Oliveira<br>
          André Nascimento
        </ul>     

        <a data-toggle="tooltip" title="Ligue Agora!"><span class="glyphicon glyphicon-phone-alt" style="color: rgb(0, 102, 255);"></span>(11) 7070-7070<br></a>
        <a href="mailto:suporte@mtw.com" style="color: rgb(0, 102, 255); text-decoration: none; display: inline;"><span class="glyphicon glyphicon-envelope"></span> suporte@mtw.com
                </a>
        </div>
      </div>
    </div>

  
  
  
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14623.153317134802!2d-46.6946825!3d-23.6119231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57536602d7f7%3A0xe8034f1be9c3a8b8!2sUniversidade+Anhembi+Morumbi+C%C3%A2mpus+Vila+Ol%C3%ADmpia!5e0!3m2!1spt-BR!2sbr!4v1492625463940" width="800"  style="width: 100% ;height:400px;" frameborder = "0" allowfullscreen></iframe>
</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 2017 MTW Digital E-commerce CO., LTD. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

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
