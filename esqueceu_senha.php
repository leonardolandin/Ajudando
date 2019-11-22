<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Esqueceu a senha</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="modal-body padtrbl">
        <div class="login-box-body">
			<p class="login-box-msg">Esqueceu a senha</p>
			<div class="form-group">
				<form method="post" id="loginForm">
					<div class="form-group ">
						<!----- username -------------->
						<input name="email" class="form-control" placeholder="Email" id="loginid" type="email" autocomplete="off" />
						<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
						<!---Alredy exists  ! -->
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="checkbox icheck">
							</div>
						</div>
						<div class="col-xs-12" style="text-align: center;">
							<input type="submit" value="Enviar" class="btn btn-green btn-block btn-flat">
						</div>
					</div>
				</form>
				<?php require "esqueci.php"; ?>
			</div>
        </div>
    </div>
</body>
</html>