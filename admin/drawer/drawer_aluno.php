 <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
	<li class="treeview active">
	<a href=""><i class="fa fa-users"></i> <span>Estudante</span> <i class="fa fa-angle-left pull-right"></i></a>        <ul class="treeview-menu">

	            <li>
		<a  value="bloco"   href="addestudante.php?pg=cadastra"><i class="fa fa-angle-double-right"></i> Cadastrar estudante</a>	    </li>
	 

		    <li>
		<a href="allStudent.php?tipo=alunos&s=<?php echo base64_encode("SELECT * FROM estudantes WHERE nome != ''"); ?>"><i class="fa fa-angle-double-right"></i> Todos estudantes</a>	    </li>
	 
	
        </ul>
</li>
        </ul>