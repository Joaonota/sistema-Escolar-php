<?php require "../config.php"; ?> 
        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Info do Professor</title>

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



</aside>
	<?php if(@$_GET['s'] == 'professor'){ ?>
	<?php

$q = $_GET['q'];

$sql_1 = mysqli_query($conexao,"SELECT * FROM professores WHERE code = '$q'");
  while($res_1 = mysqli_fetch_array($sql_1)){
?>
        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="css/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
<li><a href="css/index.php?r=student%2Fdefault%2Findex">Professor</a></li>
<li><a href="css/index.php?r=student%2Fstu-master%2Findex">Todos professores</a></li>
<li class="active"><?php echo $res_1['nome']; ?></li>
</ul>

    <section class="content">
        
<section class="content-header">
<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
		<i class="fa fa-user"></i>  Perfil do Professor		
		<div class="pull-right">
		<a id="export-pdf" class="btn-sm btn btn-warning" href="pdfProf.php?q=<?php echo $res_1['code']; ?>&s=profpdf" target="_blank"><i class="fa fa-file-pdf-o"></i>  PDF</a>				
	</div>
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
				<th>Codigo Do Professor</th>
				<td><?php echo $res_1['code']; ?></td>
			</tr>
			<tr>
				<th>Nome</th>
				<td><?php echo $res_1['nome']; ?></td>
			</tr>
			<tr>
				<th>Sexo</th>
				<td><?php echo $res_1['sexo']; ?></td>
			</tr>
			
			<tr>
				<th>Numero de Telefone</th>
				<td><?php echo $res_1['numero']; ?></td>
			</tr>
			<tr>
				<th>Ano de Experiencia</th>
				<td><?php echo $res_1['experiencia']; ?></td>
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
			<li class="active" id = "personal-tab">
				<a href="#personal" data-toggle="tab"><i class="fa fa-street-view"></i> Pessoal</a>
			</li>
			<li id = "academic-tab">
				<a href="#academic" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Academico</a>
			</li>
			</ul>
		 <div id='content' class="tab-content responsive">
			<div class="tab-pane active" id="personal">
				

<div class="row">
  <div class="col-xs-12">
	<h2 class="page-header">	
	<i class="fa fa-info-circle"></i> Detalhes Pessoais
		<div class="pull-right">
			<a id="update-data" class="btn btn-primary btn-sm" href="editaProf.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><i class="fa fa-pencil-square-o"></i> Editar</a>		
		</div>
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
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Gênero</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['sexo']; ?></div>
	  </div>
	</div>


	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Nacionalidade</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['nacionalidade']; ?></div>
	  </div>
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
	<i class="fa fa-info-circle"></i> Detalhes Academicos
		<div class="pull-right">
			<a id="update-data" class="btn btn-primary btn-sm" href="edita.php?pg=todos&func=edita&code=<?php echo $res_1['code']; ?>"><i class="fa fa-pencil-square-o"></i> Edit</a>		
		</div>
	</h2>
  </div><!-- /.col -->
</div>

<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding edusec-bg-row">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">instituto</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['instituto']; ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">licenciatura</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['licenciatura']; ?></div>
	  </div>
	</div>


	<div class="col-md-12 col-xs-12 col-sm-12">
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">mestrado</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['mestrado']; ?></div>
	  </div>
	  <div class="col-lg-6 col-sm-6 col-xs-12 no-padding">
		<div class="col-lg-6 col-xs-6 edusec-profile-label edusecArLangCss">Doutoramento</div>
		<div class="col-lg-6 col-xs-6 edusec-profile-text"><?php echo $res_1['doutorado']; ?></div>
	  </div>
	</div>
			</div>

			
				
<?php } ?>
<?php } ?>
		 	
     </div> <!---End Row Div--->
</section>

<!--  POP UP Window for Guardian -->

    </section>

    <?php require "footer.php" ?>

</aside>


	
      </div>
       </body>
    </html>
    