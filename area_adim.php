<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil - ADM</title>
  <meta charset="utf-8"/>;

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<head>

<body>
<!--Menu-->
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
			<li><a href="area_privada.php">Clientes</a></li>
			<li><a href="configuracao.html">Configuração</a></li>
			<li><a href="sair.php">Sair</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Menu-->
	<h2>Bem Vindo - <?php require "pegar_nome.php"; ?></h2>
</body>
</html>