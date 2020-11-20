<?php include_once"config.php";?>

<?php

$email = $_POST['email'];
$senha = $_POST['senha'];
//conectar com o banco
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
//criando consulta MySql
$sql = "SELECT * FROM tbcadastro WHERE email = '$email' and senha = '$senha' ";

$consulta = $conn->query($sql);

if ($consulta->num_rows > 0) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Bem vindo!')
	window.location.href='formulario/formulario.php';
	</SCRIPT>");
} else {
	echo "<script>alert('Credenciais Invalidas'); window.location = 'login.php';</script>";
}

?>