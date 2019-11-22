<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>

		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
		<div class="modal-body padtrbl" style="background-image: url('./img/PIC1.jpg');">
			<?php require_once "./php/efetuar_login.php"; ?>
			<div class="login-box-body">
				<p class="login-box-msg">Login</p>
				<div class="form-group">
					<form id="loginForm" method="post">
						<div class="form-group ">
							<label for="">E-mail: </label>
							<input name="email" class="form-control" placeholder="Digite seu e-mail" id="loginid" type="email" autocomplete="off" maxlength="120"/>
							<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
						</div>
						<div class="form-group has-feedback">
							<label for="">Senha: </label>
							<input name="senha" class="form-control" placeholder="Digite sua senha" id="loginpsw" type="password" autocomplete="off" maxlength="64"/>
							<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
						</div>
						<div class="row" style="display: flex;">
							<div class="col-xs-12">
								<div class="checkbox icheck"></div>
							</div>
							<div class="col-xs-12" style="padding-left: 65px; padding-right: 0px;">
								<input class="nolink" type="submit" class="btn btn-green btn-block btn-flat" name="login" value="Entrar">
							</div>
						</div>
						<div style="text-align: center; margin-top: 10px; font-weight: bold;">
							<span>OU</span>
						</div>
						<div style="margin-top: 10px;">
							<a href="cadastrar.php" class="nolink">Não tem uma conta? Cadastre-se!</a>
						</div>
						<div style="margin-top: 10px; text-align: center;">
							<a href="esqueceu_senha.php" class="nolink">Esqueci a senha</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/auth.js"></script>
	</body>
</html>