<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap-flatly.css" type="text/css">
		<style>
			.navbar {
				margin: 0;
			}
			body { padding-top: 70px; }
		</style>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<a class="navbar-brand" href="exemplo.php"><img src="img/logo.png"></a>
					<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle=".collapse">
						<span class="glyphicon glyphicon-home"></span>
					</button>
				</div>
				<ul class="nav navbar-nav collapse navbar-collapse">
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
					<li><a href=#"">Perguntas frenquentes</a></li>
					<li><a href="#">Entre em contato</a></li>
				</ul>
			</nav>
			<div class="jumbotron">
				<div class="container">
					<h1>Ótimo escolha!</h1>
					<p>Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
						<div class="panel panel-success">
							<form class="col-sm-8">
								<div class="row">
									<fieldset class="col-sm-12">
										<legend>Dados pessoais</legend>
										<div class="form-group">
											<label for="nome">Nome completo</label>
											<input type="text" class="form-control" id="nome" name="nome" required>
										</div>
										<div class="form-group" >
											<label for="cpf">CPF</label>
											<input data-mask="999.999.999-99" type="text" class="form-control" id="cpf" name="cpf" required>
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<div class="input-group">
												<span class="input-group-addon">@</span>
												<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
											</div>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="sim" name="spam" checked>
												Quero receber spam da mirror fashion
											</label>
										</div>
									</fieldset>

									<fieldset class="col-md-12">
										<legend>Dados do documento</legend>
										<fieldset>
											<div class="checkbox">
												<label>
													<input type="checkbox" value="sim" name="spam" checked>
													Quero receber spam da mirror fashion
												</label>
											</div>
											<div class="form-group">
												<label for="bandeira-cartao">Bandeira</label>
												<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
													<option value="master">MasterCard</option>
													<option value="visa">VISA</option>
													<option value="amex">American Express</option>
													
												</select>
											</div>
											<div class="form-group">
												<label for="validade-cartao">Validade</label>
												<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
											</div>
											<div class="form-group">
												<label for="numero-cartao">Número completo</label>
												<input data-mask="9999 9999 9999 9999 - 999" type="text" class="form-control" id="numero-cartao" name="numero-cartao">
											</div>
										</fieldset>
									</fieldset>
									<button type="submit" class="btn btn-primary btn-lg pull-right" >
								
								<span type="glyphicon glyphicon-thumbs-up">confirma pedido</span>
									
							</button>
								</div>
							</form>
							<div class="panel-heading">
								<h2 class="panel-title">Sua compra</h2>
							</div>
							<div class="panel-body">
								<img src="img/produtos/foto<?= $_POST["id"]?>-<?= $_POST["cor"]?>.png" class="img-thumbanail img-responsive">
								<dl>
									<dt>Produto</dt>
									<dd><?= $_POST["nome"]?></dd>
									<dt>Cor</dt>
									<dd><?= $_POST["cor"]?></dd>
									<dt>Tamanho</dt>
									<dd><?= $_POST["tamanho"]?></dd>
									<dt>Preço</dt>
									<dd><?= $_POST["preco"]?></dd>
								</dl>
							</div>
							
						</div>
					</div>>
				</div>
			</div>
		</div>
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script>
		<script src="js/inputmask-plugin.js" type="text/javascript"></script>
		<script src="js/validacao.js" type="text/javascript"></script>
	</body>
</html>