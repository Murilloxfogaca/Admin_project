<?php

	include('session.php');

		function deletar_user() {
			include('conexao.php');
			$id_user = $_GET['id_user'];
			var_dump($id_user);
			$query="DELETE FROM `user` WHERE id=".utf8_encode($id_user);
			echo $query;  
			  $sql=mysqli_query($connect,$query);

			  if($sql){
				  header("location:/admin_user/user.php");
			  }

			  else
			  {
				echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";
				exit;
			  }
			};

if(isset($_GET['id_user'])){deletar_user();}