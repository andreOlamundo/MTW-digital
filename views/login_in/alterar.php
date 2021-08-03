<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Alterar</h2>
<hr class="featurette-divider">
<?php 

@include("conec.php");
$cal_login= $_GET['cal_login'];

$sql="SELECT * FROM webcal_user WHERE cal_login='cal_login'";

$resultado=mysql_query($sql) or die("Não foi possível Realizar a consulta ao banco de dados");
while($linha=mysql_fetch_array($resultado)){
$cal_login=$linha["cal_login"];
$cal_lastname=$linha["cal_lastname"];
$cal_firstname=$linha["cal_firstname"];

}

?>


<table class="table table-striped">
<tr>
<td><form id="form1" neme="form1" method="post" action="alterar_db.php?cal_login=<?=$cal_login;?>">
<table class="table table-striped">
<tr>
<td coldspan="2" bgcolor="#FFFFCC"><div align="center"><strong>Informa&ccedil;&otilde;es Sobre Cliente: <?php echo .$cal_lastname.$cal_firstname ?></strong></div></td>
</tr>
<tr>
<td width="176" bgcolor="#cccccc"><div align="right">Nome:</div></td>
<td width="487"><label>
<input name="novo_cal_lastname" type="text" id="novo_cal_lastname" size="60" value="<?=$cal_lastname;?>"/>
</label></td>
</tr>
<tr>
<td width="176" bgcolor="#cccccc"><div align="right">Sobrenome:</div></td>
<td width="487"><label>
<input name="novo_cal_firstname" type="text" id="novo_cal_firstname" size="60" value="<?=$cal_firstname;?>"/>
</label></td>
</tr>
<tr>
<td valign="top">&nbsp;</td>
<td coldspan="2">&nbsp;</td>
</tr>

</table>
</form>
</td>
</tr>
</table>
</div>
</div>
</div>