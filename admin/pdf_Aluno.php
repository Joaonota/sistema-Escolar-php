 
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Impressão do Aluno</title>
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
<?php if($_GET['s'] == 'aluno'){ ?>
<?php
$q = $_GET['q'];
$sql_1 = mysqli_query($conexao,"SELECT * FROM estudantes WHERE code = '$q'");
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
	<tr>
		<td class="label" style="border:1.5px solid white;"><b>classe<b></td>
		<td><?php echo $res_1['serie']; ?></td>
	</tr>
	<tr style="background:none">
		<td class="label" style="border:1.5px solid white;"><b>Status</b></td>
		<td><?php echo $res_1['status']; ?></td>
	</tr>
</table>

<!----------Start Student personal information--------------> 
<div class="profile-data">
<h4 class="title">Perfil do Estudante</h4>
<table class="table table-striped  table-bordered table-hover">
<tr>
	<td class="label"><strong>Nome</td>
	<td><strong><?php echo $res_1['nome']; ?></td>
	<td class="label"><strong>BI</td>
	<td><strong><?php echo $res_1['rg']; ?></td>
</tr>	
<tr>
	<td class="label"><strong>Data de nascimento</td>
	<td><strong><?php echo $res_1['nascimento']; ?></td>
	<td class="label"><strong>Nome da mãe</td>
	<td><strong><?php echo $res_1['mae']; ?></td>
</tr>
<tr>
	<td class="label"><strong>Nome do Pai</td>
	<td><strong><?php echo $res_1['pai']; ?></td>
	<td class="label"><strong>Nacionalidade</td>
	<td><strong><?php echo $res_1['estado']; ?></td>
</tr>
<tr>
	<td class="label"><strong>Cidade</td>
	<td><strong><?php echo $res_1['cidade']; ?></td>
	<td class="label"><strong>Bairro</strong></td>
	<td><strong><?php echo $res_1['bairro']; ?></td>
</tr>
<tr>
	<td class="label"><strong>Sexo</td>
	<td ><strong><?php echo $res_1['endereco']; ?></td>
	<td class="label"><strong>Numero do Telefone</td>
	<td ><strong><?php echo $res_1['tel_residencial']; ?></td>
	
</tr>	
<tr>
	<td class="label"><strong>Telefone do pai</td>
	<td ><strong><?php echo $res_1['celular']; ?></td>
	<td class="label"><strong>Telefone da mãe</td>
	<td ><strong><?php echo $res_1['tel_amigo']; ?></td>
</tr>	
</table>

<!---------Start Student academic details block--------------> 
<h4 class="title">Informações acadêmicas</h4>
<table class="table table-striped  table-bordered table-hover">
	<h4>Notas dos trabalhos Semestrais</h4>
<tr>
	<td class="label"><strong>Disciplinas</td>
	<td class="label"><strong>1º Semestre</td>
	<td class="label"><strong>2º Semestre</td>
	<td class="label"><strong>3º Semestre</td>
</tr>
<?php
 $curso = $_GET['curso'];
 $sql_3 = mysqli_query($conexao,"SELECT * FROM disciplinas WHERE curso = '$curso'");
  while($res_3 = mysqli_fetch_array($sql_3)){
    $disciplina = $res_3['disciplina'];
 ?> 
<tr><strong>
	<td><?php echo $res_3['disciplina']; ?></td>
	<td>
		<?php
     $sql_4 = mysqli_query($conexao,"SELECT * FROM notas_trabalhos WHERE bimestre = '1' AND disciplina = '$disciplina' AND code = '$q'");     
   
    while($res_4 = mysqli_fetch_array($sql_4)){
        echo $res_4['nota'];
      }
   
  ?>
	</td>
	<td>
		<?php
     $sql_4 = mysqli_query($conexao,"SELECT * FROM notas_trabalhos WHERE bimestre = '2' AND disciplina = '$disciplina' AND code = '$q'");     
   
    while($res_4 = mysqli_fetch_array($sql_4)){
        echo $res_4['nota'];
      }
   
  ?>
	</td>
	<td>
		<?php
     $sql_4 = mysqli_query($conexao,"SELECT * FROM notas_trabalhos WHERE bimestre = '3' AND disciplina = '$disciplina' AND code = '$q'");     
   
    while($res_4 = mysqli_fetch_array($sql_4)){
        echo $res_4['nota'];
      }
   
  ?>
	</td>
</tr>
 <?php } ?>
</table>
<br>
<!--------Start Student guardian info----------------->

<table class="table table-striped  table-bordered table-hover">
	<h4>Notas Semestrais</h4>
<tr>
	<td class="label"><strong>Disciplinas</strong></td>
	<td class="label"><strong>1º Semestre</strong></td>
	<td class="label"><strong>2º Semestre</strong></td>
	<td class="label"><strong>3º Semestre</strong></td>
	<td class="label"><strong>Media Global</strong></td>
    <td class="label"><strong>Exame Normal</strong></td>
    <td class="label"><strong>Recorrencia</strong></td>
</tr>
<?php
$sql_1 = mysqli_query($conexao,"SELECT * FROM disciplinas WHERE curso = '$curso'");
  while($res_1 = mysqli_fetch_array($sql_1)){
    $disciplina = $res_1['disciplina'];
    
$sql_2 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '1'");

$sql_3 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '2'");

$sql_4 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '3'");

$sql_5 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '4'");

$sql_6 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '5'");

$sql_7 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '6'");  
  
?>  
<tr>
	<td><strong><?php echo $disciplina; ?></td>
	<td><strong>
		<?php
    if(mysqli_num_rows($sql_2) == ''){
    echo "<h7>Aguarda</h7>";
  }else{
    while($res_2 = mysqli_fetch_array($sql_2)){
      $nota = $res_2['nota'];
      $prova = $res_2['prova'];
      
      if($nota >= 7){
        echo "<h7><strong>".$res_2['nota']."</strong></h7>";
      }else{
       echo "<h7><strong>".$res_2['nota']."</strong></h7>";     
      }
      if($res_2['prova'] == ''){
      }else{
      
      }
      
    }}?>
	</td>
	<td><strong>
		 <?php
    if(mysqli_num_rows($sql_3) == ''){
    echo "<h7>Aguarda</h7>";
  }else{
    while($res_3 = mysqli_fetch_array($sql_3)){
      $nota = $res_3['nota'];
      $prova = $res_3['prova'];
      
      if($nota >= 7){
        echo "<h7><strong>".$res_3['nota']."</strong></h7>";
      }else{
       echo "<h7><strong>".$res_3['nota']."</strong></h7>";      
      }
      if($res_3['prova'] == ''){
      }else{
      
      }     
    }}?>
	</td>
	<td><strong>
		 <?php
    if(mysqli_num_rows($sql_4) == ''){
    echo "<h7>Aguarda</h7>";
  }else{
    while($res_4 = mysqli_fetch_array($sql_4)){
      $nota = $res_4['nota'];
      $prova = $res_4['prova'];
      
      if($nota >= 7){
        echo "<h7><strong>".$res_4['nota']."</strong></h7>";
      }else{
       echo "<h7><strong>".$res_4['nota']."</strong></h7>";      
      }
      if($res_4['prova'] == ''){
      }else{
      
      }     
    }}?>
	</td>
	<td><strong>
		<?php
if(mysqli_num_rows($sql_4) == ''){
  echo "<h7>Aguarda</h7>";
}else{
$sql_2 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '1'");    
$sql_3 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '2'");    
$sql_4 = mysqli_query($conexao,"SELECT * FROM notas_provas WHERE code = '$q' AND disciplina = '$disciplina' AND bimestre = '3'");      

while($res_2 = mysqli_fetch_array($sql_2)){
while($res_3 = mysqli_fetch_array($sql_3)){
while($res_4 = mysqli_fetch_array($sql_4)){

  $media = ($res_2['nota']+$res_3['nota']+$res_4['nota'])/3;

  if($media >=10){
    echo "<h7><strong>".number_format($media,2)." - Aprovado</strong></h7>";
  }elseif ($media<=7) {
    echo "<h7><strong>".number_format($media,2)." - Reprovado</strong></h7>";
  }else{
    echo "<h7><strong>".number_format($media,2)." - Aprovado</strong></h7>";
  
  }}}}}
?>
	</td>
	 <td><strong>
    <?php
    if(mysqli_num_rows($sql_6) == ''){
    echo "<h7>Aguarda</h7>";
  }else{
    while($res_6 = mysqli_fetch_array($sql_6)){
      $nota = $res_6['nota'];
      $prova = $res_6['prova'];
      
      if($nota >= 7){
        echo "<h7><strong>".$res_6['nota']."</strong></h7>";
      }else{
        echo "<h7><strong>".$res_6['nota']."</strong></h7>";     
      }
            
    }}?>
    </td> 
<td ><strong>
    <?php
    if(mysqli_num_rows($sql_7) == ''){
    echo "<h7>Aguarda</h7>";
  }else{
    while($res_7 = mysqli_fetch_array($sql_7)){
      $nota = $res_7['nota'];
      $prova = $res_7['prova'];
    
      if($nota >= 7){
       echo "<h7><strong>".$res_7['nota']."</strong></h7>";
      }else{
        echo "<h7><strong>".$res_7['nota']."</strong></h7>";     
      }
      if($res_7['prova'] == ''){
      }     
    }}?>
    </td>
</tr>
 <?php } ?>
</table>
<br/>

<!---------start Student address info block------------>
<h4 class="title">Informações financeiras</h4>
<table class="table table-striped  table-bordered table-hover">
<tr><strong>
	<td class="label"><strong>Código da cobrança</td>
	<td class="label"><strong>Status</td>
	<td class="label"><strong>Valor</td>
	<td class="label"><strong>Data de pagamento</td>
	<td class="label"><strong>Forma de pagamento</td>
</tr>
<?php
$sql_5 = mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = '$q'");
  while($res_5 = mysqli_fetch_array($sql_5)){
?> 
<tr>
    <td><?php echo $res_5['code']; ?></td>
    <td><?php echo $res_5['status']; ?></td>
    <td>R$ <?php echo number_format($res_5['valor'],2); ?></td>
    <td><?php echo $res_5['data_pagamento']; ?></td>
    <td><?php echo $res_5['metodo_pagamento']; ?></td>
  </tr>
<?php } ?> 

</table>
<?php }} ?>


</div>
</table>
</body>
</html>
