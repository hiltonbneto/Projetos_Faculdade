# Projetos_Faculdade
Atividades da faculdade
<!DOCTYPE html>
<html>
<head>

	<title>Jogo da Velha | ADS - Uniesumar</title>


<style type="text/css">

	#mostrador {
		margin: auto;
		margin-top: 50px;
		width: 252px;
		height: 80px;
	}

	.espaco {
		width: 80px;
		height: 70px;
		border: 2px solid #000;
		float: left;
		text-align: center;
		padding-top:20px;
	}

	.tabuleiro {
		width: 252px;
		height: 252px;
		margin: auto;;

	}

</style>

</head>
<body>
	<div id="mostrador">
		<p style="float: left; margin-right: 10px;">VEZ DO JOGADOR:</p>
		<img src="" border="0" height="50">
	</div>

	<div class="tabuleiro">

		<div id="A1" class="espaco" jogada=""></div>
		<div id="A2" class="espaco" jogada=""></div>
		<div id="A3" class="espaco" jogada=""></div>
		
		<div id="B1" class="espaco" jogada=""></div>
		<div id="B2" class="espaco" jogada=""></div>
		<div id="B3" class="espaco" jogada=""></div>
		
		<div id="C1" class="espaco" jogada=""></div>
		<div id="C2" class="espaco" jogada=""></div>
		<div id="C3" class="espaco" jogada=""></div>

	</div>
	<p>

	<div class="button" align="center">
		<button onClick='parent.location="javascript:location.reload()"'>JOGAR NOVAMENTE</button>
	</div>

<script type="text/javascript">
	const jogador1 = "X";
const jogador2 = "O";
var vezJogador = jogador1;
var fimJogo = false;


atualizaMostrador();
jogando();


async function atualizaMostrador() {

	if (fimJogo) {return;}
	await retardo(500);

	if (vezJogador == jogador1) {
		var jogador = document.querySelectorAll("div#mostrador img") [0];
		jogador.setAttribute("src", "jogadorX.png");
	} else {
		var jogador = document.querySelectorAll("div#mostrador img") [0];
		jogador.setAttribute("src", "jogadorO.png");
	}
}

function jogando() {

	var espacos = document.getElementsByClassName("espaco");
	for (var i = 0; i < espacos.length; i++) {
		espacos[i].addEventListener("click", function() {
			if (fimJogo) {return;}

			if(this.getElementsByTagName("img").length == 0) {
				if (vezJogador == jogador1) {
					this.innerHTML = "<img src='jogadorX.png' border='0' height='50'>";
					this.setAttribute("jogada", jogador1);
					vezJogador = jogador2;
				} else {
					this.innerHTML = "<img src='jogadorO.png' border='0' height='50'>";
					this.setAttribute("jogada", jogador2);
					vezJogador = jogador1;
				}
				atualizaMostrador();
				identificavencedor();
			}
		});
	}

}

async function identificavencedor() {
	var A1 = document.getElementById("A1").getAttribute("jogada");
	var A2 = document.getElementById("A2").getAttribute("jogada");
	var A3 = document.getElementById("A3").getAttribute("jogada");

	var B1 = document.getElementById("B1").getAttribute("jogada");
	var B2 = document.getElementById("B2").getAttribute("jogada");
	var B3 = document.getElementById("B3").getAttribute("jogada");

	var C1 = document.getElementById("C1").getAttribute("jogada");
	var C2 = document.getElementById("C2").getAttribute("jogada");
	var C3 = document.getElementById("C3").getAttribute("jogada");

	var vencedor = "";

	if ((A1 == B1 && A1 == C1 && A1 !="") || (A1 == A2 && A1 == A3 && A1 !="") || (A1 == B2 && A1 == C3 && A1 != "")) {
		vencedor = A1
	} else if ((B2 == B1 && B2 == B3 && B2 !="") || (B2 == A2 && B2 == C2 && B2 !="")|| (B2 == A3 && B2 == C1 && B2 !="")){ 
	  	vencedor = B2
	} else if ((C3 == C2 && C3 == C1 && C3 !="") || (C3 = A3 && C3 == B3 && C3 !="")) {
		vencedor = C3
	}
if (vencedor != "") {
	fimJogo = true;

	await retardo(100);
	alert("O ganhador foi o: '" + vencedor + "'");
} 

}

function retardo (ms) {
	return new Promise (resolve => setTimeout (resolve, ms));
}
	
</script>
</body>
</html>
