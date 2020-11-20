<?php include_once"config.php";?>
<html>
<body>
<?php
$resposta_um = $_POST["resposta_um"];
$resposta_dois = $_POST["resposta_dois"];
$resposta_tres = $_POST["resposta_tres"];
$resposta_quatro = $_POST["resposta_quatro"];
//conexão com bd
$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn, '$dbname');
//insere dados no bd
$sql = "INSERT INTO tbformulario (resposta_um,resposta_dois,resposta_tres,resposta_quatro) VALUES ('$resposta_um','$resposta_dois','$resposta_tres','$resposta_quatro')";
if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Muito obrigado! O Projeto infomask tem como objetivo fazer o controle da utilização de mascaras no brasil e com isso gerar dados e consiêntizar as pessoas sobre o coronavirus'); window.location = 'https://www.bing.com/covid/local/paran_brazil';</script>";
} else {
	echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
//mysqli_close($conn);

	</body>
</html>
