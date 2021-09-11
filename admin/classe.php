
      <?php require "../config.php" ?>

        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Cadastar Classe</title>
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
   <span>Menu</span> <i class="fa fa-angle-left pull-right"></i></a>   
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
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-edit"></i> Cadastrar Classe</h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-back" href="cursoedisciplina.php?pg=cursoedisciplinas">Back</a>	</div>
   </div>
</div>
<?php if(@$_GET['cadastra'] == 'sim'){?> 
    <?php if(isset($_POST['cadastra'])){
        $curso = $_POST['curso'];

$cd = mysqli_query($conexao,"INSERT INTO cursos (curso) VALUES ('$curso')");
if($cd == ''){
    echo "<script language='javascript'>window.alert('Ocorreu um erro, ao cadastrar a Classe!');</script>";
}else{
    echo "<script language='javascript'>window.alert('A classe  foi cadastrado com sucesso!');window.location='turma.php?pg=curso&cadastra=sim';</script>";
}
}?> 
<div class="section-update">
    
<div class="col-xs-12 col-lg-12">
  <div class="box-info box view-item col-xs-12 col-lg-12">
   <div class="section-form">

    <form id="section-form" action="" method="post" role="form">

    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-section-section_name required">
<label class="control-label" for="section-section_name">Nome Classe</label>
<input type="text" id="section-section_name" class="form-control" name="curso" value="" maxlength="50" placeholder="Nome da Classe">
<p class="help-block help-block-error"></p>
</div> 

 </div>

 </div>

   </div>

    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
	<div class="col-xs-6">
        <button type="submit"  name="cadastra" class="btn btn-block btn-info">Cadastrar</button>	</div>
	<div class="col-xs-6">
	<a class="btn btn-default btn-block" href="cursoedisciplina.php?pg=cursoedisciplinas">Cancel</a>	</div>
    </div>
 
    </form> 
   
      </div>
      <div class="row">
<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-book"></i> Classes Cadastradas</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
    
        <div class="box-body table-responsive">
            <table class="table no-margin">
                <thead>
          
                    <?php
$sql_1 = mysqli_query($conexao,"SELECT * FROM cursos");
if(mysqli_num_rows($sql_1) == ''){
    echo "<h2>Não exisite nenhum Professor cadastrado no momento</h2>";
}else{
?>
                    <tr>
                       <th>ID DA CLASSE</th>
                        <th>Nome</th>
                        <th>Actividade</th>
                    </tr>
                </thead>
                <?php while($res_1 = mysqli_fetch_array($sql_1)){ ?>
                <tbody>
                    <tr>
          <td><?php echo $id = $res_1['id_curso']; ?></td>
        <td><?php echo $curso = $res_1['curso']; ?></td>

           <td  class="bg-info">
        <a class="a" href="classe.php?pg=curso&cadastra=sim&deleta=sim&id_curso=<?php echo $res_1['id_curso']; ?>"><img title="Excluir esta classe" src="img/excluir.png" width="18" height="18" border="0"></a>

        <a class="a" rel="superbox[iframe][930x500]" href="historico_professor.php?id=<?php echo $res_1['id_curso']; ?>"><img title="Histórico deste professor" src="../img/ver.png" width="22" height="22" border="0"></a>
       
      </td>
       <?php } ?>
         </tbody>
          <?php } // aui fecha a sql_1 ?> 
                        
            </table>
      
        </div>
  </div>

</div>

</div>
<?php if(@$_GET['deleta'] == 'sim'){

    $id = $_GET['id_curso'];

    $bb=mysqli_query($conexao,"DELETE FROM cursos WHERE id_curso  = '$id'");
    if ($bb == '') {
       echo "<script language='javascript'>window.alert('Ocorreu um erro ao Deletar!');</script>";
    }else{
echo "<script language='javascript'>window.location='classe.php?pg=curso&cadastra=sim';</script>";
    }
  }?>

  <?php die;} ?>



    </section>


    <?php require "footer.php" ?>

</aside>


	
      </div>
         </body>
    </html>
    