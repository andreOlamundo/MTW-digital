<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterar/Excluir</h2>
<hr class="featurette-divider">
<?php 

@include("conec.php");

$sql = "SELECT * FROM webcal_user ORDER BY cal_firstname ASC";
$resultado = mysql_query($sql) or die("Não foi desta vez");
?>



<table class="table table-striped">
<tr>

<th>NOME:</th>
<th>ALTERAR:</th>
<th>EXCLUIR:</th>

</tr>
<?php while($linha = mysql_fetch_array($resultado)){ 

$cal_login = $linha["cal_login"];
$cal_firstname = $linha["cal_firstname"];

?>


<tr>
<td><?=$cal_firstname;?><br></td>


<?php
echo "<td width=20><a href='alterar.php?cal_login=$cal_login'>Alterar</a><br></td>";
echo "<td width=20><a href='excluir.php?cal_login=$cal_login'>Excluir</a><br></td>";
echo "</tr>";
}
?>
</table>

<div class="container-fluid">
<div class="row">
<a href="cadastro_lr.php"><button type="button" class="btn btn-default">CADASTRAR</button></a>
<a href="table_list_Adm.php"><button type="button" class="btn btn-default">RETORNAR</button></a>
<hr class="featurette-divider">
</div>
</div>


</div>

</div>

</div>
