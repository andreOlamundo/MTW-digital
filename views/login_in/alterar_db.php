<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterando</h2>
<hr class="featurette-divider">
<?php 

$cal_lastname_novo= $_POST["novo_cal_lastname"];
$cal_firstname_novo=$_POST["novo_cal_firstname"];
$cal_login=$_GET['$cal_login'];

@include("conec.php");


$sql="UPDATE webcal_user SET cal_lastname='$cal_lastname_novo', cal_firstname = '$cal_firstname_novo' WHERE cal_login = '$cal_login'";
$resultado=mysql_query($sql) or die ("Não foi possível realizar a consulta ao banco de dados!");
echo "<h1>Registro Alterado com sucesso!</h1>";

?>
</div>
</div>
</div>