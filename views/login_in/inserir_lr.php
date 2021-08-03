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
</div>
