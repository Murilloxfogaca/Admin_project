<?php 
	session_start();

	if(isset($_GET["enviar"])) 
	 {
	 	include('funcoes/conexao.php');

	 	$query_select="SELECT * FROM `user` where funcao='admin'";
		$sql_select=mysqli_query($connect,$query_select);

		if(!$sql_select){
			echo "FALHA AO CONSULTAR A TABELA";
			exit;
		}
                     
		if(mysqli_num_rows($sql_select) > 0)
		{
		   while($array_select=mysqli_fetch_array($sql_select))
			{
				$info['mail']=$array_select["mail"];
				$info['senha']=$array_select["senha"];	
	 			if (($_GET["login"]==$info['mail']) && ($_GET["senha"]==$info['senha'])){
	 				unset($_SESSION['error']);
	 				$_SESSION['acesso'] = true;
	 				header('location:index.php');
	 			}
		 	}
		 }
		$_SESSION['error'] = true; 
		//header('location:login.php');
	}	 

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<?php require_once('funcoes/meta.php');?>
		<?php require_once('funcoes/entrada.php'); 
		SomenteLetras();SomenteNumero();?>
	</head>

	<body id='body_inicial'>

		<?php
			if (isset($_SESSION['error'])) {
				echo "<h3 id='titulo'>Tente Novamente</h3>";
			}

			else {
				echo "<h3 id='titulo'>Faça o login <br> para continuar:</h3>";	
			}
		?>

		<form id="login" method="_GET" >

				<input type="text" autocomplete="off" required placeholder="E-mail" onkeypress='return SomenteLetras(event)' name="login">
				<input type="password" placeholder="Senha" min-lenght='5' name="senha" required autocomplete="off"><br>

			<input type="submit" name="enviar" value="enviar">
		</form>

	</body>
</html>