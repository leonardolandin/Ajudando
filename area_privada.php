<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perfil</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!--Menu-->
<?php require_once "verificar.php"; ?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html"><img src="./img/ajudandotitle.png"></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.html">Inicio</a></li>
					<li><a href="configuracao.html">Configuração</a></li>
					<li><a href="sair.php">Sair</a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--Menu-->
   <!--/ Atividades-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Bem Vindo - <?php require "pegar_nome.php"; ?></h2>
          <p>Frase de efeito</p>
          </br>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">              
            </div>
            <div class="icon-text">
              <h4 class="ser-text"><a href="atividades.php">Atividades</a></h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">            
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Vídeos</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Conteudo</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!--/ Atividades-->
</body>
</html>