<style>
body {
	background-color: #777;
}
div, .valores {
	font-family: 'Verdana';
	height: 58px;
	line-height: 58px;
	font-size: 50px;
	font-weight: bold;
	text-align: center;
	padding: 0 0 5px 0;
	box-sizing: border-box;
}
.valores, .saida {
	border: none;
	font-size: 22px;
	line-height: 35px;
	box-shadow: none;
	text-align: left;
}
.saida {
	text-align: right;
}
.center {
	width: 35%;
	min-width: 480px;
	margin: 0 auto;
	margin-top: 100px;
}
.titulo {
	background-color: #000;
	color: #FFF;
	font-size: 32px;
	text-align: center;
	height: 60px;
	margin-bottom: 10px;
}
.nome {
	color: yellow;
	border: none;
	width: auto;
}
.sombra, .results, .titulo, button {
	box-shadow: 2px 2px 2px rgba(0,0,0,0.6);
}
.input {
	background-color: #EEE;
	color: #000;
	height: 40px;
	width: 100%;
	padding-left: 10px;
	font-size: 20px;
	margin-bottom: 20px;
}
.results {
	border: 1px solid black;
	padding: 10px;
	background-color: #FFF;
}
button {
	width: 100%;
	height: 40px;
	cursor: pointer;
}
.fio {
	height: 1px;
	width: 100%;
	border-top: 3px solid #000;
	margin: 20px 0 15px 0;
}
</style>

<?php

if (isset($_POST['prod']) && ($_POST['prod'] != '')) {

	$prod = floatval($_POST['prod']);
	$impo = floatval($_POST['impo']);
	$valimpo = ($prod/100)*$impo;
	$valprod = $prod - $valimpo;

	} else {

		$prod = '';
		$impo = '';
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Calculadora de Imposto</title>
	</head>
	<body>
		<form method="POST" class="center">
			<div class="titulo">
				Calculadora de <font class="nome">Imposto</font>
			</div>
			<div class="valores">
				Valor do Produto: 
				<input type="number" name="prod" class="input"><br>
				Taxa de Imposto em %: 
				<input type="number" name="impo" class="input"><br>
				<button type="submit">Calcular</button>
				<br><br>
				<div class="saida">
					<?php
						if (!empty($prod) && !empty($impo)) {
							echo "Valor do Produto: <span class='results'>
								  R$ ".number_format($prod, 2, ',', '.')."</span><br><br>";
							echo "Taxa de Imposto: <span class='results'>".$impo."%</span><br><br>";
							echo "Imposto: <span class='results'>
								  R$ -".number_format($valimpo, 2, ',', '.')."</span><div class='fio'></div>";
							echo "Valor final: <span class='results'>
								  R$ ".number_format($valprod, 2, ',', '.')."</span>";
						}
					?>
				</div>
			</div>
		</form>
	</body>
</html>
