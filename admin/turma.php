
      <?php require "../config.php" ?>

        <!DOCTYPE html>
    <html lang="en">
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
   <span>Course Management</span> <i class="fa fa-angle-left pull-right"></i></a>   
         <ul class="treeview-menu">
              <li>
    <a href="classe.php?pg=curso&cadastra=sim"><i class="fa fa-angle-double-right"></i> Classe</a>     </li>
              <li>
    <a href="disciplina.php"><i class="fa fa-angle-double-right"></i> Disciplina</a>    
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
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-edit"></i> Cadastrar Turma</h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-back" href="css/index.php?r=course%2Fsection%2Findex">Back</a>	</div>
   </div>
</div>
<?php if(@$_GET['cadastra'] == 'sim'){?> 
    <?php if(isset($_POST['cadastra'])){
        $nome = $_POST['nome'];
        $cursos_id = $_POST['cursos_id'];

$cd = mysqli_query($conexao,"INSERT INTO turmas (turma,cursos_id ) VALUES ('$nome','$cursos_id')");
if($cd == ''){
    echo "<script language='javascript'>window.alert('Ocorreu um erro, ao cadastrar a Turma!');</script>";
}else{
    echo "<script language='javascript'>window.alert('A classe  foi cadastrado com sucesso!');window.location='cursoedisciplina.php?pg=cursoedisciplinas';</script>";
}
}?> 
<div class="section-update">
    
<div class="col-xs-12 col-lg-12">
  <div class="box-info box view-item col-xs-12 col-lg-12">
   <div class="section-form">

    <form id="section-form" action="" method="post" role="form">

    <div class="col-xs-12 col-sm-4 col-lg-4">
    <div class="form-group field-section-section_name required">
<label class="control-label" for="section-section_name">Classe</label>
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
    <div class="form-group field-section-section_name required">
<label class="control-label" for="section-section_name">Nome Turma</label>
<input type="text" id="section-section_name" class="form-control" name="nome" value="" maxlength="50" placeholder="Nome da Turma">
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
  </div>
</div>
</div>

  <?php die;} ?>

    </section>


    <?php require "footer.php" ?>

</aside>


	
      </div>
<script src="css/assets/cfc8ec80/yii.validation.js">
      
    </script>
<script src="css/assets/cfc8ec80/yii.activeForm.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {
jQuery('#section-form').yiiActiveForm([{"id":"section-section_name","name":"section_name","container":".field-section-section_name","input":"#section-section_name","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.string(value, messages, {"message":"Section Name must be a string.","max":50,"tooLong":"Section Name should contain at most 50 characters.","skipOnEmpty":1});}},{"id":"section-section_batch_id","name":"section_batch_id","container":".field-section-section_batch_id","input":"#section-section_batch_id","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":""});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}},{"id":"section-intake","name":"intake","container":".field-section-intake","input":"#section-intake","error":".help-block.help-block-error","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"","skipOnEmpty":1});}}], []);
});</script>    </body>
    </html>
    