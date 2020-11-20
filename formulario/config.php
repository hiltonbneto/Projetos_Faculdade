<?php
	$servidor = "localhost"; //localhost tambem é web
	$dbname = "formulario"; //nome do banco
	$dbusuario = "root"; //                       usuario do banco 
	$dbsenha = ""; // senha do usuario do banco
	$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
	if (!$conn) {
		die("Conexão falhou: " . mysqli_connect_error());
	}
?>
