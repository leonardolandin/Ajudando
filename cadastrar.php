<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar</title>
		<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="modal-body padtrbl" style="background-image: url('./img/PIC2.jpg');">
		<?php require_once "./php/efetuar_cadastro.php"; ?>
			<div class="login-box-body">
				<p class="login-box-msg">Cadastrar</p>
				<div class="form-group">
					<form id="loginForm" method="post">
						<div class="form-group ">
							<input name="nome" class="form-control" placeholder="Nome" id="cadname" type="text" autocomplete="off" maxlength="90"/>
							<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>	       
						</div>
						<div class="form-group has-feedback">
							<input name="senha" class="form-control" placeholder="Senha" id="passid" type="password" autocomplete="off" maxlength="64"/>
							<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
						</div>
						<div class="form-group ">
							<input name="nomesocial" class="form-control" placeholder="Nome Social" id="cadsocial" type="text" autocomplete="off" maxlength="90"/>
							<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
						</div>
						<div class="form-group has-feedback">
							<input name="email" class="form-control" placeholder="Email" id="loginpsw" type="email" autocomplete="off" maxlength="120"/>
							<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
						</div> 
						<div class="form-group has-feedback">
							<input name="celular" class="form-control" placeholder="Celular" id="cadcell" type="text" autocomplete="off" maxlength="20"/>
							<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
						</div>
						<div class="question">
							<span>Qual a sua titulação?</span>
							<select class="form-control" name="titulacoes">
								<?php 
									require"pegar_tabela.php"; 
									include("./php/phpUtils/operacoes.php"); 
									$var = Tabela($titula);
									for($i = 0; $i < count($var); $i++) { 
										echo "$var[$i]"; 
									} ?>
							</select>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="checkbox icheck"></div>
							</div>
							<div class="col-xs-12" style="text-align: center;">
								<input type="submit" value="Continue" class="btn btn-green btn-block btn-flat" name="cadastrar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/auth.js"></script>
	</body>
</html>