 <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="navbar-link">
                    <i class="fa fa-angle-down"></i> <span class="text-info">Menu</span>
                </a>
            </li>
	<li class="treeview active">
	<a href=""><i class="fa fa-users"></i> <span>Professor</span> <i class="fa fa-angle-left pull-right"></i></a>        <ul class="treeview-menu">

	            <li>
		<a  value="bloco"   href="addprof.php?pg=cadastra"><i class="fa fa-angle-double-right"></i> Cadastrar Professor</a>	    </li>
	 

		    <li>
		<a href="allProf.php?tipo=professores&s=<?php echo base64_encode("SELECT p.status,p.code,p.nome, c.curso from disciplinas as d INNER JOIN professores AS p on d.professores_id = p.id INNER JOIN cursos as c on d.cursos_id = c.id"); ?>"></i> Todos Professores</a>	    </li>
	 
	
        </ul>
</li>
        </ul>