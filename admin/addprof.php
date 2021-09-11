

        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro do Professor</title>
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
      <?php require"../config.php" ?>
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
<li><a href="css/index.php?r=student%2Fdefault%2Findex">Student</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Manage Students</a></li>
<li class="active">Adicionar Estudante</li>
</ul>

    <section class="content">
        <div class="col-xs-12">
  <div class="col-lg-12 col-sm-12 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> Adicionar Estudante</h3></div>
</div>

<div class="stu-master-create">
    <style>
.box .box-solid {
     background-color: #F8F8F8;
}
</style>



<?php 
if (@$_GET['pg'] == 'cadastra') {
 ?>
<?php if (isset($_POST['button'])) {

$code = $_POST['code'];
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

if ($code == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, o código não foi criado!');</script>";
}elseif ($nome == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Digite um Nome!');</script>";
}elseif ($bi == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Digite o Numero Do BI!');</script>";
}elseif ($bairro == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Digite O Nome do Bairro!');</script>";
}elseif ($nascimento == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Escolha A Data do Nascimento!');</script>";
}elseif ($numero == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Digite O Numero De Telefone!');</script>";
}elseif ($sexo == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Selecione um Sexo!');</script>";
}elseif ($salario == "") {
  # code...
  echo "<script language='javascript'>window.alert('Houve um erro, Digite O Salario!');</script>";
}else{
$sql_2 = mysqli_query($conexao,"INSERT INTO professores (code, status, nome, senha, bi, nascimento, bairro, numero, nacionalidade, sexo, instituto,licenciatura,mestrado,doutorado,experiencia,salario) VALUES ('$code', 'Ativo', '$nome', '$senha', '$bi', '$nascimento', '$bairro', '$numero', '$nacionalidade', '$sexo', '$instituto','$licenciatura','$mestrado','$doutorado','$experiencia','$salario')");
if($sql_2 == ''){
  echo "<script language='javascript'>window.alert('Ocorreu um erro ao cadastrar!');</script>";
}else{
  mysqli_query($conexao,"INSERT INTO acesso_ao_sistema (status, code, senha, nome, painel) VALUES ('Ativo', '$code', '$senha', '$nome', 'professor')");
  echo "<script language='javascript'>window.alert('Professor cadastrado com sucesso!');window.location='professorinfo.php?pg=todos';</script>";

 }}} ?>


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
 <?php
      $sql_1 = mysqli_query($conexao,"SELECT * FROM professores ORDER BY id DESC LIMIT 1");
    if(mysqli_num_rows($sql_1) == ''){
      $new_code = "8741597";
    ?>
        <input class="form-control" type="text" name="code" id="textfield" disabled="disabled" value="<?php echo $new_code;  ?>">
        <input class="form-control" type="hidden" name="code" value="<?php echo $new_code;  ?>" />
        </td>      
      <?php
    }else{
      while($res_1 = mysqli_fetch_array($sql_1)){
      
      $new_code = $res_1['code']+$res_1['id']+741;
    ?>
        <input class="form-control"type="text" name="code" id="textfield" disabled="disabled" value="<?php echo $new_code;  ?>">
        <input class="form-control"type="hidden" name="code" value="<?php echo $new_code;  ?>" />
        </td>
      <?php }} ?>
   
   
 
</div>   

</div>
 <div class="col-xs-3 col-sm-8 edusecArLangPopover" style="padding-top: 25px;">
 <button type="button" class="btn btn-danger" data-html=true data-toggle="popover" title="Aviso" data-trigger="focus" data-content="Foi criado um código único para este aluno que ele vai usar para acerder ao sistema">
  <i class="fa fa-info-circle"></i>
 </button>
    </div>

   </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_first_name required">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="nome"><div class="help-block"></div>
</div>
    </div>
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Senha</label><input type="text" id="stuinfo-stu_middle_name" class="form-control"name="senha" placeholder="123456789"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">BI</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="bi"><div class="help-block"></div>
</div>    
</div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Data de nascimento</label><input type="Date"  class="form-control" name="nascimento">
<div class="help-block"></div>
</div>  
</div>
  <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Bairro</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="bairro"><div class="help-block"></div>
</div>   
 </div> 
   <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nacionalidade</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="nacionalidade"><div class="help-block"></div>
</div>    
</div>
  </div>
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">Numero de Telefone</label><input type="text" id="stuinfo-stu_first_name" class="form-control"  name="numero"><div class="help-block"></div>
</div>    
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Sexo</label><select id="stuinfo-stu_gender" class="form-control" name="sexo">
<option value="">--- Seleciona o sexo ---</option>
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
<label class="control-label" for="stuinfo-stu_mobile_no">Instituto </label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="instituto" ><div class="help-block"></div>
</div>    
</div>

   <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Licenciatura</label><input type="text" id="stui-stu_dob" class="form-control" max="" name="licenciatura">
<div class="help-block"></div>
</div>  
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Doutorado</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="doutorado" ><div class="help-block"></div>
</div>    
</div>

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Mestrado</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" name="mestrado" ><div class="help-block"></div>
</div> 
</div>

<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Ano Experiencia</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" name="experiencia" ><div class="help-block"></div>
</div> 
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Salario</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" name="salario" ><div class="help-block"></div>
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
      <a class="btn btn-default btn-block" href="index.php?">Cancelar</a> 
    </div>
    </div>
   
    </form>   
  </div>
  </div>
</div>

</div>
<?php } ?>
    </section>

    <?php require "footer.php" ?>

