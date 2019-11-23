<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor Education Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 
  <?php require "ativ_salvar.php"; ?>
</head>

<body>
  <!--Navigation bar-->
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
          <li><a href="./atividades.php">Atividades</a></li>
          <li><a href="./precisa.html">Precisa decidir</a></li>
          <li><a href="./premium.html">Premium</a></li>
          <li><a href="./configuracao.html">Configurações</a></li>
		  <li><a href="area_privada.php"><?php require "pegar_nome.php"; ?></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
</br>
</br>
</br>
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Login</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Username" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
  <!--Feature-->
<div style="margin-top: 20px; display: flex; justify-content: center; margin-bottom: 20px;">
  <form method="post" enctype="multipart/form-data" style="border: 2px solid black; width: 520px; padding: 19px; border-radius: 4px;">
    <p style="text-align: center; font-weight: bold;">Enviando Atividades Pedagógicas</p>
      Selecione o arquivo o arquivo:<input type="file" required name="arquivo"></br>
    <div style="display: flex; flex-direction: row-reverse;">
      <input type="submit" value="Salvar" style="background-color: #3f3fff; color: white; border: 2px solid #3f3fff; border-radius: 3px; width: 70px;">
    </div>
  </form>
</div>
 <iframe name="iframe_download" class="hidden"></iframe>
 <table style="display: flex; justify-content: center;">
	<tr>
		<?php  require "ativ_download.php"; $count = 0; foreach($nomes as $nome){ ?>
		<td style="width: 260px;">
			<p style="margin-right: 70px"><img src='./upload/<?php echo$nome; ?>' width='260' height='200' style="border: 3px solid black; border-radius: 5px;"/></p><a href='./upload/<?php echo$nome; ?>' download="<?php echo$nome; ?>" style="margin-left: 70px; color: #3f3fff;" target="iframe_download" ><img src="./img/download.png" style="width: 20px; margin-bottom: 5px; margin-right: 5px;">Baixar Imagem</a>
		</td>
		<?php $count++; if($count == 4){ echo "</tr><tr>"; $count=0; } }?>
	</tr>
</table>
	
  <!--/ feature-->
  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">
      ©2019
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
      </div>
    </div>
  </footer>
  <!--/ Footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>