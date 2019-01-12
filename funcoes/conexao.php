<?php 	
	$connect = mysqli_connect('localhost','root','','bd_user');
	if(!$connect){
	echo "Debugging error:!";
	exit;
}	
	
	$bancodados=mysqli_select_db($connect, "bd_user");	
	
	if($bancodados)
		{/*certo*/}	
	else{
		echo "Error na conexao";
	}
?>