

        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        
    <meta name="csrf-token" content="aFRTaEstajNaEWAYHEM6VTImKiIUdQ53Wy0bAwB4C2AQFiI/KBogAg==">
        <title>Info do estudante</title>
        <link href="css/assets/9da5096c/css/bootstrap.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/EduSecUserProfile.css" rel="stylesheet">
<link href="css/assets/23c7ca7f/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/AdminLTE.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/bootstrap-multiselect.css" rel="stylesheet">
<link href="css/assets/6ffe0e65/css/EdusecCustome.css" rel="stylesheet">

<script src="css/assets/d2579610/jquery.js"></script>
<script src="css/assets/cfc8ec80/yii.js"></script>
<script src="css/assets/9da5096c/js/bootstrap.js"></script>
<script src="css/assets/6ffe0e65/js/responsive-tabs.js"></script>
<script src="css/assets/6ffe0e65/js/EduSecUserProfile.js"></script>
<script src="css/assets/6ffe0e65/js/jquery.cookie.js"></script>
<script src="css/assets/6ffe0e65/js/AdminLTE/app.js"></script>
<script src="css/assets/6ffe0e65/js/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap-multiselect.js"></script>
<script src="css/assets/6ffe0e65/js/custom-delete-confirm.js"></script>
<script src="css/assets/6ffe0e65/js/bootbox.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrap.file-input.js"></script>
<script src="css/assets/6ffe0e65/js/bootstrapx-clickover.js"></script>    </head>
    <body class="skin-black">
    	 <?php require "../config.php"; ?> 
<header class="main-header header">

<?php require "bar.php" ?>
<li class="dropdown module-menu">
   
	
<ul class="dropdown-menu" style="">
    <li>
        <ul class="menu">
			            <li>
				<a href="css/index.php?r=default%2Findex"><i class="fa fa-cogs text-aqua fa-2x"></i><h4> Configuration</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=dashboard%2Fdefault%2Findex"><i class="fa fa-dashboard text-green fa-2x"></i> <h4>Dashboard</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=course%2Fdefault%2Findex"><i class="fa fa-graduation-cap text-yellow fa-2x"></i> <h4>Course</h4></a>          
				  </li>
						            <li>
				<a href="css/index.php?r=student%2Fdefault%2Findex"><i class="fa fa-users text-orange fa-2x"></i> <h4>Student</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=employee%2Fdefault%2Findex"><i class="fa fa-user text-purple fa-2x"></i> <h4>Employee</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=fees%2Fdefault%2Findex"><i class="fa fa-money text-green fa-2x" ></i> <h4>Fees</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=report%2Fdefault%2Findex"><i class="fa fa-line-chart text-blue fa-2x"></i> <h4>Report Center</h4></a>            </li>
						            <li>
				<a href="css/index.php?r=rights%2Fassignment%2Findex"><i class="fa fa-user-secret text-orange fa-2x"></i> <h4>User Rights</h4></a>            </li>
			        </ul>
    </li>
</ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<?php require "notifica.php" ?>
        
        <!-- sidebar-menu. -- Start -->
<?php require "drawer/drawer_aluno.php" ?>

	<!-- sidebar-menu. -- End -->

    </section>

