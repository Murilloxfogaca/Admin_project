<?php
	include_once('funcoes/conexao.php');
	
	function exibirUser(){
		include('conexao.php');
		$query_select="SELECT * FROM user where user.id>0";
		$sql_select=mysqli_query($connect,$query_select);

		if(!$sql_select){
			echo "FALHA AO CONSULTAR A TABELA";
			exit;
			}
                     
		if(mysqli_num_rows($sql_select) > 0)
		{
		   while($array_select=mysqli_fetch_array($sql_select))
			{
				$id=$array_select["id"];
				$nome=$array_select["nome"];
				$sobrenome=$array_select["sobrenome"];
				$mail=$array_select["mail"];
				$senha=$array_select["senha"];
				
				 echo
				 "
				 <li id='infos'>
				 	<p id='titulo'>".utf8_encode($nome)." ".utf8_encode($sobrenome)."</p>
				 	<p id='titulo'>".utf8_encode($mail)."</p>
				 	<div class='items_button' style='text-align: center;'>
				 	<a style='display:none'  href='/prototipo/#editar.php?id=$id/'><button>Editar</button></a>
					<a href='/funcoes/deletar.php?id_user=$id'><button>Deletar</button></a>
				 	</div>
				 </li>";
					}
		}
	}

	function exibirfuncao(){
		include('conexao.php');
		$query_select="SELECT * FROM user where user.id>0";
		$sql_select=mysqli_query($connect,$query_select);

		if(!$sql_select){
			echo "FALHA AO CONSULTAR A TABELA";
			exit;
			}
                     
		if(mysqli_num_rows($sql_select) > 0)
		{
		   while($array_select=mysqli_fetch_array($sql_select))
			{
				$id=$array_select["id"];
				$nome=$array_select["nome"];
				$sobrenome=$array_select["sobrenome"];
				$mail=$array_select["mail"];
				$senha=$array_select["senha"];
				$funcao=$array_select["funcao"];
				
				if ($funcao=='Admin') {
					$selected1 = "selecionado";
					$selected2 = "none";
					$selected3 = "none";
				}
				elseif ($funcao=='Editor') {
					$selected1 = "none";
					$selected2 = "selecionado";
					$selected3 = "none";
				}
				else{
					$selected1 = "none";
					$selected2 = "none";			
					$selected3 = "selecionado";
				}

				
				 echo
				 "
				 <li id='infos'>
				 	<p id='titulo'>".utf8_encode($nome)." ".utf8_encode($sobrenome)."</p>
				 	<p id='titulo'>".utf8_encode($mail)."</p>
				 	<p id='titulo'> Função atual:".utf8_encode($funcao)."(a)</p>
				 	<div class='items_button' style='text-align: center;'>
					<a href='funcoes/insira.php?id=$id&action=Admin'><button class='".$selected1."' >Administrador</button></a>
					<a href='funcoes/insira.php?id=$id&action=Editor'><button class='".$selected2."'>Editor</button></a>
					<a href='funcoes/insira.php?id=$id&action=0'><button class='".$selected3."'>Nenhum</button></a>
				 	</div>
				 </li>";
					}
		}
	}
?>
