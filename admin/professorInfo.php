
<?php require "../config.php"; ?> 
 <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        
        <title>Professores</title>
         <link href="css/assets/9da5096c/css/bootstrap.css" rel="stylesheet">
<link href="css/assets/a986a570/themes/smoothness/jquery-ui.css" rel="stylesheet">
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
  </head>
    <body class="skin-black"> 
        
<header class="main-header header">
<?php require "bar.php" ?>
<!-- Notifications: style can be found in dropdown.less -->
<?php require "notifica.php" ?>

        <!-- sidebar-menu. -- Start -->
<?php require "drawer/drawer_professor.php" ?>
       

    <!-- sidebar-menu. -- End -->



</aside>
    
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">Professores</li>
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
            <h3 class="box-title"><i class="fa fa-list-ul"></i> Professoress Cadastrado</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-info btn-sm" title="Remove" data-toggle="tooltip" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
    
        <div class="box-body table-responsive">
            <table class="table no-margin">
                <thead>
          
                    <?php
$sql_1 = mysqli_query($conexao,"SELECT * FROM professores WHERE nome != ''");
if(mysqli_num_rows($sql_1) == ''){
    echo "<h2>Não exisite nenhum Professor cadastrado no momento</h2>";
}else{
?>
                    <tr>
                        <th>Status</th>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Nº disciplina(s):</th>
                        <th>Salario</th>
                        <th>Actividade</th>
                    </tr>
                </thead>
                <?php while($res_1 = mysqli_fetch_array($sql_1)){ ?>
                <tbody>
                    <tr>
                      <?php 
                      $id = $res_1['id']; ?>
        
         <td><?php echo $res_1['status']; ?></td>
        <td><?php echo $code = $res_1['code']; ?></td>
        <td><a href="infoProf.php?q=<?php echo $res_1['code']; ?>&s=professor"><?php echo $res_1['nome']; ?></a></a> </td>
        <td><?php echo mysqli_num_rows(mysqli_query($conexao,"select p.code from disciplinas as d inner join professores as p on d.professores_id = p.id where professores_id = '$id'")); ?></td>
        <td>R$ <?php echo $res_1['salario']; ?></td>

         <?php if($res_1['status'] == 'Inativo'){ ?>
      <td class="bg-danger">
       <a class="a" href="professorInfo.php?pg=todos&func=deleta&id=<?php echo $res_1['id']; ?>"><img title="Excluir Professor" src="img/excluir.png" width="18" height="18" border="0"></a>
        <?php if($res_1['status'] == 'Inativo'){?>
        <a class="a" href="professorInfo.php?pg=todos&func=ativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Ativar novamente professor" src="../img/correto.jpg" width="20" height="20" border="0"></a>
        <?php } ?>
        <?php if($res_1['status'] == 'Ativo'){?>
        <a class="a" href="professorInfo.php?pg=todos&func=inativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Inativar Professor(a)" src="../img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        <a class="a" rel="superbox[iframe][990x650]" href="pdfProf.php?q=<?php echo $res_1['code']; ?>&s=profpdf"><img title="Informações detalhada deste Professor" src="../img/ver2.png" width="22" height="22" border="0"></a>

        <a class="a" rel="superbox[iframe][930x500]" href="historico_professor.php?id=<?php echo $res_1['id']; ?>"><img title="Histórico deste professor" src="../img/ver.png" width="22" height="22" border="0"></a>
        
        <a class="a"  href="editaProf.php?pg=todos&func=edita&code=<?php echo $res_1['id']; ?>"><img title="Editar Dados Cadastrais" src="../img/ico-editar.png" width="18" height="18" border="0"></a>
        <?php } ?>

        <?php if($res_1['status'] == 'Ativo'){?>
           <td  class="bg-info">
        <a class="a" href="professorInfo.php?pg=todos&func=deleta&id=<?php echo $res_1['id']; ?>"><img title="Excluir Professor" src="img/excluir.png" width="18" height="18" border="0"></a>
        <?php if($res_1['status'] == 'Inativo'){?>
        <a class="a" href="professorInfo.php?pg=todos&func=ativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Ativar novamente professor" src="../img/correto.jpg" width="20" height="20" border="0"></a>
        <?php } ?>
        <?php if($res_1['status'] == 'Ativo'){?>
        <a class="a" href="professorInfo.php?pg=todos&func=inativa&id=<?php echo $res_1['id']; ?>&code=<?php echo $res_1['code']; ?>"><img title="Inativar Professor(a)" src="../img/ico_bloqueado.png" width="18" height="18" border="0"></a>
        <?php } ?>
        <a class="a" rel="superbox[iframe][990x650]" href="pdfProf.php?q=<?php echo $res_1['code']; ?>&s=profpdf"><img title="Informações detalhada deste Professor" src="../img/ver2.png" width="22" height="22" border="0"></a>

        <a class="a" rel="superbox[iframe][930x500]" href="historico_professor.php?id=<?php echo $res_1['id']; ?>"><img title="Histórico deste professor" src="../img/ver.png" width="22" height="22" border="0"></a>
        
        <a class="a"  href="editaProf.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><img title="Editar Dados Cadastrais" src="../img/ico-editar.png" width="18" height="18" border="0"></a>
        <?php } ?>
      </td>
       <?php } ?>
                        </tbody>
                        <?php } // aui fecha a sql_1 ?> 
                        
            </table>

        </div>
  <div class="box-footer clearfix">
  <a class="btn btn-sm btn-info btn-flat pull-left"  value="bloco"   href="addprof.php?pg=cadastra">Cadastrar Professor</a>  
  <a class="btn btn-sm btn-default btn-flat pull-right" href="allProf.php?tipo=professores&s=<?php echo base64_encode("SELECT p.status,p.code,p.nome, c.curso from disciplinas as d INNER JOIN professores AS p on d.professores_id = p.id INNER JOIN cursos as c on d.cursos_id = c.id_curso"); ?>">Ver Todos Professores</a>       </div>
    </div>  
    <?php } // aui fecha a sql_1 ?> 
  <?php if(@$_GET['func'] == 'ativa'){

$id = $_GET['id'];
$code = $_GET['code'];

mysqli_query($conexao,"UPDATE professores SET status = 'Ativo' WHERE id = '$id'");

mysqli_query($conexao,"UPDATE acesso_ao_sistema SET status = 'Ativo' WHERE code = '$code'");
echo "<script language='javascript'>window.location='professorInfo.php?pg=todos';</script>";
}?>


<?php if(@$_GET['func'] == 'inativa'){

$id = $_GET['id'];
$code = $_GET['code'];

mysqli_query($conexao,"UPDATE professores SET status = 'Inativo' WHERE id = '$id'");
mysqli_query($conexao,"UPDATE acesso_ao_sistema SET status = 'Inativo' WHERE code = '$code'");
echo "<script language='javascript'>window.location='professorInfo.php?pg=todos';</script>";
}?>

</div>
</div>
<!---End Recently Student Added Block--->
    </section>
<?php if(@$_GET['func'] == 'deleta'){

$id = $_GET['id'];

mysqli_query($conexao,"DELETE FROM professores WHERE id = '$id'");

echo "<script language='javascript'>window.location='professorInfo.php?pg=todos';</script>";

}?>
    <?php require "footer.php" ?>

</aside>


    
      </div>
         </body>
    </html>
    