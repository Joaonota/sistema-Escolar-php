 
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

<?php 
$select_get2 = base64_decode($_GET['s']);    
$sql_2 = mysqli_query($conexao, $select_get2);
?>
<!----------Start Student personal information--------------> 
<div class="profile-data">
<table class="table table-striped  table-bordered table-hover">
<tr>
	<td class="label"><strong>Status</td>
	<td class="label"><strong>Codigo</td>
	<td class="label"><strong>Nome</td>
	<td class="label"><strong>Classe</td>
</tr>
<?php while($res_1 = mysqli_fetch_assoc($sql_2)){ ?>
<tr>
  <td><?php echo $res_1['status']; ?></td>
  <td><?php echo $res_1['code']; ?></td>
  <td><?php echo $res_1['nome']; ?></td>
  <td><?php echo $res_1['curso']; ?></td>
</tr>
  <?php } ?>

</table>
</div>
</table>
</body>
</html>
