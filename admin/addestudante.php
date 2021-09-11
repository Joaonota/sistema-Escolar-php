<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro do estudante</title>
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
      <?php require"../conexao.php" ?>
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

        <ul class="breadcrumb"><li><a href="css/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="estudante.php?pg=todos">Estudantes</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Todos  estudantes</a></li>
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


<?php if($_GET['pg'] == 'cadastra'){ ?> 
<?php if(isset($_POST['button'])){

$code = $_POST['code'];
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
$turma_id = $_POST['turma_id'];
$turno = $_POST['turno'];
$atendimento_especial = $_POST['atendimento_especial'];
$mensalidade = $_POST['mensalidade'];
$vencimento = $_POST['vencimento'];
$tel_cobranca = $_POST['tel_cobranca'];
$obs = $_POST['obs'];




if($code == ''){
  echo "<script language='javascript'>window.alert('Houve um erro, o código não foi criado!');</script>";
}else if($nome == ''){
  echo "<script language='javascript'>window.alert('Digite o nome do aluno(a)!');</script>";
}else if($bi == ''){
  echo "<script language='javascript'>window.alert('Digite o bi do aluno(a)!');</script>";
}else if($nascimento == ''){
  echo "<script language='javascript'>window.alert('Digite a data de nascimento do aluno(a)!');</script>";
}else if($senha == ''){
  echo "<script language='javascript'>window.alert('Digite o senha do aluno(a)!');</script>";
}else if($mae == ''){
  echo "<script language='javascript'>window.alert('Digite Nome da Mae!');</script>";
  
}else if($pai == ''){
  echo "<script language='javascript'>window.alert('Digite Nome do Pai!');</script>";
  
}else if($numero_pai == ''){
  echo "<script language='javascript'>window.alert('Digite o Numero do pai!');</script>";
  
}else if($numero_mae == ''){
  echo "<script language='javascript'>window.alert('Digite o Numero da Mae!');</script>";
  
}else if($bairro == ''){
  echo "<script language='javascript'>window.alert('Digite Nome do Bairro!');</script>";
  
}else if($sexo == ''){
  echo "<script language='javascript'>window.alert('Selecione um sexo!');</script>";
  
}else if($nacionalidade == ''){
  echo "<script language='javascript'>window.alert('Digite uma Nacionalidade!');</script>";
  
}else if($celular == ''){
  echo "<script language='javascript'>window.alert('Digite um Numero!');</script>";
  
}else{

$sql_cadastra = mysqli_query($conexao,"INSERT INTO estudantes (code, status, nome, bi, senha, nascimento, mae, pai, numero_pai, numero_mae, bairro, sexo, nacionalidade, celular, cursos_id,turma_id, turno, atendimento_especial,mensalidade, vencimento,tel_cobranca,obs) VALUES ('$code', 'Ativo', '$nome', '$bi', '$senha', '$nascimento', '$mae', '$pai', '$numero_pai', '$numero_mae', '$bairro', '$sexo', '$nacionalidade', '$celular','$cursos_id', '$turma_id','$turno','$atendimento_especial','$mensalidade','$vencimento','$tel_cobranca','$obs')");
if($sql_cadastra == ''){
  echo "<script language='javascript'>window.alert('Ocorreu um erro tente novamente!');window.location='';</script>";
}else{
echo "<script language ='javascript'>window.alert('PARABENS O CADASTRO FOI REALIZADO COM SUCESSO');</script> ";
mysqli_query($conexao,"INSERT INTO acesso_ao_sistema (status, code, senha, nome, painel) VALUES ('Ativo', '$code', '$senha', '$nome', 'Aluno')");

echo "<script language='javascript'>window.location='estudante.php?pg=todos';</script>";



}}}?>






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
<?php 
   $sql_1 = mysqli_query($conexao,"SELECT * FROM estudantes ORDER BY id DESC LIMIT 1");
   if(mysqli_num_rows($sql_1) == ''){
     $novo_code = "587418";
  ?>
      <td><input type="text" class="form-control" name="code" id="textfield" disabled="disabled" value="<?php echo $novo_code; ?>"></td>
      <input type="hidden" name="code" value="<?php echo $novo_code; ?>" />    
    <?php
     }else{
   
    while($res_1 = mysqli_fetch_array($sql_1)){
      $novo_code = $res_1['code']+741+$res_1['id'];
   ?>
      <td><input type="text"  class="form-control" name="code" id="textfield" disabled="disabled" value="<?php echo $novo_code; ?>"></td>
      <input type="hidden"  class="form-control" name="code" value="<?php echo $novo_code; ?>" />
     <?php } } ?>
   
   
 
</div>   

</div>
    <div class="col-xs-3 col-sm-8 edusecArLangPopover" style="padding-top: 25px;">
 <button type="button" class="btn btn-danger" data-html=true data-toggle="popover" title="Aviso" data-trigger="focus" data-content=" Foi criado um código único para este aluno que ele vai usar para acerder ao sistema"><i class="fa fa-info-circle"></i></button>
    </div>

   </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="nome"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">BI</label><input type="text" id="stuinfo-stu_middle_name" class="form-control"name="bi"><div class="help-block"></div>
</div>    
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Senha</label>
<input type="text" id="stuinfo-stu_middle_name" class="form-control" value="123456789" name="senha">
<div class="help-block">
  
</div>
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
<label class="control-label" for="stuinfo-stu_middle_name">Nome da mãe</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="mae"><div class="help-block"></div>
</div>   
 </div> 
   <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_middle_name">
<label class="control-label" for="stuinfo-stu_middle_name">Nome do Pai</label><input type="text" id="stuinfo-stu_middle_name" class="form-control" name="pai"><div class="help-block"></div>
</div>    
</div>
  </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_first_name required">
<label class="control-label" for="stuinfo-stu_first_name">Nacionalidade</label><input type="text" id="stuinfo-stu_first_name" class="form-control"  name="nacionalidade"><div class="help-block"></div>
</div>  
  </div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_gender">
<label class="control-label" for="stuinfo-stu_gender">Sexo</label><select id="stuinfo-stu_gender" class="form-control" name="sexo">
<option value="">--- Seleciona o sexo ---</option>
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select><div class="help-block"></div>
</div>    </div>


    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_last_name required">
<label class="control-label" for="stuinfo-stu_last_name">Bairro</label><input type="text" id="stuinfo-stu_last_name" class="form-control" name="bairro"><div class="help-block"></div>
</div>    </div>
   </div>
 
   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Numero do Telefone</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control"  name="celular" maxlength="12"><div class="help-block"></div>
</div>    
  </div> 
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone do pai</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control"  name="numero_pai" maxlength="12"><div class="help-block"></div>
</div>  </div> 
  <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone da mãe</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="numero_mae" maxlength="12"><div class="help-block"></div>
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
  <option value="">--- Seleciona a Classe ---</option>
   <?php
      $sql_1 = mysqli_query($conexao,"SELECT * FROM cursos");
      while($res_1 = mysqli_fetch_array($sql_1)){
    ?>
<option value="<?php echo $res_1['id_curso']; ?>"><?php echo $res_1['curso']; ?></option>
<?php } ?>
</select>
</div>    
</div>

    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stumaster-stu_master_batch_id required">
<label class="control-label" for="stumaster-stu_master_batch_id">Turno</label>
<select  id="turno"class="form-control" name="turno" onchange=";">
<option value="">--- Seleciona o turno ---</option>
<option value="Manhã">Manhã</option>
<option value="Tarde">Tarde</option>
</select><div class="help-block"></div>
</div>   

 </div>
    <div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-stumaster-stu_master_section_id required">
<label class="control-label" for="stumaster-stu_master_section_id">Turma</label>
<select id="stumaster-stu_master_section_id" class="form-control"  name="turma_id">
 <option value="">--- Seleciona a Turma ---</option>
   <?php
      $sql_1 = mysqli_query($conexao,"SELECT * FROM turmas");
      while($res_1 = mysqli_fetch_array($sql_1)){
    ?>
<option value="<?php echo $res_1['id_turma']; ?>"><?php echo $res_1['turma']; ?></option>
<?php } ?>
</select>
</div>     
</div>
   </div>

   <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
    <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Valor da mensalidade</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="mensalidade" maxlength="12"><div class="help-block"></div>
</div>    
</div>

   <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-stuinfo-stu_dob required">
<label class="control-label" for="stuinfo-stu_dob">Vencimento</label><input type="text" id="stuinfo-stu_dob" class="form-control" maxlength="2" max="" name="vencimento">
<div class="help-block"></div>
</div>  
</div>
 <div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Telefone de cobrança</label><input type="text" id="stuinfo-stu_mobile_no" class="form-control" name="tel_cobranca" maxlength="12"><div class="help-block"></div>
</div>    
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
      <div class="form-group field-stumaster-stu_master_section_id required">
<label class="control-label" for="stumaster-stu_master_section_id">Cuidado Especial</label><select id="stumaster-stu_master_section_id" class="form-control"  name="atendimento_especial">
<option value="SIM">SIM</option>
<option value="NÃO">NÃO</option>
</select>
</div>     
</div>
<div class="col-xs-12 col-sm-4 col-lg-4">
  <div class="form-group field-stuinfo-stu_mobile_no">
<label class="control-label" for="stuinfo-stu_mobile_no">Observações para este(a) aluno(a)</label><input type="textarea" id="stuinfo-stu_mobile_no" class="form-control" name="obs" maxlength="12">
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
<?php }// aqui fecha cadastra ?>
    </section>

    <?php require "footer.php" ?>

</aside>


  
      </div>
    
 </body>
    </html>
    