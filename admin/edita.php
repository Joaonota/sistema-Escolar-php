 <!DOCTYPE html>
    <html lang="en">
    <head>
        
        <title>Edição do Estudante</title>
        <link href="css/assets/a986a570/themes/smoothness/jquery-ui.css" rel="stylesheet">
<link href="css/assets/9da5096c/css/bootstrap.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/AdminLTE.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/EdusecCustome.css" rel="stylesheet">
<script src="css/assets/d2579610/jquery.js"></script>
<script src="css/assets/cfc8ec80/yii.js"></script>
<script src="css/assets/9da5096c/js/bootstrap.js"></script>
<script src="css/assets/6ffe0e65/js/AdminLTE/app.js"></script>
<script src="css/assets/6ffe0e65/js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap-multiselect.js"></script>
<script src="css/assets/6ffe0e65/js/custom-delete-confirm.js"></script>
<script src="css/assets/6ffe0e65/js/bootbox.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap.file-input.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrapx-clickover.js"></script>   
 </head>
    <body class="skin-black">
      <?php require"../config.php" ?>
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
<li><a href="estudante.php?pg=todos">Estudantes</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Todos  estudantes</a></li>
<li class="active">Editar  Estudante</li>
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> Editar  Estudante</h3></div>
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

$sql_1 = mysqli_query($conexao,"SELECT e.vencimento,e.tel_cobranca,e.obs, e.turno,e.atendimento_especial,e.mae,e.numero_mae, e.pai,e.numero_pai, e.senha,e.bi,e.nascimento,e.nacionalidade,e.bairro,e.sexo,e.celular, e.status,e.code,e.nome,c.curso,e.mensalidade FROM estudantes AS e INNER JOIN cursos AS c ON e.cursos_id = c.id_curso WHERE code = '$code'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>

<?php if(isset($_POST['button'])){

$code = $_GET['code'];
$nome = $_POST['nome'];
$bi = $_POST['bi'];
$senha = $_POST['senha'];
$nascimento = $_POST['nascimento'];
$mae = $_POST['mae'];
$pai = $_POST['pai'];
$numero_pai = $_POST['numero_pai'];
$numero_mae = $_POST['numero_mae'];
$bairro = $_POST['bairro'];
$sexo = $_POST['sexo'];
$nacionalidade = $_POST['nacionalidade'];
$celular = $_POST['celular'];
$cursos_id = $_POST['cursos_id'];
$turno = $_POST['turno'];
$atendimento_especial = $_POST['atendimento_especial'];
$mensalidade = $_POST['mensalidade'];
$vencimento = $_POST['vencimento'];
$tel_cobranca = $_POST['tel_cobranca'];
$obs = $_POST['obs'];





$sql_cadastra =mysqli_query($conexao,"UPDATE estudantes SET  nome = '$nome', bi = '$bi', nascimento = '$nascimento', mae = '$mae', pai = '$pai', senha = '$senha', numero_pai = '$numero_pai', bairro = '$bairro', numero_mae = '$numero_mae', sexo = '$sexo', nacionalidade = '$nacionalidade', cursos_id = '$cursos_id', celular = '$celular', atendimento_especial = '$atendimento_especial', mensalidade = '$mensalidade', turno = '$turno', vencimento = '$vencimento', tel_cobranca = '$tel_cobranca', obs = '$obs' WHERE code = '$code'");
if($sql_cadastra == ''){
  echo "<script language='javascript'>window.alert('Ocorreu um erro tente novamente!');window.location='';</script>";
}else{
echo "<script language='javascript'>window.alert('Atualização realizada com sucesso!');window.location='estudante1.php?pg=todos';</script>";

}}?> 
<form method="post"> 
<div class="col-xs-12 col-lg-12">
  <div class="box-success box view-item col-xs-12 col-lg-12">
    <div class="stu-master-form">
     <p class="note">Todos os<span class="required"> <b style=color:red;></b></span> Campos devem ser Prenchidos</p>
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
<label class="control-label" for="stuinfo-stu_unique_id">Codigo do Estudante</label>
<input type="text" disabled="disabled"  class="form-control" name="code" value="<?php echo $res_1['code']; ?>">
<div class="help-block">
</div>
 
</div>   

</div>
    <div class="col-xs-3 col-sm-8 edusecArLangPopover" style="padding-top: 25px;">
 <button type="button" class="btn btn-danger" data-html=true data-toggle="popover" title="Aviso" data-trigger="focus" data-content=" Foi criado um código único para este aluno que ele vai usar para acerder ao sistema"><i class="fa fa-info-circle"></i></button>
    </div>

   </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome</label><input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['nome']; ?>" class="form-control" name="nome"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">BI</label><input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['bi']; ?>" class="form-control"name="bi"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Senha</label>
<input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['senha']; ?>" class="form-control" value="123456789" name="senha">
<div class="help-block">
  
</div>
</div>    
</div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Data de nascimento</label><input type="Date"  class="form-control" value="<?php echo $res_1['nascimento']; ?>" name="nascimento">
<div class="help-block"></div>
</div>  
</div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome da mãe</label><input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['mae']; ?>" class="form-control" name="mae"><div class="help-block"></div>
</div>   
 </div> 
   <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome do Pai</label><input type="text" id="stuinfo-stu_middle_name" value="<?php echo $res_1['pai']; ?>" class="form-control" name="pai"><div class="help-block"></div>
</div>    
</div>
  </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">Nacionalidade</label><input type="text" id="stuinfo-stu_first_name" class="form-control" value="<?php echo $res_1['nacionalidade']; ?>"  name="nacionalidade"><div class="help-block"></div>
</div>  
  </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Sexo</label><select id="stuinfo-stu_gender" class="form-control"  name="sexo">
<option value="<?php echo $res_1['nascimento']; ?>"><?php echo $res_1['sexo']; ?></option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select><div class="help-block"></div>
</div>    </div>


    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Bairro</label><input type="text" id="stuinfo-stu_last_name" class="form-control" value="<?php echo $res_1['bairro']; ?>" name="bairro"><div class="help-block"></div>
</div>    </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Numero do Telefone</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['celular']; ?>" name="celular" maxlength="12"><div class="help-block"></div>
</div>    
  </div> 
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone do pai</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['numero_pai']; ?>"  name="numero_pai" maxlength="12"><div class="help-block"></div>
</div>  </div> 
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone da mãe</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" value="<?php echo $res_1['numero_mae']; ?>" name="numero_mae" maxlength="12"><div class="help-block"></div>
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
     <div class="form-group field-stumaster-stu_master_course_id required">
<label class="control-label" for="stumaster-stu_master_course_id">Classe</label>

<select id="stumaster-stu_master_course_id" class="form-control" name="cursos_id" onchange="">
  <option><?php echo $res_1['curso']; ?></option>
   <?php
      $sql_1 = mysqli_query($conexao,"SELECT * FROM cursos");
      while($res_2= mysqli_fetch_array($sql_1)){
    ?>
<option value="<?php echo $res_2['id_curso']; ?>"><?php echo $res_2['curso']; ?></option>
<?php } ?>
</select>


<div class="help-block">
  
</div>
</div>    
</div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stumaster-stu_master_batch_id required">
<label class="control-label" for="stumaster-stu_master_batch_id">Turno</label>
<select  id="turno"class="form-control" name="turno" >
<option><?php echo $res_1['turno']; ?></option>
<option value="Manhã">Manhã</option>
<option value="Tarde">Tarde</option>
<option value="Noite">Noite</option>
</select><div class="help-block"></div>
</div>    </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-stumaster-stu_master_section_id required">
<label class="control-label" for="stumaster-stu_master_section_id">Cuidado Especial</label>
<select id="stumaster-stu_master_section_id" class="form-control"   name="atendimento_especial">
  <option><?php echo $res_1['atendimento_especial']; ?></option>
<option value="SIM">SIM</option>
<option value="NÃO">NÃO</option>
</select>
<div class="help-block"></div>
</div>     </div>
   </div>



   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Valor da mensalidade</label>
<input type="text" id="stuinfo-stu_mobile_no" class="form-control"  name="mensalidade" value="<?php echo $res_1['mensalidade']; ?>"  maxlength="12">
<div class="help-block"></div>
</div>    
</div>

   <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Vencimento</label><input type="text" id="stuinfo-stu_dob" class="form-control" name="vencimento" value="<?php echo $res_1['vencimento']; ?>">
<div class="help-block"></div>
</div>  
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone de cobrança</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="tel_cobranca" value="<?php echo $res_1['tel_cobranca']; ?>" maxlength="12"><div class="help-block"></div>
</div>    
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Observações para este(a) aluno(a)</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" name="obs" value="<?php echo $res_1['obs']; ?>" maxlength="12"><div class="help-block"></div>
</div>   
</div>
   </div>

  </div><!---./end box-body--->
 </div><!---./end box--->

    <div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
  <div class="col-xs-6">
        <button name="button" id="button"  class="btn btn-block btn-success">Actualizar</button>  
         
      </div>
  <div class="col-xs-6">
      <a class="btn btn-default btn-block" href="index.php?">Cancel</a> 
    </div>
    </div>
   
    </form>   
  </div>
  </div>
</div>
</div>
<?php }// aqui fecha cadastra ?>
<?php } ?>
    </section>

    <?php require "footer.php" ?>

</aside>


  
      </div>
    <script src="css/assets/cfc8ec80/yii.validation.js"></script>
<script src="css/assets/a986a570/jquery-ui.js"></script>
<script src="css/assets/a986a570/ui/i18n/datepicker-en.js"></script>
<script src="css/assets/cfc8ec80/yii.activeForm.js"></script>


 </body>
    </html>
    