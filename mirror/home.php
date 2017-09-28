<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<!--<link rel="stylesheet" href="css/bootstrap.css" type="text/css">-->
		<link rel="stylesheet" href="estilos.css" type="text/css">
		<!--<link rel="stylesheet" href="css/reset.css" type="text/css">-->
		<link rel="stylesheet" href="css/bootstrap-flatly.css" type="text/css">
		
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)" type="text/css">
	</head>
	<body>

			<?php 
				$cabecalho_title = "Home";
				$cabecalho_css = '<link rel="stylesheet" href="estilos.css" type="text/css">';
				include("cabecalho.php");
			?>
			
			<div class="container destaques">
				<section class="busca">
					<h2>Busca</h2>
					<form action="http://www.google.com.br/search" id="form-busca">
						<input type="search" name="q" id="q">
						<input type="image" src="img/busca.png" class="lupa">
					</form>
				</section>
				<section class="menu-departamentos">
					<h2>Departamentos</h2>
					<nav>
						<ul id="item">
							<li style="list-style-type: none;">
								<a href="#">Blusa e Camisas</a>
								<ul>
									<li style="list-style-type: none;"><a href="#">Manga curta</a></li>
									<li style="list-style-type: none;"><a href="#">Manga comprida</a></li>
									<li style="list-style-type: none;"><a href="#">Camisa social</a></li>
									<li style="list-style-type: none;"><a href="#">Camisa casual</a></li>
								</ul>
							</li>
							<li style="list-style-type: none;"><a href="#">Calças</a></li>
							<li style="list-style-type: none;"><a href="#">Saias</a></li>
							<li style="list-style-type: none;"><a href="#">Vestidos</a></li>
							<li style="list-style-type: none;"><a href="#">Sapatos</a></li>
							<li style="list-style-type: none;"><a href="#">Bolsas e Carteiras</a></li>
							<li style="list-style-type: none;"><a href="#">Acessórios</a></li>
						</ul>
					</nav>
				</section>
				<img src="img/destaque-home.png" alt="Promoção: Big City Night">
				<a href="#" class="pause"></a>
			</div>
			<div class="container paineis">
				<section class="painel novidades">
					<h2>Novidades</h2>
					<ol>
						<?php
							$conexao = mysqli_connect("127.0.0.1", "root", "lichiking", "WD43");
							$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data LIMIT 0, 12");

							while($produto = mysqli_fetch_array($dados)):
						?>
						<li>
							<a href="produto.php?id=<?= $produto["id"]?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto["id"]?>.png" alt="<?= $produto["nome"]?>">
									<figcaption><?= $produto["nome"]?> por <?= $produto["preco"]?></figcaption>
								</figure>	
							</a>
						</li>
						<?php endwhile; ?>
					</ol>
					<button type="button">Mostrar mais</button>
				</section>
				<section class="painel mais-vendidos">
					<h2>Mais Vendidos</h2>
					<ol>
						<?php
							$conexao = mysqli_connect("127.0.0.1","root","lichiking","WD43");
							$dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas LIMIT 3,15");
							

							while($produto = mysqli_fetch_array($dados)):
						?>
						<li>
							<a href="produto.php?id=<?= $produto["id"]?>">
								<figure>
									<img src="img/produtos/miniatura<?= $produto["id"]?>.png" alt="<?= $produto["nome"]?>">
									<figcaption><?= $produto["nome"]?> por <?= $produto["preco"]?></figcaption>
								</figure>
							</a>
						</li>
						<?php endwhile?>
					</ol>
					<button type="button">Mostrar mais</button>
				</section>
			</div>
			<?php include("rodape.php");?>
			<script src="js/jquery.js" type="text/javascript"></script>
			<script src="js/home.js" type="text/javascript"></script>
	</body>
</html>