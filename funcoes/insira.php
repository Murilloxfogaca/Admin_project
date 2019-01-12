<?php

	include('session.php');	

	if(isset($_GET["mail"])&&isset($_GET["nome"])){insirir_user();};		
	if(isset($_GET["action"])){insirir_funcao();};		




		function insirir_user(){

			include("conexao.php");

			$nome = $_GET["nome"];
			$sobrenome = $_GET["sobrenome"];
			$mail = $_GET["mail"];
			$senha = $_GET["senha"];

			/*if ($escolha=1) {$escolha="Masculino";}
			elseif($escolha=0) {$escolha="Feminino";}
			else{$escolha="Outros";}*/

			//echo "$escolha";

			$sql_inserir='SELECT * FROM `user` WHERE mail=$mail';

			$sqlteste=mysqli_query($connect,$sql_inserir);


			if($sqlteste)
				{
				echo"<script type=\"text/javascript\">alert('Atenção! já cadastrad0. ');</script>";
				}

			else
				{

				$query_inserir="INSERT INTO `user`(`nome`,`sobrenome`,`mail`,`senha`,`funcao`) VALUES ('$nome','$sobrenome','$mail','$senha','')";

				$sql_inserir=mysqli_query($connect,$query_inserir);

					if ($sql_inserir) {

					 	header("location:/admin_user/menu.php");

					 } 

					 else{

					 	echo"<script type=\"text/javascript\">alert('Tente mais tarde. ');</script>";
					 	header("location:/admin_user/User.php");

					 }

					}

				};


		function insirir_funcao(){

			include("conexao.php");

			$mail = $_GET["id"];
			$action = utf8_encode($_GET["action"]);

			if($action==="Admin"){$query_inserir="UPDATE user SET funcao='Admin' WHERE id=".$mail;}
			elseif ($action==="Editor") {$query_inserir="UPDATE user SET funcao='Editor' WHERE id=".$mail;}
			else{$query_inserir="UPDATE user SET funcao='Nenhum' WHERE id=".$mail;}


			$sql_inserir=mysqli_query($connect,$query_inserir);

				if ($sql_inserir) {		
					echo"<script type=\"text/javascript\">alert('função dada com sucesso. ');</script>";
					header("location:/admin_user/funcao.php");
					} 

					else{

					 	echo"<script type=\"text/javascript\">alert('Tente mais tarde. ');</script>";
					 	
					 }


				};




?>