</aside>
	<?php if(@$_GET['s'] == 'aluno'){ ?>
<?php
$code = $_GET['q'];

$sql_1 = mysqli_query($conexao,"SELECT e.turno,e.atendimento_especial,e.mae,e.numero_mae, e.pai,e.numero_pai, e.senha,e.bi,e.nascimento,e.nacionalidade,e.bairro,e.sexo,e.celular, t.turma, e.status,e.code,e.nome,c.curso,e.mensalidade FROM estudantes AS e INNER JOIN cursos AS c ON e.cursos_id = c.id_curso INNER JOIN turmas AS t on e.turma_id = t.id_turma WHERE code = '$code'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="css/index.php?r=student%2Fdefault%2Findex">Student</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Manage Students</a></li>
<li class="active"><?php echo $res_1['nome']; ?></li>
</ul>

    <section class="content">
        
<section class="content-header">
<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
		<i class="fa fa-user"></i>  Perfil do Estudante		<div class="pull-right">
				    <a id="export-pdf" class="btn-sm btn btn-warning" href="pdf.php?q=<?php echo $res_1['code']; ?>&s=aluno&curso=<?php echo $res_1['curso']; ?>" target="_blank"><i class="fa fa-file-pdf-o"></i>  PDF</a>				</div>
	</h2>
  </div><!-- /.col -->
</div>
</section>

<section class="content edusec-user-profile">
<div class="row">
	<div class="col-lg-3 table-responsive edusec-pf-border no-padding edusecArLangCss" style="margin-bottom:15px">
		<div class="col-md-12 text-center">
			<img class="img-circle edusec-img-disp" src="img/data/stu_images/no-photo.png" alt="No Image">		
			<div class="photo-edit">
						<a class="photo-edit-icon" href="css/index.php?r=student%2Fstu-master%2Fstu-photo&amp;sid=15" title="Change Profile Picture" data-toggle="modal" data-target="#photoup"><i class="fa fa-pencil"></i></a>					</div>
		</div>
		<table class="table table-striped">
			<tr>
				<th>Codigo Do Estudante</th>
				<td><?php echo $res_1['code']; ?></td>
			</tr>
			<tr>
				<th>Nome</th>
				<td><?php echo $res_1['nome']; ?></td>
			</tr>
			<tr>
				<th>Classe</th>
				<td><?php echo $res_1['curso']; ?></td>
			</tr>
			<tr>
				<th>Sexo</th>
				<td><?php echo $res_1['sexo']; ?></td>
			</tr>
			
			<tr>
				<th>Numero de Telefone</th>
				<td><?php echo $res_1['celular']; ?></td>
			</tr>
			<tr>
				<?php if($res_1['status'] == 'Ativo'){?>
				<th>Status</th>
				<td>
					  <span class="label label-success">Ativo</span>
					  				
				</td>
			</tr>
			<?php } ?>
			<tr>
				<?php if($res_1['status'] == 'Inativo'){?>
				<th>Status</th>
				<td>
					  <span class="label label-danger">Inativo</span>
					  				
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="col-lg-9 profile-data">
		<ul class="nav nav-tabs responsive" id = "profileTab">
			<li class="active" id = "personal-tab"><a href="#personal" data-toggle="tab"><i class="fa fa-street-view"></i> Pessoal</a></li>
			<li id = "academic-tab">
				<a href="#academic" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Academico</a>
			</li>
			<li id = "guardians-tab"><a href="#guardians" data-toggle="tab"><i class="fa fa-user"></i> Encarregados</a></li>
			
			
			<li id = "fees-tab"><a href="#fees" data-toggle="tab"><i class="fa fa-inr"></i> Menssalidade</a></li>
					</ul>
		 <div id='content' class="tab-content responsive">
			<div class="tab-pane active" id="personal">
				

<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Personal Details	<div class="pull-right">
			<a id="update-data" class="btn btn-primary btn-sm" href="edita.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>		</div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-3 col-sm-3 col-xs-6 edusec-profile-label edusecArLangCss">Nome</div>
		<div class="col-md-9 col-sm-9 col-xs-6 edusec-profile-text"><?php echo $res_1['nome']; ?></div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Senha</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['senha']; ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">B.I</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['bi']; ?></div>
	  </div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Data De Nascimento</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['nascimento']; ?></div>
	  </div>
	   <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Nacionalidade</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['nacionalidade']; ?></div>
	  </div>
	</div>


	<div class="col-md-12 col-xs-12 col-sm-12">
	 
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Bairro</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['bairro']; ?></div>
	  </div>
	</div>

</div> <!---Main Row Div--->
	
			</div>
			<div class="tab-pane" id="academic">
				

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Academic Details	<div class="pull-right">
			<a id="update-data" class="btn-sm btn btn-primary text-warning" href="edita.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><i class="fa fa-pencil-square-o"></i>Edit</a>		</div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<div class="col-md-4 col-xs-4 edusec-profile-label edusecArLangCss">Classe</div>
	<div class="col-md-8 col-xs-8 edusec-profile-text"><?php echo $res_1['curso']; ?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<div class="col-md-4 col-xs-4 edusec-profile-label edusecArLangCss">Turma</div>
	<div class="col-md-8 col-xs-8 edusec-profile-text"><?php echo $res_1['turma']; ?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<div class="col-md-4 col-xs-4 edusec-profile-label edusecArLangCss">Turno</div>
	<div class="col-md-8 col-xs-8 edusec-profile-text"><?php echo $res_1['turno']; ?></div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<div class="col-md-4 col-xs-4 edusec-profile-label edusecArLangCss">Cuidado Especial</div>
	<div class="col-md-8 col-xs-8 edusec-profile-text"><?php echo $res_1['atendimento_especial']; ?></div>
  </div>
</div>
			</div>
			<div class="tab-pane" id="guardians">
				
<div class="row">
  <div class="col-xs-12 col-md-12 col-lg-12">
	<h2 class="page-header">
	<i class="fa fa-info-circle"></i> Encarregados de educacao	<div class="pull-right"></div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="row">

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Nome da mãe</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['mae']; ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Telefone da mãe</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['numero_mae']; ?></div>
	  </div>
	</div>

	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Nome do Pai</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['pai']; ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Telefone do Pai</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['numero_pai']; ?></div>
	  </div>
	</div>	
</div>
	
</div>
				
<?php } ?>
<?php } ?>
		 	<div class="tab-pane" id="fees">
				<!-----Start current batch fees details----->

<div class="row">
  <div class="col-xs-12">
	<h4 class="edusec-border-bottom-warning page-header edusec-profile-title-1">	
		<i class="fa fa-inr"></i> Detalhes das taxas atuais	</h4>
  </div><!-- /.col -->
</div>

<div class="box box-solid">
    <div class="box-body table-responsive no-padding">
<div id="w0" class="grid-view">

	<table class="table table-striped table-bordered">
		
		<thead>
	
<tr>
	<th>Nº da cobrança</th>
	<th>Vencimento</th>
	<th>Valor</th>
	<th>Status</th>
	<th>Data do pagamento</th>
	<th>Forma de pagamento</th>
	
</tr>
 
</thead>
<?php
$id = $_GET['q'];
$sql_5 = mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = '$id'");
  while($res_1 = mysqli_fetch_array($sql_5)){
?>  
<tbody>

<tr data-key="3">
	<td><?php echo $res_1['code']; ?></td>
	<td><?php echo $res_1['vencimento']; ?></td>
	<td>R$ <?php echo number_format($res_1['valor'],2); ?></td>
	<td><?php echo $res_1['status']; ?></td>
	<td><?php echo $res_1['data_pagamento']; ?></td>
	<td><?php echo $res_1['metodo_pagamento']; ?></td>
	
</tr>

</tbody>
 <?php } ?>
</table>

</div>    </div>
  </div>
<!-----End current batch fees details----->

<!-----Start student payment history block----->
<!-----End student payment history block----->
	
			</div>

				<div class="tab-pane" id="histo">
				<!-----Start current batch fees details----->

<div class="row">
  <div class="col-xs-12">
	<h4 class="edusec-border-bottom-warning page-header edusec-profile-title-1">	
		<i class="fa fa-inr"></i> Detalhes das taxas atuais	</h4>
  </div><!-- /.col -->
</div>

<div class="box box-solid">
    <div class="box-body table-responsive no-padding">
<div id="w0" class="grid-view">

	<table class="table table-striped table-bordered">
		
		<thead>
	
<tr>
	<th>Nº da cobrança</th>
	<th>Vencimento</th>
	<th>Vaaalor</th>
	<th>Status</th>
	<th>Data do pagamento</th>
	<th>Forma de pagamento</th>
	
</tr>
 
</thead>
<?php
$id = $_GET['q'];
$sql_5 = mysqli_query($conexao,"SELECT * FROM mensalidades WHERE matricula = '$id'");
  while($res_1 = mysqli_fetch_array($sql_5)){
?>  
<tbody>

<tr data-key="3">
	<td><?php echo $res_1['code']; ?></td>
	<td><?php echo $res_1['vencimento']; ?></td>
	<td>R$ <?php echo number_format($res_1['valor'],2); ?></td>
	<td><?php echo $res_1['status']; ?></td>
	<td><?php echo $res_1['data_pagamento']; ?></td>
	<td><?php echo $res_1['metodo_pagamento']; ?></td>
	
</tr>

</tbody>
 <?php } ?>
</table>

</div>    </div>
  </div>
<!-----End current batch fees details----->

<!-----Start student payment history block----->
<!-----End student payment history block----->
	
			</div>
				</div>
	</div>
     </div> <!---End Row Div--->
</section>

<!--  POP UP Window for Photo Upload/Update -->
<div class="modal fade col-xs-12 col-lg-12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="photoup">
  <div class="modal-dialog">
    <div class="modal-content row">
    </div>
  </div>
</div>



<!--  POP UP Window for Guardian -->

<div id="guardModal" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3>Update Guardian</h3>
</div>
<div class="modal-body">

</div>

</div>
</div>
</div><script>
/***
  * Start Update Gardian Jquery
***/
function updateGuard(stu_guard_id, sid, tab) {
	$.ajax({
	  type:'GET',
	  url:'css/index.php?r=student%2Fstu-master%2Fupdate',
	  data: { stu_guard_id : stu_guard_id, sid : sid, tab : tab },
	  success: function(data)
		   {
		       $(".modal-content").addClass("row");
		       $('.modal-body').html(data);
		       $('#guardModal').modal();

		   }
	});
}

</script>
    </section>

    <?php require "footer.php" ?>

</aside>


	
      </div>
    <script src="css/assets/23c7ca7f/js/bootstrap-switch.js"></script>
<script src="css/assets/cfc8ec80/yii.validation.js"></script>
<script src="css/assets/cfc8ec80/yii.activeForm.js"></script>
<script src="css/assets/cfc8ec80/yii.gridView.js"></script>
<script src="css/assets/15981d7d/jquery.pjax.js"></script>
<script type="text/javascript">(function($) {
      fakewaffle.responsiveTabs(['xs', 'sm']);
  })(jQuery);</script>
<script type="text/javascript">jQuery(document).ready(function () {
;jQuery('input:radio[name="is_emg_contact"]').bootstrapSwitch({"onSwitchChange":function(event, state) {
	var st_id = this.value;
	var sid = $( this ).attr( "sid" );
	var guard_id = $( this ).attr( "guard_id" );
	$.ajax({
		type: "POST",
		url: "css/index.php?r=student%2Fstu-master%2Femg-change-status",
		data: { sid: sid, guard_id: guard_id },
		success: function(result){
			//window.location = 'index';
		}
	});
},"animate":true});
jQuery('#stu-docs-form').yiiActiveForm([{"id":"studocs-stu_docs_category_id_temp-1","name":"stu_docs_category_id_temp[1]","container":".field-studocs-stu_docs_category_id_temp-1","input":"#studocs-stu_docs_category_id_temp-1","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Category must be a string.","max":100,"tooLong":"Category should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_category_id-1","name":"stu_docs_category_id[1]","container":".field-studocs-stu_docs_category_id-1","input":"#studocs-stu_docs_category_id-1","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_details-1","name":"stu_docs_details[1]","container":".field-studocs-stu_docs_details-1","input":"#studocs-stu_docs_details-1","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Document Details must be a string.","max":100,"tooLong":"Document Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_stu_master_id","name":"stu_docs_stu_master_id","container":".field-studocs-stu_docs_stu_master_id","input":"#studocs-stu_docs_stu_master_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_path-1","name":"stu_docs_path[1]","container":".field-studocs-stu_docs_path-1","input":"#studocs-stu_docs_path-1","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["jpg","png","pdf","txt","jpeg","doc","docx"],"wrongExtension":"Only files with these extensions are allowed: jpg, png, pdf, txt, jpeg, doc, docx.","maxFiles":1,"tooMany":"You can upload at most 1 file."});}},{"id":"studocs-stu_docs_category_id_temp-2","name":"stu_docs_category_id_temp[2]","container":".field-studocs-stu_docs_category_id_temp-2","input":"#studocs-stu_docs_category_id_temp-2","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Category must be a string.","max":100,"tooLong":"Category should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_category_id-2","name":"stu_docs_category_id[2]","container":".field-studocs-stu_docs_category_id-2","input":"#studocs-stu_docs_category_id-2","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_details-2","name":"stu_docs_details[2]","container":".field-studocs-stu_docs_details-2","input":"#studocs-stu_docs_details-2","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Document Details must be a string.","max":100,"tooLong":"Document Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_stu_master_id","name":"stu_docs_stu_master_id","container":".field-studocs-stu_docs_stu_master_id","input":"#studocs-stu_docs_stu_master_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_path-2","name":"stu_docs_path[2]","container":".field-studocs-stu_docs_path-2","input":"#studocs-stu_docs_path-2","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["jpg","png","pdf","txt","jpeg","doc","docx"],"wrongExtension":"Only files with these extensions are allowed: jpg, png, pdf, txt, jpeg, doc, docx.","maxFiles":1,"tooMany":"You can upload at most 1 file."});}},{"id":"studocs-stu_docs_category_id_temp-3","name":"stu_docs_category_id_temp[3]","container":".field-studocs-stu_docs_category_id_temp-3","input":"#studocs-stu_docs_category_id_temp-3","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Category must be a string.","max":100,"tooLong":"Category should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_category_id-3","name":"stu_docs_category_id[3]","container":".field-studocs-stu_docs_category_id-3","input":"#studocs-stu_docs_category_id-3","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_details-3","name":"stu_docs_details[3]","container":".field-studocs-stu_docs_details-3","input":"#studocs-stu_docs_details-3","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Document Details must be a string.","max":100,"tooLong":"Document Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_stu_master_id","name":"stu_docs_stu_master_id","container":".field-studocs-stu_docs_stu_master_id","input":"#studocs-stu_docs_stu_master_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_path-3","name":"stu_docs_path[3]","container":".field-studocs-stu_docs_path-3","input":"#studocs-stu_docs_path-3","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["jpg","png","pdf","txt","jpeg","doc","docx"],"wrongExtension":"Only files with these extensions are allowed: jpg, png, pdf, txt, jpeg, doc, docx.","maxFiles":1,"tooMany":"You can upload at most 1 file."});}},{"id":"studocs-stu_docs_category_id_temp-4","name":"stu_docs_category_id_temp[4]","container":".field-studocs-stu_docs_category_id_temp-4","input":"#studocs-stu_docs_category_id_temp-4","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Category must be a string.","max":100,"tooLong":"Category should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_category_id-4","name":"stu_docs_category_id[4]","container":".field-studocs-stu_docs_category_id-4","input":"#studocs-stu_docs_category_id-4","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_details-4","name":"stu_docs_details[4]","container":".field-studocs-stu_docs_details-4","input":"#studocs-stu_docs_details-4","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Document Details must be a string.","max":100,"tooLong":"Document Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_stu_master_id","name":"stu_docs_stu_master_id","container":".field-studocs-stu_docs_stu_master_id","input":"#studocs-stu_docs_stu_master_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_path-4","name":"stu_docs_path[4]","container":".field-studocs-stu_docs_path-4","input":"#studocs-stu_docs_path-4","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["jpg","png","pdf","txt","jpeg","doc","docx"],"wrongExtension":"Only files with these extensions are allowed: jpg, png, pdf, txt, jpeg, doc, docx.","maxFiles":1,"tooMany":"You can upload at most 1 file."});}},{"id":"studocs-stu_docs_category_id_temp-6","name":"stu_docs_category_id_temp[6]","container":".field-studocs-stu_docs_category_id_temp-6","input":"#studocs-stu_docs_category_id_temp-6","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Category must be a string.","max":100,"tooLong":"Category should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_category_id-6","name":"stu_docs_category_id[6]","container":".field-studocs-stu_docs_category_id-6","input":"#studocs-stu_docs_category_id-6","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Category cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Category must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_details-6","name":"stu_docs_details[6]","container":".field-studocs-stu_docs_details-6","input":"#studocs-stu_docs_details-6","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Document Details must be a string.","max":100,"tooLong":"Document Details should contain at most 100 characters.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_stu_master_id","name":"stu_docs_stu_master_id","container":".field-studocs-stu_docs_stu_master_id","input":"#studocs-stu_docs_stu_master_id","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Student cannot be blank."});yii.validation.number(value, messages, {"pattern":/^\s*[+-]?\d+\s*$/,"message":"Student must be an integer.","skipOnEmpty":1});}},{"id":"studocs-stu_docs_path-6","name":"stu_docs_path[6]","container":".field-studocs-stu_docs_path-6","input":"#studocs-stu_docs_path-6","validate":function (attribute, value, messages, deferred, $form) {yii.validation.file(attribute, messages, {"message":"File upload failed.","skipOnEmpty":true,"mimeTypes":[],"wrongMimeType":"Only files with these MIME types are allowed: .","extensions":["jpg","png","pdf","txt","jpeg","doc","docx"],"wrongExtension":"Only files with these extensions are allowed: jpg, png, pdf, txt, jpeg, doc, docx.","maxFiles":1,"tooMany":"You can upload at most 1 file."});}}], []);
jQuery('#w0').yiiGridView({"filterUrl":"/edusec%204.2.6%20is%20released%20(security%20fix)/EduSec-EduSec-e90fa70/index.php?r=student%2Fstu-master%2Fview&id=15","filterSelector":"#w0-filters input, #w0-filters select"});
jQuery('#w2').yiiGridView({"filterUrl":"/edusec%204.2.6%20is%20released%20(security%20fix)/EduSec-EduSec-e90fa70/index.php?r=student%2Fstu-master%2Fview&id=15","filterSelector":"#w2-filters input, #w2-filters select"});
jQuery(document).pjax("#w1 a", "#w1", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
jQuery(document).on('submit', "#w1 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w1', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
jQuery('#guardModal').modal({"show":false});
});</script>    </body>
    </html>
    