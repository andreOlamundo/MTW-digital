<!DOCTYPE html>
<html lang="pt-br.utf-8">
  <head>
    <title>INTRANET_SDB</title>
  <!-- <meta http-equiv=Refresh Content="3; URL=table_list.php">-->
    <meta charset="utf-8">
     <meta http-equiv="refresh" CONTENT="3; URL=controle_lr.php">
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
<div id="menu">
  
</div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>
<hr class="featurette-divider">
<?php 

@include("conec.php");

$nome =$_POST["txtnome"]; 
$sobrenome =$_POST["txtsobrenome"];
$cargo =$_POST["txtcargo"]; 
$departamento =$_POST["txtdepartamento"];
$ramal =$_POST["inttelephone"];
$email = $_POST["txtemail"];


$query = "INSERT INTO `webcal_user` (`cal_login`,`cal_lastname`, `cal_firstname`, `cal_cargo`, `cal_departamento`, `cal_telephone`, `cal_email` ) VALUES ('".$nome.$sobrenome."','".$nome."','".$sobrenome."','".$cargo."','".$departamento."','".$ramal."','".$email."')";

$inserir = mysql_query($query);
if ($inserir) {
  echo "Informações cadastradas com SUCESSO!";
} else {
  echo "Desculpe não foi possível efetuar o cadastro.";
  echo "Dados sobre o erro:" .mysql_error();
}
?>



 <hr class="featurette-divider">
</div>

</div>
<div id="footer">
  
</div>
</div>


</body>
</html>