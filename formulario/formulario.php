<html>
<head>
	<title>InfoMask</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7f5f0767ca.js" crossorigin="anonymous"></script>
</head>
<style type="">
	.centro {
	text-align: center;
	position: absolute;
	width:100%;
	height: 233px;
    margin-top: 100px;
	}
	body{
	  background: #00FFFF;
	  font-family: 'Alegreya Sans SC', sans-serif;
	  font-size: 16px; /* 16px = 12pt */
	}
</style>
<body>
	<div class="centro">
		<form action="grava_resposta.php" method="post">
			<h2 class="font-italic"><b>Infomask</b></h2>
		<b>1 - Você utiliza mascara com que frequência pra sair de casa?</b> <br>
		<div class="form-check">
			  <input class="form-check-input" type="checkbox" name="resposta_um" value="Sempre" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Sempre
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_um" value="Quando tem grande fluxo de pessoas" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			   Quando tem grande fluxo de pessoas
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_um" value="Só em lugares que envolve saúde publica" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Só em lugares que envolve saúde publica
			  </label><br>
			  	<input class="form-check-input" type="checkbox" name="resposta_um" value="Nunca" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Nunca
			  </label><p>
		</div>
		<!--<input type="text" name="resposta_um" placeholder="Resposta" ><br> -->
		<b>2 - Com que frequência você troca de mascara?</b> <br>
		<input class="form-check-input" type="checkbox" name="resposta_dois" value="Uma vez por mes" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Uma vez por mês
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_dois" value="Uma vez por semana" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			   Uma vez por semana
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_dois" value="Uma vez ao dia" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Uma vez ao dia
			  </label><p>
			  	<input class="form-check-input" type="checkbox" name="resposta_dois" value="Nunca" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Nunca
			  </label><p>
		<!--<input type="text" name="resposta_dois" placeholder="Resposta" ><br> -->
		<b>3 - Você utiliza mascaras de pano ou descartáveis?</b> <br>
		<input class="form-check-input" type="checkbox" name="resposta_tres" value="Pano" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Pano
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_tres" value="Descartaveis" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			   Descartáveis
			  </label><br>
		<!--<input type="text" name="resposta_tres" placeholder="Resposta" ><br> -->
		<b>4 - Você reutiliza suas mascaras?</b> <br>
		<input class="form-check-input" type="checkbox" name="resposta_quatro" value="Sim" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Sim
			  </label><br>
			  <input class="form-check-input" type="checkbox" name="resposta_quatro" value="Nao" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			   Não
			  </label><br>
		<!--<input type="text" name="resposta_quatro" placeholder="Resposta" ><br>-->
		<input class="btn btn-primary" type="submit" name="">
		</form>
	</div>
</body>
</html>