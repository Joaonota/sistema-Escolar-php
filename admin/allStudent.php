<?php require "../config.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <title>Todos os Estudantes</title>
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

      <?php require "drawer/drawer_aluno.php" ?>

      <!-- sidebar-menu. -- End -->

    </section>

  </aside>
  
  <aside class="right-side">

    <ul class="breadcrumb"><li><a href="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="estudante.php?pg=todos">Estudante</a></li>
      <li class="active">Todos estudantes</li>
    </ul>

    <section class="content">
      
      <div class="col-xs-12">
        <div class="col-lg-8 col-sm-8 col-xs-12 no-padding edusecArLangCss"><h3 class="box-title"><i class="fa fa-th-list"></i> Todos estudantes</h3></div>
        <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
         <div class="col-xs-4 left-padding">
           <a class="btn btn-block btn-success" href="addestudante.php?pg=cadastra">Cadastrar</a>		</div>
           <div class="col-xs-4 left-padding">
            <a class="btn btn-block btn-warning" href="allpdf.php?s=<?php echo $_GET['s'];?>" target="_blank">PDF</a>		</div>
          </div>
        </div>
        <?php if(@$_GET['tipo'] == 'alunos'){ ?>
          <?php if(isset($_POST['button'])){
            $tipo = $_POST['tipo'];
            $cursos_id = $_POST['cursos_id'];
            $turma_id = $_POST['turma_id'];
            $s = base64_encode("SELECT e.status,e.code,e.nome,c.curso,t.turma,e.mensalidade FROM estudantes AS e INNER JOIN cursos AS c ON e.cursos_id = c.id_curso
INNER JOIN turmas AS t on e.turma_id = t.id_turma  WHERE status = '$tipo' AND id_curso = '$cursos_id' AND turma_id = '$turma_id'");
            echo "<script language='javascript'>window.location='allstudent.php?tipo=alunos&s=$s';</script>";
          } ?>
          <div class="col-xs-12" style="padding-top: 10px;">
           <div class="box">
            <div class="box-body table-responsive">
             <div class="stu-master-index">
              <div id="w0">	    
                <div id="w1" class="grid-view">
                  <table name="button"  class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>
                          <a data-sort="stu_unique_id">Status</a>
                        </th>
                        <th>
                          <a  data-sort="stu_first_name">Codigo</a></th>
                          <th>
                            <a data-sort="stu_last_name">Nome</a>
                          </th>
                          <th>
                            <a data-sort="stu_master_section_id">Classe</a></th>
                            <th>
                            <a data-sort="stu_master_section_id">Turma</a></th>
                            <th>
                              <a  data-sort="stu_master_batch_id">Menssalidade</a>
                            </th>
                            
                            <form name="button" method="post" action="" enctype="multipart/form-data">
                              <tr id="button" class="filt1ers">
                                <td >
                                  <select name="tipo" class="form-control">
                                    <option value="Ativo">Alunos Ativos</option>
                                    <option value="Inativo">Alunos Inativos</option>
                                  </select>
                                </td>
                                <td><input disabled="disabled" type="text" class="form-control"  value=""></td>
                                <td><input disabled="disabled"type="text" class="form-control"   value=""></td>
                                
                                <td>
                                  <select name="cursos_id" class="form-control">
                                   <?php
                                   $sql_2 = mysqli_query($conexao,"SELECT * FROM cursos");
                                   while($res_2 = mysqli_fetch_assoc($sql_2)){
                                    ?>
                                    <option  value="<?php echo $res_2['id_curso']; ?>"><?php echo $res_2['curso']; ?></option>      
                                  <?php } ?>
                                </select>
                                
                              </td>
                              <td>
                                  <select name="turma_id" class="form-control">
                                   <?php
                                   $sql_2 = mysqli_query($conexao,"SELECT * FROM turmas");
                                   while($res_2 = mysqli_fetch_assoc($sql_2)){
                                    ?>
                                    <option  value="<?php echo $res_2['id_turma']; ?>"><?php echo $res_2['turma']; ?></option>      
                                  <?php } ?>
                                </select>
                                
                              </td>
                              <td>
                                <button type="submit" name="button" id="button" value="Filtrar" class="btn btn-info">Filtrar</button>
                              </td>
                            </thead>
                          </form>
                          <?php 
                          $s = base64_decode($_GET['s']);
                          $sql_1 = mysqli_query($conexao, $s);
                          if(mysqli_num_rows($sql_1) == ''){
                            echo "Não existe resultados para o filtro selecionado";
                          }else{
                            ?>
                            <tbody>
                             <?php while($res_1 = mysqli_fetch_assoc($sql_1)){ ?>
                              <tr data-key="17">
                                <td><?php echo $res_1['status']; ?></td>
                                <td><?php echo $res_1['code']; ?></a></td>
                                <td><?php echo $res_1['nome']; ?></td>
                                <td><?php echo $res_1['curso']; ?></td>
                                <td><?php echo $res_1['turma']; ?></td>
                                <td><?php echo $res_1['mensalidade']; ?></td>   
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>

                      </div>	
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>

          <?php require "footer.php" ?>

        </aside>

      </div>

    <?php } ?>
  <?php } ?>
  <script src="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/assets/cfc8ec80/yii.gridView.js"></script>
  <script src="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/assets/15981d7d/jquery.pjax.js"></script>
  <script type="text/javascript">jQuery(document).ready(function () {
    jQuery('#w1').yiiGridView({"filterUrl":"allstudent.php?tipo=alunos&s=$s","filterSelector":"#w1-filters input, #w1-filters select"});
    jQuery(document).pjax("#w0 a", "#w0", {"push":false,"replace":false,"timeout":1000,"scrollTo":false});
    jQuery(document).on('submit', "#w0 form[data-pjax]", function (event) {jQuery.pjax.submit(event, '#w0', {"push":false,"replace":false,"timeout":1000,"scrollTo":false});});
  });</script>  
</body>
</html>
