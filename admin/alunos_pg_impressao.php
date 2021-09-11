<!DOCTYPE html>
<html>
<head>
	<title>Página de impresão</title>
	<meta charset="utf-8">
   <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/relatorios_impre_1.css" rel="stylesheet" type="text/css" />
<?php require "../conexao.php"; ?>
</head>
<body>
<div id="box">
<script language="javascript">
window.print() 
</script>

<?php 
$select_get2 = base64_decode($_GET['s']);    
$sql_2 = mysqli_query($conexao, $select_get2);
?>
<div id="box1">
 <h1>Escola Primaria e secundaria Miniarte</h1> 
</div>
<table class="table table-striped  table-bordered table-hover">
  <tr>
    <td width="200"><strong>Nome:</strong></td>
    <td width="130"><strong>Nº de matricula:</strong></td>
    <td width="155"><strong>Série:</strong></td>
    <td width="194"><strong>Mensalidades pagas:</strong></td>
    <td width="149"><strong>Mensalidade devedoras:</strong></td>
  </tr>
  <?php while($res_1 = mysqli_fetch_assoc($sql_2)){ ?>
  <tr>
    <td><?php echo $res_1['nome']; ?></td>
    <td><?php echo $res_1['code']; ?></td>
    <td><?php echo $res_1['serie']; ?></td>
    <td><?php echo  mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = ".$res_1['code']." AND status = 'Pagamento Confirmado'")); ?></td>
    <td><?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = ".$res_1['code']." AND status = 'Aguarda Pagamento'")); ?></td>
  </tr>
  <tr>
    <td colspan="5"><hr></td>
  </tr>
  <?php } ?>
  <tr>
  </tr>
</table>
</div><!-- box -->
</body>
</html>