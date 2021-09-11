<?php require "../config.php" ?>

        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        
        <title>Classe e Disciplinas</title>
        <link href="css/assets/9da5096c/css/bootstrap.css" rel="stylesheet">
<link href="css/assets/fd6208f9/fullcalendar.print.css" rel="stylesheet" media="print">
<link href="css/assets/a986a570/themes/smoothness/jquery-ui.css" rel="stylesheet">
<link href="css/assets/fd6208f9/fullcalendar.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/AdminLTE.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/EdusecCustome.css" rel="stylesheet">
<script src="css/assets/d2579610/jquery.js"></script>
<script src="css/assets/9da5096c/js/bootstrap.js"></script>
<script src="css/assets/cfc8ec80/yii.js"></script>
<script src="css/assets/6ffe0e65/js/AdminLTE/app.js"></script>
<script src="css/assets/6ffe0e65/js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap-multiselect.js"></script>
<script src="css/assets/6ffe0e65/js/custom-delete-confirm.js"></script>
<script src="css/assets/6ffe0e65/js/bootbox.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap.file-input.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrapx-clickover.js"></script>   
  </head>
    <body class="skin-black">
    	
<header class="main-header header">

<?php require "bar.php" ?>

<?php require "notifica.php" ?>
        
        <!-- sidebar-menu. -- Start -->

         <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
  <li class="treeview active">
  <a href="cursoedisciplina.php?pg=cursoedisciplinas"><i class="fa fa-book"></i>
   <span>Classe e Disciplina</span> <i class="fa fa-angle-left pull-right"></i></a>   
         <ul class="treeview-menu">
              <li>
    <a href="classe.php?pg=curso&cadastra=sim"><i class="fa fa-angle-double-right"></i> Classe</a>     </li>
              <li>
    <a href="disciplina.php"><i class="fa fa-angle-double-right"></i> Disciplina</a>    
          </li>
          <li>
    <a href="turma.php?pg=curso&cadastra=sim"><i class="fa fa-angle-double-right"></i> Turma</a>    
          </li>
         <li>
    <a href="cursoedisciplina.php?pg=cursoedisciplinas"><i class="fa fa-angle-double-right"></i> Classe e Disciplina</a>    
          </li>
          </ul>
</li>
        </ul>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>
	
        <aside class="right-side">

<ul class="breadcrumb"><li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="classe.php?pg=curso&cadastra=sim">Classe</a></li>
<li><a href="disciplina.php">Disciplina</a></li>
<li class="active"></li>
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-book"></i> Classes e Disciplinas</h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
        <a class="btn btn-block btn-info" href="classe.php?pg=curso&cadastra=sim">cadastrar classe</a>
        	</div>
          <div class="col-xs-5 left-padding">
        <a class="btn btn-block btn-info" href="disciplina.php">cadastrar Disciplina</a>
          </div>
	<div class="col-xs-4 left-padding">
      
	</div>
  </div>
</div>
<?php if(@$_GET['pg'] == 'cursoedisciplinas'){ ?>
    <div class="box-body">
    <?php
$sql_1 = mysqli_query($conexao,"SELECT c.id_curso, t.id_turma, c.curso, t.turma from turmas AS t INNER join cursos as c on t.cursos_id = c.id_curso");

 if(mysqli_num_rows($sql_1) == ''){
     echo "<br><br>No momento não existe nenhum curso cadastrado!<br><br>";
 }else{
?>
<?php while($res_1 = mysqli_fetch_array($sql_1)){ 
$id = $res_1['id_turma'];
  ?> 
<div class="col-xs-12">
  <div class="box box-primary view-item">

   <div class="courses-view">
    <table class="table  detail-view">
        <h4>Nome Da Classe:<b> <?php echo $curso = $res_1['curso']; ?></b> - <?php echo $curso = $res_1['turma']; ?> </h4>
        <tr>
        <th>Discplinas</th>
        <th>Professor</th>
        <th>Codigo do Professor</th>
        <th>Actividade</th>
    </tr>
      <?php
     $sql_2 = mysqli_query($conexao,"SELECT d.id_disciplina,t.turma, d.disciplina, p.nome, p.code FROM disciplinas AS d INNER JOIN professores AS p on d.professores_id = p.id
INNER JOIN turmas AS t on turma_id= id_turma where turma_id = '$id' ");
     if (mysqli_num_rows($sql_2) == '') {
       echo "<br><br>No momento não existe nenhuma Disciplina para Esta Classe cadastrada!<br><br>";;
     }else{ 
    ?>
     
    <tr>
      
      <?php while($res_2 = mysqli_fetch_array($sql_2)){ ?> 
   
        <td><?php  echo $res_2['disciplina']; ?></td>
         <td><?php  echo $res_2['nome']; ?> </td>
          <td><?php  echo $res_2['code'];  ?></td>
          <td>
            <a class="a" href="cursoedisciplina.php?pg=disciplina&deleta=sim&id=<?php echo $res_2['id_disciplina']; ?>"><img title="Excluir Esta Disciplina" src="../img/icons8-trash-50.png" width="40" height="40" border="0"></a>
       
        <a class="a" href="edita_disciplina.php?pg=todos&func=edita&id=<?php  echo $res_2['id_disciplina']; ?>"><img title="Edita" src="../img/icons8-edit-50.png" width="40" height="40" border="0"></a>
      </td>

    </tr>
    <?php }} ?>
</table>   
</div>
  </div>
   
</div>
 <?php }}} ?>
    </section>
<?php if(@$_GET['deleta'] == 'sim'){

    $id = $_GET['id'];

    $bb=mysqli_query($conexao,"DELETE FROM disciplinas WHERE id_disciplina  = '$id'");
    if ($bb == '') {
       echo "<script language='javascript'>window.alert('Ocorreu um erro ao cadastrar!');</script>";
    }else{
echo "<script language='javascript'>window.location='cursoedisciplina.php?pg=cursoedisciplinas';</script>";
    }
  echo "<script language='javascript'>window.location='cursoedisciplina.php?pg=cursoedisciplinas';</script>";
  }?>
    <?php require "footer.php" ?>

</aside>


	
      </div>
        </body>
    </html>
    