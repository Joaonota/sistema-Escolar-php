        <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        

    <link rel="shortcut icon" href="images/rudrasoftech_favicon.png" type="image/x-icon" />
   
        <title>Admin Dashboard</title>
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
                <?php require "../config.php"; ?> 
<header class="main-header header">

<?php require "bar.php" ?>
<!-- Notifications: style can be found in dropdown.less -->
<?php require "notifica.php" ?>
        
       <?php require "drawer/drawer_menu.php" ?>
  <!-- sidebar-menu. -- End -->

    </section>

</aside>

        <aside class="right-side">

        <ul class="breadcrumb"><li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
<li class="active">Painel Do Admin</li>
</ul>

    <section class="content">
        <script>
$(document).ready(function(){
    $('.tab-content').slimScroll({
        height: '300px'
    });
});
$(document).ready(function(){
    $('#coursList').slimScroll({
        height: '250px'
    });
});
</script>
<style>
.tab-content {
   padding:15px;
}
.box .box-body .fc-widget-header {
    background: none;
}
.popover{
    max-width:450px;   
}
</style>



<div id="NoticeModal" class="fade modal" role="dialog" tabindex="-1">
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4><i class="fa fa-eye"></i> View Notice Details</h4>
</div>
<div class="modal-body">
<div id="NoticeModalContent"></div>
</div>

</div>
</div>
</div>
                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
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
     echo "<script language='javascript'>window.location=infoProf.php?matricula=$code_prof';</script>";  
      }
       }else{
     echo "<script language='javascript'>window.alert('Não foi encontrado nenhum resultado, verifique a informação digitada!');</script>";  
 }}}}?>
 <form class="form-inline"  name="" method="post" action="" enctype="multipart/form-data">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"></label>
    <input type="text" name="key" class="form-control" id="inputPassword2">
  </div>
  <button type="submit" name="search" value="" class="btn btn-primary mb-2">Buscar</button>
</form>
    </div>
    
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                     <h3>Estudantes</h3>
                                    <h4>Activos:<?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM estudantes WHERE status = 'Ativo'")); ?></h4>
                                    <h4>Inactivo:<?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM estudantes WHERE status = 'Inativo'")); ?></h4>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                <a class="small-box-footer" href="estudante.php?pg=todos" >Mais Informações <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                      <h3>Professores</h3>
                                    <h4>Activos:<?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM professores WHERE status = 'Ativo'")); ?></h4>
                                    <h4>Inactivo:<?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM professores WHERE status = 'Inativo'")); ?></h4>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
        <a class="small-box-footer" href="professorInfo.php?pg=todos" >Mais Informações <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                      <h3>Classes</h3>
                                      <br>
                                    <h4>Total de Classe:<?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM cursos")); ?></h4>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
        <a class="small-box-footer" href="cursoedisciplina.php?pg=cursoedisciplinas" >Mais Informações <i class="fa fa-arrow-circle-right"></i></a>                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->

          <!-- Calendar -->
                            <div class="box box-info">
                              <div class="box box-primary" wfd-id="7">
                                <div class="box-header with-border" wfd-id="38">
                                    <h3 class="box-title "><i class="fa fa-book"></i> Classes</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body" wfd-id="8">
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;" wfd-id="9"><ul class="todo-list" id="coursList" style="overflow: hidden; width: auto; height: 250px;" wfd-id="12">
                                      <?php
$sql_1 = mysqli_query($conexao,"SELECT * FROM cursos");
 if(mysqli_num_rows($sql_1) == ''){
     echo "<br><br>No momento não existe nenhum curso cadastrado!<br><br>";
 }else{
?>
<?php while($res_1 = mysqli_fetch_array($sql_1)){ ?> 


                                                     <li wfd-id="33">
                                            <span class="handle" wfd-id="37">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <span class="text" wfd-id="36"><?php echo $curso = $res_1['curso']; ?></span>
                                                          <span class="notification-container pull-right text-teal" title="6 Students" wfd-id="34"><i class="fa fa-users"></i><span class="label label-info notification-counter" wfd-id="35">1</span>
                                                        </span>
                                  
 <?php } ?>
  <?php } ?>

                                                 </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 250px;" wfd-id="11"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;" wfd-id="10"></div></div>
                                </div><!-- /.box-body -->
                            </div>
                                <div class="box-header with-border">
                                    <h3 class="box-title "><i class="fa fa-calendar"></i> Calendario</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <!--The calendar -->

                              <div id="w0" class="fullcalendar" language="pt">
                                
                              </div>

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->

    </section>

    <?php require "footer.php" ?>

</aside>



    </div>

    <script src="css/assets/30fa3351/moment.js"></script>
<script src="css/assets/a986a570/jquery-ui.js"></script>
<script src="css/assets/fd6208f9/fullcalendar.js"></script>
<script src="css/assets/fd6208f9/gcal.js"></script>
<script src="css/assets/fd6208f9/lang-all.js"></script>
<script src="css/assets/fd6208f9/lang/en.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function () {
$(function() {
  $('.noticeModalLink').click(function() {
    $('#NoticeModal').modal('show')
    .find('#NoticeModalContent')
    .load($(this).attr('data-value'));
  });
});
$('body').on('click', function (e) {
    $('[data-toggle="popover"]').each(function () {
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide'); 
        }
    });
});
jQuery('#NoticeModal').modal({"show":false});
$('#w0').fullCalendar({"fixedWeekCount":false,"weekNumbers":true,"editable":true,"eventLimit":true,"eventLimitText":"more Events","header":{"center":"title","left":"prev,next today","right":"month,agendaWeek,agendaDay"},"eventClick":   function(event, jsEvent, view) {
        $('.fc-event').on('click', function (e) {
      $('.fc-event').not(this).popover('hide');
        });
    },"eventRender":    function (event, element) {
      var start_time = moment(event.start).format("DD-MM-YYYY, h:mm:ss a");
          var end_time = moment(event.end).format("DD-MM-YYYY, h:mm:ss a");

      element.clickover({
                title: event.title,
                placement: 'top',
                html: true,
          global_close: true,
          container: 'body',
                content: "<table class='table'><tr><th> Event Detail : </th><td>" + event.description + " </td></tr><tr><th> Event Type : </th><td>" + event.event_type + "</td></tr><tr><th> Start Time : </t><td>" + start_time + "</td></tr><tr><th> End Time : </th><td>" + end_time + "</td></tr></table>"
            });
               },"contentHeight":380,"timeFormat":"hh(:mm) A","events":"index.php?r=dashboard%2Fevents%2Fview-events"});
});</script>    </body>
    </html>
    