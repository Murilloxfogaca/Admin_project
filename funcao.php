<?php 
	include('funcoes/session.php');
	require_once('funcoes/conexao.php');
	include_once('funcoes/exibir.php')?> 
<!DOCTYPE html>
<html>
<head>
	<title>Usuário</title>
	<?php require_once('funcoes/meta.php');?>
		<?php require_once('funcoes/entrada.php'); SomenteLetras();SomenteNumero();?>


</head>
<body>
	<?php require_once('funcoes/header.php');?>
<div style="width: 100%; display: block;">
	<div id="div_ad" style="float: left;">
			
	<div id='exibir'><?php exibirfuncao();?></div>
	<div id="div_ad" style="float: left;"></div>
			
</div>
</body>
</html>