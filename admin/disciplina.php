

        <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>Disciplina</title>
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
    </head>
    <body class="skin-black">
    	<?php require "../config.php" ?>
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
   <span>Classes e Disciplina</span> <i class="fa fa-angle-left pull-right"></i></a>   
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
  <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-edit"></i> Cadastar Disciplina</h3></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 edusecArLangHide"></div>
	<div class="col-xs-4 left-padding">
	<a class="btn btn-block btn-back" href="cursoedisciplina.php?pg=cursoedisciplinas">Back</a>	</div>
   </div>
</div>

<?php if(isset($_POST['cadastra'])){
    
$cursos_id  = $_POST['cursos_id'];   
$disciplina = $_POST['disciplina']; 
$professores_id  = $_POST['professores_id'];   
$turma_id = $_POST['turma_id'];    

if($disciplina == ''){
    echo "<script language='javascript'>window.alert('Digite o nome da disciplina');</script>";
}else if($turma_id == ''){
    echo "<script language='javascript'>window.alert('Selecione uma Turma');</script>";
}else{
$sql_5 = mysqli_query($conexao,"INSERT INTO disciplinas (cursos_id, disciplina, professores_id, turma_id) VALUES ('$cursos_id ', '$disciplina', '$professores_id', '$turma_id')");
if($sql_5 == ''){
    echo "<script language='javascript'>window.alert('Ocorreu um erro!');</script>";
}else{
    echo "<script language='javascript'>window.alert('Disciplina cadastrada com sucesso!');window.location='cursoedisciplina.php?pg=cursoedisciplinas';</script>";
  }
 }
}?>
<div class="batches-update">
     
<div class="col-xs-12 col-lg-12">
	<div class="box-info box view-item col-xs-12 col-lg-12">
		<div class="batch-form">
		    <form action="" method="post">	
			<div class="col-xs-12 col-lg-12 no-padding">
    			<div class="col-xs-12 col-sm-6 col-lg-6">
    				<div class="form-group field-batches-batch_course_id required">
<label class="control-label" for="batches-batch_course_id">Classe</label>
<select id="batches-batch_course_id" class="form-control" name="cursos_id">
    <option>--- Seleciona a Classe ---</option>
    <?php
      $sql_3 = mysqli_query($conexao,"SELECT * FROM cursos");
        while($res_3 = mysqli_fetch_array($sql_3)){
      ?>
<option value="<?php echo $res_3['id_curso']; ?>"><?php echo $res_3['curso']; ?></option>
<?php } ?>
</select>
<p class="help-block help-block-error"></p>
</div>    			
</div>
    			<div class="col-xs-12 col-sm-6 col-lg-6">
    				<div class="form-group field-batches-batch_alias required">
<label class="control-label" for="batches-batch_alias">Disciplina</label>
<input type="text" id="batches-batch_alias" class="form-control" name="disciplina"maxlength="35" placeholder="Digite o nome da disciplina"><p class="help-block help-block-error"></p>
</div>    		
	</div>
			</div>
			<div class="col-xs-12 col-lg-12 no-padding">
    			<div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-group field-batches-batch_course_id required">
<label class="control-label" for="batches-batch_course_id">professor</label>
<select id="batches-batch_course_id" class="form-control"  name="professores_id">
<option value="">--- Seleciona o Professor ---</option>
<?php
      $sql_4 = mysqli_query($conexao,"SELECT * FROM professores WHERE nome != ''");
        while($res_4 = mysqli_fetch_array($sql_4)){
      ?>
<option value="<?php echo $res_4['id']; ?>"><?php echo $res_4['nome']; ?></option>
      <?php } ?>
</select>
<p class="help-block help-block-error"></p>
</div>              
</div>
    			<div class="col-xs-12 col-sm-6 col-lg-6">
    				<div class="form-group field-batches-end_date required">
<label class="control-label" for="batches-end_date"><em>Turma</em></label>
<select id="batches-batch_course_id" class="form-control"  name="turma_id">
<option value="">--- Seleciona a Turma ---</option>
<?php
      $sql_4 = mysqli_query($conexao,"SELECT * FROM turmas WHERE turma != ''");
        while($res_4 = mysqli_fetch_array($sql_4)){
      ?>
<option value="<?php echo $res_4['id_turma']; ?>"><?php echo $res_4['turma']; ?></option>
      <?php } ?>
</select>
<p class="help-block help-block-error"></p>
</div>    			
</div>
			</div>
    		<div class="form-group col-xs-12 col-sm-6 col-lg-4 no-padding edusecArLangCss">
				<div class="col-xs-6">
        			<button type="submit" name="cadastra" class="btn btn-block btn-info">Cadastrar</button>				</div>
				<div class="col-xs-6">
					<a class="btn btn-default btn-block" href="index.php">Cancel</a>				</div>
    		</div>
    		</form>		</div>
	</div>
</div>
</div>
    </section>

   <?php require "footer.php" ?>

</aside>


	
      </div>
        </body>
    </html>
    