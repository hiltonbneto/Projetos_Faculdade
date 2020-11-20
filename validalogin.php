<?php
$email = $_POST['email'];
$senha = $_POST['senha'];

//conectar com o banco
$conexao = mysqli_connect("localhost", "root", "", "formulario");
//criando consulta MySql
$sql = "SELECT * FROM tbcadastro WHERE email = '$email' and senha = '$senha' ";

$consulta = $conexao->query($sql);

if ($consulta->num_rows > 0) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Bem vindo!')
	window.location.href='formulario/formulario.php';
	</SCRIPT>");
} else {
	echo "<script>alert('Credenciais Invalidas'); window.location = 'login.php';</script>";
}

?>