<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>MTW Digital E-commerce</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="PROJETO INTERDISCIPLINAR ANHEMBIMORUMBI">
    <meta name="author" content="GRUPO Grupo ADS e GTI">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--  <link href="images\favicon.png" rel="icon" >   -->  
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="dashboard.css" rel="stylesheet">
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.5.1.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function(){
// Executa o evento CLICK em todos os links do menu
    $('#menu a').live('click',function(){
 // Faz o carregamento da página de acordo com o COD da página, que vai pegar os valores da página page.php.
    $('#conteudo').load($(this).attr('href'));
    return false;
});

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


  <div class="navbar-collapse" id="mynavbar">

    <ul class="nav navbar-nav navbar-right">    

        
        <span class="navbar-brand">Olá: <?php echo $_SESSION['user_name']; ?></span><span class="navbar-brand">|</span>
 <li><a href="index.php?logout"><span class="glyphicon glyphicon-off"></span>LogOut</a></li>
     </ul>
   </div>
    </div>
   </nav>



<div id='menu' class="col-sm-3 col-sm-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a href='page.php?cod=1'>MEU PERFIL</a></li>
          <li><a href='page.php?cod=2'>MEUS PEDIDOS</a></li>
                                   
          </ul>                          
        </div>
<!-- Aqui serão mostrados os conteúdos -->
<div id='conteudo'>

</div>


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>&copy; 2017 MTW Digital E-commerce CO., LTD. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
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
