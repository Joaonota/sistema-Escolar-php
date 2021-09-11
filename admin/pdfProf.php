 
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Impressão do Professor</title>
	<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/pdf.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<?php require "../config.php" ?>
<body>
	<script language="javascript">
window.print() 
</script>
<style>
.profile-data table{
	display: table;
	border-collapse: collapse;
	border:1.5px solid #adacab;
	font-size: 12.5px;
	width:100%;
}
.no_border tr,td{
	border:none;
	border:hidden;
	border:1.5px solid white; 
}
table tr:nth-child(even) { 
	background: #F4F4F4;
}
table tr:nth-child(odd) { 
	background: white;
}
.profile-data th{ 
	text-align:left;
	font-weight:normal;
	color:#990a10;
	width:110px;
	border:0.4px solid #adacab;
	height:24px;
}
.title {
	color:seagreen;
}
.profile-data td{
	border:0.4px solid #adacab;
	height:24px;
	text-align:left;
}
.label{
	text-align:left;
	font-weight:normal;
	color:#990a10;
	width:110px;
	height:24px;
}
</style>
<table class="table table-striped  table-bordered table-hover">
<!------------Start Student Details Block---------------->
<h1 style="text-align: center; height: 50px;">Escola Primaria e secundaria Miniarte</h1> 
<?php if($_GET['s'] == 'profpdf'){ ?>
<?php
$q = $_GET['q'];
$sql_1 = mysqli_query($conexao,"SELECT * FROM Professores WHERE code = '$q'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>
<h3 class="title">Detalhes Pessoais</h3>
<table class="table table-striped  table-bordered table-hover">
	<tr>
		<td  rowspan='4' width="135px" align="center" style="border:none">
		<img src="img/data/stu_images/no-photo.png" height="147px" width="147px" class="photo" style="margin-right:18px"/>
		</td>
		<td  class="label" style="border:1.5px solid white;width:12;"><b>Codigo<b></td>
		<td><?php echo $res_1['code']; ?></td>
	</tr>
	<tr style="background:none">
		<td class="label" style="border:1.5px solid white;"><b>Nome</b></td>
		<td><?php echo $res_1['nome']; ?></td>
	</tr>
    <tr style="background:none">
    <td class="label" style="border:1.5px solid white;"><b>Sexo</b></td>
    <td><?php echo $res_1['sexo']; ?></td>
  </tr>
	<tr style="background:none">
		<td class="label" style="border:1.5px solid white;"><b>Status</b></td>
		<td><?php echo $res_1['status']; ?></td>
	</tr>
</table>

<!----------Start Student personal information--------------> 
<div class="profile-data">
<h4 class="title">Perfil do Professor</h4>
<table class="table table-striped  table-bordered table-hover">
<tr>
	<td class="label"><strong>Nome</td>
   <td class="label"><strong>BI</td> 
	<td class="label"><strong>Data Do Nascimento</td>
    <td class="label"><strong>Bairro</td>
    <td class="label"><strong>Numero de Telefone</td>
        <td class="label"><strong>Nacionalidade</td>
</tr>	
	
<tr>
  <td><strong><?php echo $res_1['nome']; ?></td>
    <td><strong><?php echo $res_1['bi']; ?></td>
      <td><strong><?php echo $res_1['nascimento']; ?></td>
        <td><strong><?php echo $res_1['bairro']; ?></td>
          <td><strong><?php echo $res_1['numero']; ?></td>
  <td><strong><?php echo $res_1['nacionalidade']; ?></td>
</tr>
</table>

<!---------Start Student academic details block--------------> 
<h4 class="title">Informações acadêmicas</h4>
<table class="table table-striped  table-bordered table-hover">

<tr>
	<td class="label"><strong>Instituto</td>
	<td class="label"><strong>Licenciatura</td>
	<td class="label"><strong>Mestrado</td>
	<td class="label"><strong>Doutoramento</td>
    <td class="label"><strong>Experiencia de Trabalho</td>
      <td class="label"><strong>Salario</td>
</tr>

<tr>
  <td><strong><?php echo $res_1['instituto']; ?></strong></td>
  <td><strong><?php echo $res_1['licenciatura']; ?></strong></td>
  <td><strong><?php echo $res_1['mestrado']; ?></strong></td>
  <td><strong><?php echo $res_1['doutorado']; ?></strong></td>
  <td><strong><?php echo $res_1['experiencia']; ?></strong></td>
  <td><strong><?php echo $res_1['salario']; ?></strong></td>
</tr>
</table>
<br>
<!--------Start Student guardian info----------------->

<?php }} ?>


</div>
</table>
</body>
</html>
