<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
    
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning"><?php echo mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM mural_coordenacao")); ?></span>
    </a>
    <ul class="dropdown-menu" style="">

        <ul>
   <?php
   $sql_1 = mysqli_query($conexao,"SELECT * FROM mural_coordenacao ORDER BY id DESC");
   if($sql_1 == ''){
       echo "No momento não existe novidades";
   }else{
       while($res_1 = mysqli_fetch_array($sql_1)){
   ?>
    <li><h7><?php echo $res_1['titulo']; ?></h7></li>
    <?php }} ?>
   </ul>
	    </ul>
</li>

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>admin <i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu" style="margin-right:10px">
            <!-- User image -->
            <li class="user-header bg-light-blue">
                <img src="img/data/emp_images/no-photo.png" class="img-circle" alt="User Image"/>

                <p style="font-size: 18px;"><?php echo @$nome; ?></p>
            </li>
            <!-- Menu Body -->
            <li class="user-body" style="display:none">
                <div class="col-xs-6 no-padding">
		    <a class="btn btn-default btn-flat" href="/edusec%204.2.6%20is%20released%20(security%20fix)/EduSec-EduSec-e90fa70/index.php?StuMasterSearch%5Bstu_unique_id%5D=&amp;StuMasterSearch%5Bstu_first_name%5D=&amp;StuMasterSearch%5Bstu_last_name%5D=&amp;StuMasterSearch%5Bstu_master_section_id%5D=&amp;StuMasterSearch%5Bstu_master_batch_id%5D=&amp;StuMasterSearch%5Bstu_master_course_id%5D=1&amp;r=student%2Fstu-master%2Findex" style="font-size:13px">View Profile</a>                </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
		    <a class="btn btn-default btn-flat" href="/edusec 4.2.6 is released (security fix)/EduSec-EduSec-e90fa70/index.php?r=user%2Fchange" style="font-size:12px">Change Password</a>                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="../config.php?pg=sair" data-method="post" style="font-size:12px">Sign out</a>            
                        </div>
            </li>
        </ul>
    </li><!-- User Account: style can be found in dropdown.less -->

</ul>
</div>
</nav>
</header>

      <div class="wrapper row-offcanvas row-offcanvas-left">

           <aside class="left-side sidebar-offcanvas">

    <section class="sidebar">

                    <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/data/emp_images/no-photo.png" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p> Bem Vindo, admin</p>
                    <p><?php echo @$nome; ?></p>
                </div>
            </div>
</body>
</html>