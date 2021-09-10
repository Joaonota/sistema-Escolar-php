<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/v.css">
<link rel="shortcut icon" href="img/mine.png" />
<!--<?php require "conexao.php"; /*require "operacional.php";*/ ; ?>-->

</head>
<body>
<div id="logo">
 <img src="img/mine.png" />
</div><!-- logo -->

<div id="caixa-login" >

<?php if(isset($_POST['button'])){

$code = $_POST['code'];
$password = $_POST['password'];

if($code == ''){
	echo "<h2>Por favor, digite o número do cartão ou seu código de acesso!</h2>";
}else if($password == ''){
	echo "<h2>Por favor, digite sua senha!</h2>";
}else{
	
$sql_1 = mysqli_query($conexao,"SELECT * FROM acesso_ao_sistema WHERE code = '$code' AND senha = '$password'");
$conta_sql_1 = mysqli_num_rows($sql_1);

if($conta_sql_1 == ''){
	echo "<h2>O código de acesso ou a senha não corresponde!</h2>";
}else{
	
	while($res_1 = mysqli_fetch_array($sql_1)){
		
		$status = $res_1['status'];
		$code = $res_1['code'];
		$senha = $res_1['senha'];
		$nome = $res_1['nome'];
		$painel = $res_1['painel'];
   
	if($status == 'Inativo'){
   		 echo "<h2>Você está inativo, por favor, digira-se a coordenação da escola para que seu acesso seja liberado!</h2>";
	}else{
		
		session_start();
		$_SESSION['code'] = $code;
		$_SESSION['nome'] = $nome;
		$_SESSION['password'] = $senha;
		$_SESSION['painel'] = $painel;
		
		if($painel == 'admin'){
			echo "<script language='javascript'>window.location='admin';</script>";
		}else if($painel == 'Aluno'){
			echo "<script language='javascript'>window.location='aluno';</script>";
		}else if($painel == 'professor'){
			echo "<script language='javascript'>window.location='professor';</script>";	
		}else if($painel == 'portaria'){
			echo "<script language='javascript'>window.location='portaria';</script>";	
		}else if($painel == 'tesoureiro'){
			echo "<script language='javascript'>window.location='tesouraria';</script>";			
		}else{
		
   		 echo "<h2>Seu acesso está correto, porém, não estamos conseguindo acessar o seu painel, por favor, digira-se a coordenação!</h2>";
		
	 }
	}
   }
  }
 }
}?>

<form name="form" method="post" action="" enctype="multipart/form-data">
		<table  >
			<tr>
				<td ><h1>Nº CODIGO DE ACESSO:</h1></td>
			</tr>
			<tr>
				<td><input class="form-control"  type="text" name="code"></td>
			</tr>
			<tr>
				<td><h1>SENHA:</h1></td>
			</tr>
			<tr>
				<td><input class="form-control" type="password" name="password"></td>
			</tr>
			<tr>
				<td><input style="width: 404px;" class="input" type="submit" name="button" value="Entrar"></td>
			</tr>
		</table>
		
	</form>

</div><!-- caixa_login -->
</body>
</html>