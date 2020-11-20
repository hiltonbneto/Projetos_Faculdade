<html>
<head>
	<title>Cadasto InfoMask</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/7f5f0767ca.js" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.centro {
	padding-right: 200px;
	padding-left: 200px;
	margin-top: 100px;
	}
	body{
	  background: #00FFFF;
	  font-family: 'Alegreya Sans SC', sans-serif;
	  font-size: 16px; /* 16px = 12pt */
	}
</style>
<body>
		</form>

					<form class="centro" action="querecebe.php" method="post">
			  <div class="form-group">
			  	<h1 class="font-italic" align="center">CADASTRO</h1>
			<h2 class="font-italic" align="center"><b>InfoMask - COVID</b></h2>
			    <label for="exampleInputEmail1">E-mail</label>
			    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
			   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nome Completo</label>
			    <input type="text" class="form-control" name="nome" id="exampleInputEmail1" aria-describedby="emailHelp">
			  </div>
			<div class="form-group">
			    <label for="exampleInputPassword1">Criar Senha</label>
			    <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
		  	</div>
		  	
		  	<div class="form-group">
			    <label for="exampleInputPassword1">Confirmar Senha</label>
			    <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
		  	</div>
		  	<div class="form-group">
			  <input type="checkbox" class="form-check-input" id="exampleCheck1">
			  <label class="form-check-label" for="exampleCheck1">Desejo receber promoções no e-mail</label>
			</div>
			  <button type="submit" class="btn btn-primary" >Cadastrar</button>
			</form>

	</body>
</html>