</aside>


  
      </div>
    <script src="css/assets/cfc8ec80/yii.validation.js"></script>
<script src="css/assets/a986a570/jquery-ui.js"></script>
<script src="css/assets/a986a570/ui/i18n/datepicker-en.js"></script>
<script src="css/assets/cfc8ec80/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
$('#stuinfo-stu_dob').datepicker($.extend({}, $.datepicker.regional['en'], {"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2021","changeYear":true,"readOnly":true,"autoSize":true}));
$('#stuinfo-stu_admission_date').datepicker($.extend({}, $.datepicker.regional['en'], {"dateFormat":"dd-mm-yy","changeMonth":true,"yearRange":"1900:2021","changeYear":true,"readOnly":true,"autoSize":true,"buttonImage":"/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/index.phpimages/calendar.png"}));
jQuery('#stu-master-form').yiiActiveForm([{"id":"stuinfo-stu_unique_id","name":"stu_unique_id","container":".field-stuinfo-stu_unique_id","input":"#stuinfo-stu_unique_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student ID cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student ID must be an integer.","skipOnEmpty":1});}},{"id":"stuinfo-stu_title","name":"stu_title","container":".field-stuinfo-stu_title","input":"#stuinfo-stu_title","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Title must be a string.","max":15,"tooLong":"Title should contain at most 15 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_first_name","name":"stu_first_name","container":".field-stuinfo-stu_first_name","input":"#stuinfo-stu_first_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"First Name cannot be blank."});yii.validation.string(value, messages, {"message":"First Name must be a string.","max":50,"tooLong":"First Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_middle_name","name":"stu_middle_name","container":".field-stuinfo-stu_middle_name","input":"#stuinfo-stu_middle_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Middle Name must be a string.","max":50,"tooLong":"Middle Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_last_name","name":"stu_last_name","container":".field-stuinfo-stu_last_name","input":"#stuinfo-stu_last_name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Last Name cannot be blank."});yii.validation.string(value, messages, {"message":"Last Name must be a string.","max":50,"tooLong":"Last Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_gender","name":"stu_gender","container":".field-stuinfo-stu_gender","input":"#stuinfo-stu_gender","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Gender must be a string.","max":20,"tooLong":"Gender should contain at most 20 characters.","skipOnEmpty":1});}},{"id":"stuinfo-stu_email_id","name":"stu_email_id","container":".field-stuinfo-stu_email_id","input":"#stuinfo-stu_email_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":50,"tooLong":"Email ID should contain at most 50 characters.","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Email ID must be a string.","max":65,"tooLong":"Email ID should contain at most 65 characters.","skipOnEmpty":1});yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Email ID is not a valid email address.","enableIDN":false,"skipOnEmpty":1});}},{"id":"stuinfo-stu_mobile_no","name":"stu_mobile_no","container":".field-stuinfo-stu_mobile_no","input":"#stuinfo-stu_mobile_no","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","skipOnEmpty":1});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Mobile No must be an integer.","min":10,"tooSmall":"Mobile No must be no less than 10.","skipOnEmpty":1});}},{"id":"stuinfo-stu_dob","name":"stu_dob","container":".field-stuinfo-stu_dob","input":"#stuinfo-stu_dob","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});}},{"id":"stumaster-stu_master_category_id","name":"stu_master_category_id","container":".field-stumaster-stu_master_category_id","input":"#stumaster-stu_master_category_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_nationality_id","name":"stu_master_nationality_id","container":".field-stumaster-stu_master_nationality_id","input":"#stumaster-stu_master_nationality_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_course_id","name":"stu_master_course_id","container":".field-stumaster-stu_master_course_id","input":"#stumaster-stu_master_course_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Course cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_batch_id","name":"stu_master_batch_id","container":".field-stumaster-stu_master_batch_id","input":"#stumaster-stu_master_batch_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Batch cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stumaster-stu_master_section_id","name":"stu_master_section_id","container":".field-stumaster-stu_master_section_id","input":"#stumaster-stu_master_section_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Section cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"stuinfo-stu_admission_date","name":"stu_admission_date","container":".field-stuinfo-stu_admission_date","input":"#stuinfo-stu_admission_date","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Admission Date cannot be blank."});yii.validation.string(value, messages, {"message":"Admission Date must be a string.","max":15,"tooLong":"Admission Date should contain at most 15 characters.","skipOnEmpty":1});}},{"id":"stumaster-stu_master_stu_status_id","name":"stu_master_stu_status_id","container":".field-stumaster-stu_master_stu_status_id","input":"#stumaster-stu_master_stu_status_id","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}}], []);
});</script>

 </body>
    </html>
    