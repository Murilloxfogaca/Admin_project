<?php

	session_start();

	include('session.php');	

	include('conexao.php');
 
  	unset($_SESSION['acesso']);

	header('location:/admin_user');

?>