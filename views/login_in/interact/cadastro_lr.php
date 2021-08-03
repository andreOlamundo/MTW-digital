
<!DOCTYPE html>
<html lang="pt-br.UTF8">
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
<div id="menu">
  
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h2>Inserir Dados para Cadastro</h2>

<hr class="featurette-divider">

<form id="form1" name="form1" method="post" action="inserir_lr.php">


<table class="table table-hover">


<tr>
<td><label class="control-label col-sm-6" for="txtcal_firstname">Nome:
<input class="form-control" name="txtnome" type="text" id="txtcal_firstname" placeholder="Informe o Nome do colaborador"/><label></td>
</tr>

<tr>
<td><label  class="control-label col-sm-9" for="txtcal_lastname">Sobrenome:
<input class="form-control" name="txtsobrenome" type="text" id="txtcal_lastname" placeholder="Informe o Sobrenome do colaborador"/><label></td>
</tr>

<tr>
<td><label  class="control-label col-sm-9" for="txtcal_cargo">Cargo:
<input class="form-control" name="txtcargo" type="text" id="txtcal_cargo" placeholder="Informe o Cargo"/><label></td>
</tr>

<tr>
<td><label  class="control-label col-sm-9" for="txtcal_departamento">Departamento:
<input class="form-control" name="txtdepartamento" type="text" id="txtcal_departamento" placeholder="Informe o Departamento"/><label></td>
</tr>

<tr>
<td><label  class="control-label col-sm-9" for="intcal_telephone">Ramal:
<input class="form-control" name="inttelephone" type="text" id="txtcal_telephone" placeholder="Informe o Ramal"/><label></td>
</tr>

<tr>
<td><label  class="control-label col-sm-9" for="txtcal_email">Email:
<input class="form-control" name="txtemail" type="text" id="txtcal_email" placeholder="Informe o Sobrenome Email"/><label></td>
</tr>

<tr>

<td><label>
<input type="submit" name="Submit" value="SALVAR"/><label></td>
<td>&nbsp;</td>

</tr>


</table>

</form>
 <hr class="featurette-divider">

<a href="table_list_Adm.php"><button type="button" class="btn btn-danger">CANCELAR</button></a>




</div>
<div id="footer">
  
</div>
</div>
</div>
</body>
</html>