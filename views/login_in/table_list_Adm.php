<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>CADASTRO DE CLIENTES</h2>
<hr class="featurette-divider">
<?php 

include("conexao.php");

$consulta = "SELECT * FROM users WHERE user_id !='1' ORDER BY user_id ASC";
$con = $mysqli->query($consulta) or die($mysqli->error);

?>


<table class="table table-striped">
<tr>

<td><strong>COD</strong></td>
<td><strong>CLIENTE</strong></td>
<td><strong>E-MAIL</strong></td>
<td><strong>CPF</strong></td>
</tr>
<?php while($dado = $con->fetch_array()){ ?>
<tr>
<td><?php echo $dado["user_id"]; ?></td>
<td><?php echo $dado["user_name"]; ?></td>
<td><?php echo $dado["user_email"]; ?></td>
<td><?php echo $dado["user_cpf"]; ?></td>


</tr>
<?php } ?>
</table>

 <hr class="featurette-divider">
<a href="controle_lr.php"><button type="button" class="btn btn-warning">EDITAR</button></a>

</div>

</div>
</div>