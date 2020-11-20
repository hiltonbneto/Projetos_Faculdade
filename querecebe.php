<?php include_once"config.php";?>
<html>
<body>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$celular = $_POST["celular"];
$CPF = $_POST["CPF"];
$senha = $_POST["senha"]
//conexão com bd
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn, '$dbname');
//insere dados no bd
$sql = "INSERT INTO tbcadastro (nome,email,endereco,celular,CPF,senha) VALUES ('$nome','$email','$endereco','$celular','$CPF','$senha')";
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Usuário cadastrado!'); window.location = 'login.php';</script>";
	header("login.php");
} else {
	echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>