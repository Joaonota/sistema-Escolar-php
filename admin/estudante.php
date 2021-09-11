
<?php require "../config.php"; ?> 
        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Painel do Estudante</title>
        <link href="css/assets/9da5096c/css/bootstrap.css" rel="stylesheet">
<link href="css/assets/fd6208f9/fullcalendar.print.css" rel="stylesheet" media="print">
<link href="css/assets/a986a570/themes/smoothness/jquery-ui.css" rel="stylesheet">
<link href="css/assets/fd6208f9/fullcalendar.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/AdminLTE.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/EdusecCustome.css" rel="stylesheet">
   </head>
    <body class="skin-black">
    	  
    	
<header class="main-header header">
<?php require "bar.php" ?>
<!-- Notifications: style can be found in dropdown.less -->
<?php require "notifica.php" ?>

        <!-- sidebar-menu. -- Start -->
<?php require "drawer/drawer_aluno.php" ?>
       

	<!-- sidebar-menu. -- End -->

    </section>

</aside>
	
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Painel do Estudante</li>
</ul>

    <section class="content">
        
<!---Start First Row Branch Wise Student Total---> 

<!---End First Row Student Branch Wise Total & Year Wise Admission--->
<?php if(@$_GET['pg'] == 'todos'){ ?>
	<div class="callout callout-info msg-of-day">
         <?php if(isset($_POST['search'])){
   
 $key = $_POST['key'];
 if($key == ''){
   echo "<script language='javascript'>window.alert('Digite algo para fazer a pesquisa');</script>";
 }else{
    $sql_2 = mysqli_query($conexao,"SELECT * FROM estudantes WHERE code = '$key' OR nome = '$key' OR bi = '$key'");
    if(mysqli_num_rows($sql_2) >= 1){
      while($res_2 = mysqli_fetch_array($sql_2)){ 
        $code_aluno = $res_2['code'];
     echo "<script language='javascript'>window.location='infoestu.php?q=$code_aluno&s=aluno';</script>";  
      }
    }else{
          $sql_3 = mysqli_query($conexao,"SELECT * FROM professores WHERE code = '$key' OR nome = '$key' OR bi = '$key'");
    if(mysqli_num_rows($sql_3) >= 1){
      while($res_3 = mysqli_fetch_array($sql_3)){ 
        $code_prof = $res_3['code'];
     echo "<script language='javascript'>window.location='resultado_da_pesquisa01.php?matricula=$code_prof';</script>";  
      }
       }else{
     echo "<script language='javascript'>window.alert('Não foi encontrado nenhum resultado, verifique a informação digitada!');</script>";  
 }}}}?>
 <form class="form-inline"  name="" method="post" action="" enctype="multipart/form-data">
  <div class="form-group mx-sm-3 mb-2">
    <label  class="sr-only"></label>
    <input type="text" name="key" class="form-control" id="inputPassword2">
  </div>
  <button type="submit" name="search" value="" class="btn btn-primary mb-2">Buscar</button>
</form>
    </div>
<!---Start Second Row Recently Added Student List Block---> 

<div class="row">
<div class="col-md-12">
	<div class="box box-info">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list-ul"></i> Estudantes Cadastrado</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-info btn-sm" title="Remove" data-toggle="tooltip" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
    
		<div class="box-body table-responsive">
			<table class="table no-margin">
				<thead>
          
					<?php
$sql_1 = mysqli_query($conexao,"SELECT e.id, e.status,e.code,e.nome,c.curso,t.turma,e.mensalidade FROM estudantes AS e INNER JOIN cursos AS c ON e.cursos_id = c.id_curso
INNER JOIN turmas AS t on e.turma_id = t.id_turma   WHERE nome != ''");
if(mysqli_num_rows($sql_1) == ''){
	echo "<h2>Não exisite nenhum aluno cadastrado no momento</h2>";
}else{
?>
					<tr>
						<th>Status</th>
						<th>Código</th>
						<th>Nome</th>
						<th>Classe</th>
            <th>Turma</th>
						<th>Mensalidade</th>
						<th>Actividade</th>
					</tr>
				</thead>
				<?php while($res_1 = mysqli_fetch_array($sql_1)){ ?>
				<tbody>
					<tr>
		 <td><?php echo $res_1['status']; ?></td>
        <td><?php echo $res_1['code']; ?></td>
        <td><a href="infoestu.php?q=<?php echo $res_1['code']; ?>&s=aluno&curso=<?php echo $res_1['curso']; ?>"><?php echo $res_1['nome']; ?></a> </td>
        <td><?php echo $res_1['curso']; ?></td>
        <td><?php echo $res_1['turma']; ?></td>
        <td>R$ <?php echo $res_1['mensalidade']; ?></td>

        <?php if($res_1['status'] == 'Inativo'){ ?>
          <td class="bg-danger">
            <a class="a" href="estudante.php?pg=todos&func=deleta&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Excluir Aluno(a)" src="img/excluir.png" width="18" height="18" border="0"></a>
        <?php if($res_1['status'] == 'Inativo'){ ?>
        <a class="a" href="estudante.php?pg=todos&func=ativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Ativar novamente Aluno(a)" src="../img/correto.jpg" width="20" height="20"></a>
        <?php } ?>
        <?php if($res_1['status'] == 'Ativo'){?>
        <a class="a" href="estudante.php?pg=todos&func=inativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Inativar Aluno(a)" src="../img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        <a class="a" rel='superbox[iframe][800x600]' href="mostrar_resultado.php?q=<?php echo $res_1['code']; ?>&s=aluno&curso=<?php echo $res_1['curso']; ?>"><img title="Informações detalhada deste aluno(a)" src="../img/ver.png" width="22" height="22" border="0"></a>
        <a class="a"href="edita.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><img title="Editar Dados Cadastrais" src="../img/editar.png" width="22" height="22" border="0"></a>
          </td>
          <!-- aqui fecha inativo butao -->
          <?php } ?>

          <?php if($res_1['status'] == 'Ativo'){?>

        <td class="bg-info">
        <a class="a" href="estudante.php?pg=todos&func=deleta&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Excluir Aluno(a)" src="img/excluir.png" width="18" height="18" border="0"></a>
        <?php if($res_1['status'] == 'Inativo'){ ?>
        <a class="a" href="estudante.php?pg=todos&func=ativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Ativar novamente Aluno(a)" src="../img/correto.jpg" width="20" height="20" style="color: red;"></a>
        <?php } ?>
        <?php if($res_1['status'] == 'Ativo'){?>
        <a class="a" href="estudante.php?pg=todos&func=inativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Inativar Aluno(a)" src="../img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        <a class="a" href="edita.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><img title="Editar Dados Cadastrais" src="../img/editar.png" width="22" height="22" border="0"></a>
        <?php } ?>
					</tr>
					<?php } // aui fecha a sql_1 ?>	
						</tbody>
						<?php } // aui fecha a sql_1 ?>	
            			
			</table>

		</div>
		<div class="box-footer clearfix">
						    <a class="btn btn-sm btn-info btn-flat pull-left"  value="bloco"   href="addestudante.php?pg=cadastra">Cadastrar Estudante</a>						<a class="btn btn-sm btn-default btn-flat pull-right" href="allStudent.php?tipo=alunos&s=<?php echo base64_encode("SELECT e.id, e.status,e.code,e.nome,c.curso,t.turma,e.mensalidade FROM estudantes AS e INNER JOIN cursos AS c ON e.cursos_id = c.id_curso
INNER JOIN turmas AS t on e.turma_id = t.id_turma   WHERE nome != ''"); ?>">Ver Todos Estudantes</a>		</div>
	</div>	
	<?php } // aui fecha a sql_1 ?> 
  <?php if(@$_GET['func'] == 'ativa'){

$id = $_GET['id'];
$code = $_GET['code'];

mysqli_query($conexao,"UPDATE estudantes SET status = 'Ativo' WHERE id = '$id'");
mysqli_query($conexao,"UPDATE acesso_ao_sistema SET status = 'Ativo' WHERE code = '$code'");
echo "<script language='javascript'>window.location='estudante.php?pg=todos';</script>";
}?>


<?php if(@$_GET['func'] == 'inativa'){

$id = $_GET['id'];
$code = $_GET['code'];

mysqli_query($conexao,"UPDATE estudantes SET status = 'Inativo' WHERE id = '$id'");
mysqli_query($conexao,"UPDATE acesso_ao_sistema SET status = 'Inativo' WHERE code = '$code'");
echo "<script language='javascript'>window.location='estudante.php?pg=todos';</script>";
}?>
 <?php if(@$_GET['func'] == 'deleta'){

    $id = $_GET['id'];
    $code = $_GET['code'];

    mysqli_query($conexao,"DELETE FROM estudantes WHERE id = '$id'");
    mysqli_query($conexao,"DELETE FROM acesso_ao_sistema WHERE code = '$code'");
    echo "<script language='javascript'>window.location='estudante.php?pg=todos';</script>";
  }?>
</div>
</div>
<!---End Recently Student Added Block--->
    </section>

    <?php require "footer.php" ?>

</aside>


	
      </div>
    <script src="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/assets/62698972/highcharts.js"></script>
<script src="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/assets/62698972/highcharts-3d.js"></script>
<script type="text/javascript">jQuery(window).load(function () {
Highcharts.setOptions([]); var chart = new Highcharts.Chart({"chart":{"renderTo":"w0","type":"pie","options3d":{"enabled":true,"alpha":60}},"exporting":{"enabled":false},"legend":{"align":"center","verticalAlign":"bottom","layout":"vertical","x":0,"y":0},"credits":{"enabled":false},"title":{"text":"","margin":0},"plotOptions":{"pie":{"innerSize":100,"depth":45,"dataLabels":{"enabled":false},"showInLegend":true}},"series":[{"name":"Total Student","data":[["MCA (5)",5],["BCA (3)",3],["M.Sc.IT (3)",3],["B.Sc.IT (2)",2],["MBA (2)",2]]}]});
Highcharts.setOptions([]); var chart = new Highcharts.Chart({"chart":{"renderTo":"w1","type":"column"},"exporting":{"enabled":false},"credits":{"enabled":false},"title":{"text":"Monthly Average Admission"},"subtitle":{"text":"","margin":0},"xAxis":{"categories":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},"yAxis":{"title":{"text":"Admission Count"}},"plotOptions":{"column":{"pointPadding":0.2,"borderWidth":0}},"series":[{"name":"2015 (15)","data":[0,0,0,0,3,12,0,0,0,0,0,0]}]});
});</script>    </body>
    </html>
    