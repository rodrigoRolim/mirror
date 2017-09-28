<?php
	$conexao = mysqli_connect("127.0.0.1", "root", "lichiking", "WD43");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
	$produto = mysqli_fetch_array($dados);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="estilos.css" type="text/css">
		<link rel="stylesheet" href="reset.css" type="text/css">
		<link rel="stylesheet" href="bootstrap-flatly.css" type="text/css">
		<!--<link rel="stylesheet" href="bootstrap.css" type="text/css">-->
		<link rel="stylesheet" href="mobile.css" media="(max-width: 939px)" type="text/css">
		<link rel="stylesheet" href="css/produto.css" type="text/css">

	</head>
	<body>
		<?php
			$cabecalho_css = '<link rel="stylesheet" href="mobile.css" type="text/css">'; 
			$cabecalho_title = "Produto da Mirror Fashion";
			include("cabecalho.php");
		?>
		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1><?= $produto["nome"]?></h1>
					<p>Por apenas <?= $produto["preco"]?></p>

					<form action="checkout.php" method="POST">

						<fieldset class="cores">
							<legend>Escolha a cor:</legend>
							
							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde">
								<img src="img/produtos/foto<?= $produto["id"]?>-verde.png" alt="verde">
							</label>
							<input type="radio" name="cor" value="rosa" id="rosa">
							<label for="rosa">
								<img src="img/produtos/foto<?= $produto["id"]?>-rosa.png" alt="rosa">
							</label>
							<input type="radio" name="cor" value="azul" id="azul">
							<label for="azul">
								<img src="img/produtos/foto<?= $produto["id"]?>-azul.png" alt="azul">
							</label>
						</fieldset>
						<fieldset class="tamanho">
							<legend>Escolha o tamanho:</legend>
							<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
							<output for="tamanho" name="valortamanho">42</output>
						</fieldset>
						<input type="submit" class="comprar" value="Comprar">
						<input type="hidden" name="nome" value="<?= $produto["nome"]?>">
						<input type="hidden" name="preco" value="<?= $produto["preco"]?>">
						<input type="hidden" name="id" value="<?= $produto["id"]?>">
					</form>
				</div>
				<div class="detalhes">

					<h2>Detalhes do produto</h2>

					<p><?= $produto["descricao"]?></p>
					<table>
						<thead>
							<tr>
								<th>Características</th>
								<th>Detalhe</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Cardigã 74867</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Algodão e poliester</td>
							</tr>
							<tr>
								<td>Cores</td>
								<td>Azul, Rosa e Verde</td>
							</tr>
							<tr>
								<td>Lavagem</td>
								<td>Lavar a mão</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<?php include("rodape.php");?>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/produto.js" type="text/javascript"></script>
	</body>
</html>