<?php 		function SomenteNumero(){	echo "		<script language='JavaScript'>			function SomenteNumero(e){			    var tecla=(window.event)?event.keyCode:e.which;   			    if((tecla>47 && tecla<58)) return true;			    else{			    	if (tecla==8 || tecla==0) return true;     // 8 backspace e 0 null				else  return false;			    }			}			</script>";}	function SomenteLetras(){		echo "		<script language='JavaScript'>			function SomenteLetras(e){			    var tecla=(window.event)?event.keyCode:e.which;   			    if((tecla<47 || tecla>58)){return true}			    else{return false}			}			</script>";}?>