<!DOCTYPE html>
<html>
<head>
    <title>Miniarte - Tesouraria</title>
  <link href="css/resultado_da_pesquisa.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script></head>
<body>
   <?php require "topo.php"?>
<div id="caixa_preta">
</div><!-- caixa_preta -->
<div id="box">
<h1>Nº da matricula do aluno - <?php echo $matricula = $_GET['matricula']; ?></h1>
<?php
$sql_1 = mysqli_query($conexao,"SELECT * FROM estudantes WHERE code = '$matricula'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>
 <table class="table table-striped   table-hover">
  
  <tr>
    <td width="314"><strong>Nome:</strong></td>
    <td width="308"><strong>Nascimento</strong></td>
    <td width="221"><strong>BI:</strong></td>
  </tr>
  <tr>
    <td><?php echo $res_1['nome']; ?></td>
    <td><?php echo $res_1['nascimento']; ?></td>
    <td><?php echo $res_1['rg']; ?></td>
  </tr>
  <tr><td>---------------------------------------------------------------------</td>
    <td>-------------------------------------------------------------------</td>
    <td>------------------------------------------------</td>
  </tr>
  <tr>
    <td><strong>Curso:</strong></td>
    <td><strong>Turno:</strong></td>
    <td><strong>Senha:</strong></td>
  </tr>
  <tr>
    <td><?php echo $res_1['serie']; ?></td>
    <td><?php echo $res_1['turno']; ?></td>
    <td><?php echo $res_1['cpf']; ?></td>
  </tr>
   <tr><td>---------------------------------------------------------------------</td>
    <td>-------------------------------------------------------------------</td>
    <td>------------------------------------------------</td>
  </tr>
  <tr>
    <td><strong>Valor da Mensalidade:</strong></td>
    <td><strong>Status:</strong></td>
    <td><strong>Actividade:</strong></td>
  </tr>
  <tr>
    <td>Valor: <?php echo $res_1['mensalidade']; ?></td>
    <td><?php echo $res_1['status']; ?></td>
     <td>
        <a class="a" href="estudantes.php?pg=todos&func=deleta&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Excluir Aluno(a)" src="img/deleta.jpg" width="18" height="18" border="0"></a>
        <?php if($res_1['status'] == 'Inativo'){ ?>
        <a class="a" href="estudantes.php?pg=todos&func=ativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Ativar novamente Aluno(a)" src="../img/correto.jpg" width="18" height="18" border="0"></a>
        <?php } ?>
        <?php if($res_1['status'] == 'Ativo'){?>
        <a class="a" href="estudantes.php?pg=todos&func=inativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Inativar Aluno(a)" src="../img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        <a class="a" rel='superbox[iframe][800x600]' href="mostrar_resultado.php?q=<?php echo $res_1['code']; ?>&s=aluno&curso=<?php echo $res_1['serie']; ?>"><img title="Informações detalhada deste aluno(a)" src="../img/visualizar16.gif" width="18" height="18" border="0"></a>
        <a class="a" href="editar_estudante.php?pg=todos&func=edita&id=<?php echo $res_1['id']; ?>"><img title="Editar Dados Cadastrais" src="../img/ico-editar.png" width="18" height="18" border="0"></a>
        </td>
  </tr>
  <tr>
    <td colspan="3"><hr> 
 
  <h1><strong>Histórico de mensalidade</strong></h1></td>
  </tr>
  <tr>
    <td colspan="3">
    <table class="table table-striped   table-hover">
      <tr>
        <td width="130" height="21"><strong>Nº da cobrança:</strong></td>
        <td width="100"><strong>Vencimento:</strong></td>
        <td width="80"><strong>Valor:</strong></td>
        <td width="150"><strong>Status:</strong></td>
        <td width="170"><strong>Data do pagamento:</strong></td>
        <td width="154"><strong>Forma de pagamento:</strong></td>
      </tr>
      <?php
      $sql_2 = mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = '$matricula' ORDER BY id DESC");
      while($res_2 = mysqli_fetch_array($sql_2)){   
    ?>
      <tr>
        <td><?php echo $res_2['code']; ?></td>
        <td><?php echo $res_2['vencimento']; ?></td>
        <td><?php echo $res_2['valor']; ?></td>
        <td><?php echo $res_2['status']; ?></td>
        <td><?php echo $res_2['data_pagamento']; ?></td>
        <td><?php echo $res_2['metodo_pagamento']; ?></td>
        </tr>
      <tr>
        <td colspan="6"><hr></td>
        </tr>
     <?php } ?>
    </table>
    </td>
  </tr>  
</table>
<?php } ?>
</div><!-- box -->
  </body>
</html>