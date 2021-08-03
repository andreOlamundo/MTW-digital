<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Lista de Clientes</h2>
<hr class="featurette-divider">
<?php 

include("conexao.php");

$consulta = "SELECT * FROM webcal_user WHERE cal_cargo !='' ORDER BY cal_firstname ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


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

 <hr class="featurette-divider">

</div>
</div>
</div>
