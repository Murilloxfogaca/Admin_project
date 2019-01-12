<?php
	session_start();
	if(isset($_SESSION['acesso'])){
			if(!$_SESSION['acesso']){
				header('location:login.php');
			}
		}
		else{
			header('location:login.php');
		}
	
?>
