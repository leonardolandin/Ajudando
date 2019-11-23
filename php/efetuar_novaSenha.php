<?php
if($_POST['enviar']) {
	if(!empty($_POST['email'])) {
		require_once __DIR__."/phpUtils/conexao.php";
		$email = addslashes($_POST['email']);
		echo "<script>localStorage.setItem('emailRecupera', '$email')</script>";

		$string = "SELECT * FROM clientes WHERE email = '{$email}'";
		$comando = mysqli_query($conexao, $string);
		while($result = mysqli_fetch_array($comando)) {
			if($result['email'] == $email) {
				$novasenha = substr(md5(time()), 0, 6);

				$senha_codificada = md5($novasenha);
				
				$string = "UPDATE clientes SET senha = '$senha_codificada' WHERE email = '{$email}'";
				
				$sql_code = mysqli_query($conexao , $string);

				mysqli_close($conexao);
				
				echo "<div class='popover-error-login' id='popover-senha' style='width: 240px; background-color: green; border: 1px solid green;'><span>Sua nova senha é '$novasenha'</span></div>";
				
				break;
			}
		}
	} else {
		echo "<div class='popover-error-login' id='popover-error' style='width: 240px;'><span>É necessário digitar um e-mail</span></div>";
	}
}
?>