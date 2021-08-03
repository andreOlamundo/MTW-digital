
<!DOCTYPE html>
<html LANG="pt-br.UTF8">
  <head>
    <title>INTRANET_SDB</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="\intranetSDB\images\favicon.png">
    <link href="\intranetSDB\bootstrap-3.3.7\dist\css\bootstrap.min.css" rel="stylesheet">
    <link href="\intranetSDB\bootstrap-3.3.7\docs\assets\css\ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href="/intranetSDB/dashboard/dashboard.css" rel="stylesheet">   
     <script src="\intranetSDB\bootstrap-3.3.7\docs\assets\js\ie-emulation-modes-warning.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="\intranetSDB\js\main.js"></script>

  </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <!-- Container (MeNU Section) -->


  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
           
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage">INTRANET</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
          <li> <a href="/intranetSDB/index.php">ACESSO RESTRITO</a></li>
          </ul>
          <!-- if you need user information, just put them into the $_SESSION variable and output them here -->
Hey, <?php echo $_SESSION['user_name']; ?>. You are logged in.
Try to close this browser tab and open it again. Still logged in! ;)

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="index.php?logout">Logout</a>
          </div>
         
       
       <!-- <div id="navbar" class="navbar-collapse collapse">
                    <form method="post" action="index.php" name="loginform" class="navbar-form navbar-right">
            <div class="form-group">
              <input id="login_input_username" type="text" placeholder="Usuário" class="form-control login_input" name="user_name" required>
            </div>
            <div class="form-group">
              <input id="login_input_password" type="password" placeholder="Senha" class="form-control login_input" name="user_password" autocomplete="off" required>
            </div>
           <button type="submit" class="btn btn-success" name="login" value="Log in">Acesso Restrito</button>
<div class="login_input">
                       <?php
// show potential errors / feedback (from login object)
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
           </div> -->
<!--/.navbar-collapse -->

      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-sm-2 sidebar">

          <ul class="nav nav-sidebar">
           <li><a href="dashboard/institucional.html">INSTITUCIONAL</a></li>
            <li><a href="dashboard/formulario.html">FORMULÁRIOS</a></li>
             <li class="disabled"><a href="#">FORMULÁRIO PAR</a></li>
            <li><a href="dashboard/politicasProcedimentos.html">POLITICAS & PROCEDIMENTOS</a></li>    
             <li><a href="dashboard/interact/table_list_Adm.php">LISTA DE COLABORADORES</a></li>
            <li><a href="agenda.html">AGENDA</a></li>
            <li><a href="utilidades.html">UTILIDADES</a></li>  
          </ul>
         
                  
        </div>
        </div>
        </div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Lista de Colaboradores</h2>
<hr class="featurette-divider">
<?php 

include("conexao.php");

$consulta = "SELECT * FROM webcal_user WHERE cal_cargo !='' ORDER BY cal_firstname ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>



<a href="cadastro_lr.php"><button type="button" class="btn btn-primary">CADASTRAR</button></a>
<a href="controle_lr.php"><button type="button" class="btn btn-warning">ALTERAR/EXCLUIR</button></a>


<table class="table table-striped">
<tr>

<td><strong>NOME</strong></td>

<td><strong>CARGO</strong></td>
<td><strong>DEPARTAMENTO</strong></td>
<td><strong>RAMAL</strong></td>
<td><strong>EMAIL</strong></td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
<td><?php echo $dado["cal_firstname"] . " " . $dado ["cal_lastname"]; ?></td>

<td><?php echo $dado["cal_cargo"]; ?></td>
<td><?php echo $dado["cal_departamento"]; ?></td>
<td><?php echo $dado["cal_telephone"]; ?></td>
<td><?php echo $dado["cal_email"]; ?></td>



</tr>
<?php } ?>
</table>
<div id="cadastro_lr" class="container-fluid">
<div class="row">


<a href="cadastro_lr.php"><button type="button" class="btn btn-primary">CADASTRAR</button></a>
<a href="controle_lr.php"><button type="button" class="btn btn-warning">ALTERAR/EXCLUIR</button></a>

 <hr class="featurette-divider">

</div>
</div>
</div>

</div>
<div id="footer">
  
</div>
</div>


</body>
</html>