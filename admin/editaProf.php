
<?php require"../config.php" ?>

        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Editar Professor</title>
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


<!-- Notifications: style can be found in dropdown.less -->
<?php require "notifica.php" ?>
        
        <!-- sidebar-menu. -- Start -->

      <?php require "drawer/drawer_professor.php" ?>


  <!-- sidebar-menu. -- End -->

    </section>

</aside>
  
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="css/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="professorInfo.php?pg=todos">Professor</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Todos Professores</a></li>
<li class="active">Editar Professor</li>
</ul>

    <section class="content">
       <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> Editar  Professor</h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>


<?php if(@$_GET['func'] == 'edita'){ ?>

<?php
$code = $_GET['code'];

$sql_1 = mysqli_query($conexao,"SELECT * FROM professores  WHERE code = '$code'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>



<?php if (isset($_POST['button'])) {

$code = $_GET['code'];
$nome = $_POST['nome'];
$bi = $_POST['bi'];
$senha = $_POST['senha'];
$bairro = $_POST['bairro'];
$nascimento = $_POST['nascimento'];
$nacionalidade = $_POST['nacionalidade'];
$numero = $_POST['numero'];
$sexo = $_POST['sexo'];
$instituto = $_POST['instituto'];
$licenciatura = $_POST['licenciatura'];
$doutorado = $_POST['doutorado'];
$mestrado = $_POST['mestrado'];
$experiencia = $_POST['experiencia'];
$salario = $_POST['salario'];


$sql_2 = mysqli_query($conexao,"UPDATE professores SET code = '$code',  nome= '$nome', senha='$senha', bi='$bi', nascimento='$nascimento', bairro='$bairro', numero='$numero', nacionalidade='$nacionalidade', sexo='$sexo', instituto='$instituto', licenciatura= '$licenciatura',mestrado='$mestrado', doutorado='$doutorado',experiencia='$experiencia', salario ='$salario' WHERE code = '$code'");
if($sql_2 == ''){
  echo "<script language='javascript'>window.alert('Ocorreu um erro ao cadastrar!');</script>";
}else{
 echo "<script language='javascript'>window.alert('Atualização realizada com sucesso!');window.location='professorinfo.php?pg=todos';</script>";

 }} ?>


<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
     <p class="note"><strong>Todos os</strong><span class="required"> <b style=color:red;></b></span><strong>Campos devem ser Prenchidos</strong> </p>
    <form   method="post" action="">
<input type="hidden" value="">    
  
    <div class="box box-solid box-info col-xs-12 col-lg-12 no-padding">
      <div class="box-header with-border">
         <h4 class="box-title"><i class="fa fa-info-circle"></i> Destalhes Pessoais</h4>
      </div>
    <div class="box-body"> 
 <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
<div class="col-xs-9 col-sm-4">
<div class="form-group field-stuinfo-stu_unique_id required">
<label class="control-label" for="stuinfo-stu_unique_id">Codigo do Professor</label>
<input type="text" disabled="disabled" class="form-control" name="code" value="<?php echo $res_1['code']; ?>">
<div class="help-block">
</div>
 
</div>   

</div>
    <div class="col-xs-3 col-sm-8 edusecArLangPopover" style="padding-top: 25px;">
 <button type="button" class="btn btn-danger" data-html=true data-toggle="popover" title="Aviso" data-trigger="focus" data-content=" Foi criado um código único para este aluno que ele vai usar para acerder ao sistema"><i class="fa fa-info-circle"></i></button>
    </div>

   </div>

   </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_first_name required">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome</label>
<input type="text" id="stuinfo-stu_middle_name" class="form-control"  value="<?php echo $res_1['nome']; ?>" name="nome"><div class="help-block"></div>
</div>
    </div>
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Senha</label><input type="text" id="stuinfo-stu_middle_name" class="form-control"name="senha" value="<?php echo $res_1['senha']; ?>" placeholder="senha padrão 123456789"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">BI</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" value="<?php echo $res_1['bi']; ?>" name="bi"><div class="help-block"></div>
</div>    
</div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Data de nascimento</label>
<input type="Date"  class="form-control" value="<?php echo $res_1['nascimento']; ?>" name="nascimento">
<div class="help-block"></div>
</div>  
</div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Bairro</label>
<input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['bairro']; ?>" class="form-control" name="bairro"><div class="help-block"></div>
</div>   
 </div> 
   <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nacionalidade</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" value="<?php echo $res_1['nacionalidade']; ?>" name="nacionalidade"><div class="help-block"></div>
</div>    
</div>
  </div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">Numero de Telefone</label><input type="text" id="stuinfo-stu_first_name" class="form-control" value="<?php echo $res_1['numero']; ?>" name="numero"><div class="help-block"></div>
</div>    
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Sexo</label>
<select id="stuinfo-stu_gender" class="form-control" name="sexo">
<option value="<?php echo $res_1['sexo']; ?>"><?php echo $res_1['sexo']; ?></option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select><div class="help-block"></div>
</div>   
 </div>
   </div>
     
  </div><!---./end box-body--->
</div><!---./end box--->

<div class="box box-solid box-warning col-xs-12 col-lg-12 no-padding">
  <div class="box-header with-border">
    <h4 class="box-title"><i class="fa fa-info-circle"></i> Detalhes Academicos</h4>
   </div>
   <div class="box-body">

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Instituto </label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['instituto']; ?>" name="instituto" ><div class="help-block"></div>
</div>    
</div>

   <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Licenciatura</label><input type="text" id="stui-stu_dob" class="form-control" max="" value="<?php echo $res_1['licenciatura']; ?>" name="licenciatura">
<div class="help-block"></div>
</div>  
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Doutorado</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['doutorado']; ?>" name="doutorado" ><div class="help-block"></div>
</div>    
</div>

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mestrado</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['mestrado']; ?>" name="mestrado" ><div class="help-block"></div>
</div> 
</div>

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Ano Experiencia</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['experiencia']; ?>" name="experiencia" ><div class="help-block"></div>
</div> 
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Salario</label>
<input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['salario']; ?>" name="salario" ><div class="help-block"></div>
</div> 
</div>
   </div>

  </div><!---./end box-body--->
 </div><!---./end box--->

    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
  <div class="col-xs-6">
        <button name="button" id="button"  class="btn btn-block btn-success">Cadastrar</button>  
         
      </div>
  <div class="col-xs-6">
      <a class="btn btn-default btn-block" href="index.php">Cancelar</a> 
    </div>
    </div>
   
    </form>   
  </div>
  </div>
</div>

</div>
<?php  }} ?>
    </section>

    <?php require "footer.php" ?>

</aside>
 </div>
 </body>
    </html>
    