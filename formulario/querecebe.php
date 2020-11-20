<?php include_once"config.php";?>
<html>
<body>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//conexão com bd
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn, '$dbname');
//insere dados no bd
$sql = "INSERT INTO tbcadastro (nome,email,senha) VALUES ('$nome','$email','$senha')";
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