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
			<form  method="get" action="funcoes/Insira.php" id="form_congelado" onsubmit=''>	
				<div style="display:none;">
					<input name="locid" value="hNMyZi/form4" type="hidden">
					<input name="EParam" value="AT1kKIiyxDwjkjrANYj714njqh0+izcTL/APlXtqbd8ocRpK1Qq3rC4oG3h90KW7" type="hidden">
					<input name="ElapsedTime" id="ElapsedTime" value="0" type="hidden">
					<input name="Referrer" id="Referrer" value="" type="hidden">
					<input name="subject_line" id="subject_line" autocomplete="off" type="text"><label for="subject_line">subject_line</label><br>
				</div>

				<!-- BEGIN_ITEMS -->
				<div class="form_table">
				<div class="segment_header" style="background:blue;width:auto;text-align:Center;"><h1 style="font-size:30px;font-family:'Open Sans',sans-serif;padding:2em 1em;">Insira</h1></div>
				</div><div class="clear"></div>



				<div id="q2" class="q required">
				<label class="question top_question" for="nome" > Nome :&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label><br>

				<input name="nome" onkeypress='return SomenteLetras(event)' class="text_field" id="nome" placeholder="Nome" size="50" maxlength="255" value="" required minlength="2"  type="text">
				</div>

				<div id="q2" class="q required">
				<label class="question top_question" for="sobrenome" > sobrenome:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label><br>

				<input name="sobrenome" onkeypress='return SomenteLetras(event)' class="text_field" id="sobrenome" placeholder="sobrenome" size="50" maxlength="255" value="" required type="text">
				</div>

				<div id="q2" class="q required">
				<label class="question top_question" for="mail" > E-mail:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label><br>

				<input name="mail" onkeypress='return SomenteLetras(event)' class="text_field" id="mail" placeholder="exemplo@exemplo.com" size="50" maxlength="255" value="" required type="email">
				</div>

				<div id="q2" class="q required">
				<label class="question top_question" for="senha" > Senha:&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label><br>

				<input name="senha"  class="text_field" id="senha" placeholder="Senha" size="50" maxlength="20" value="" required type="password">
				</div>

				<input name="Submit" class="submit_button"  value="enviar" id="enviar" name="enviar" type="submit">
				</div>
				</form>
			</div>
			
	<div id='exibir'><?php exibirUser();?></div>
	<div id="div_ad" style="float: left;"></div>
			
</div>
</body>
</html>