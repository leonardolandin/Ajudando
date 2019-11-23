<?php
	require_once __DIR__."/phpUtils/conexao.php";
	require_once __DIR__."/phpUtils/operacoes.php";
session_start();

if($_POST['login']) {
	if(!empty($_POST['email']) and !empty($_POST['senha'])) { 
		$email = addslashes($_POST['email']);
		$senha = md5($_POST['senha']);
		$string = $selecione_tudo." ".$cliente." ".$onde." email = '{$email}'";
		$comando = mysqli_query($conexao, $string);

		if($comando->num_rows > 0) {
		//Usuario encontrado
			while($result = mysqli_fetch_array($comando)) {
				if($email == $result["email"] and $senha != $result["senha"]) {
					echo "<div class='popover-error-login' id='popover-error'><span>E-mail encontrado, mas a senha está incorreta</span></div>";
					echo "<script>localStorage.setItem('email', '$email')</script>";
				} else {
					if($email == $result["email"] and $senha == $result["senha"]) {
						$_SESSION['login'] = $result["email"];
						$_SESSION['nome'] = $result["nome_social"];
						$_SESSION['social'] = $result["social"];
						if($result["formatos_id_formatos"] == null || $result["informatica_id_informatica"] == null) {
							//Caso não tenha completado o cadastro e esteja tentando logar.
							mysqli_close($conexao);							
							header("Location:completar_cadastro.php");
							break;
						}
						if($result["niveis_niveis"] == 2) {
							//Levar para a pagina de escolha se quer logar como adm ou cliente
							$_SESSION['adm'] = 2;
							mysqli_close($conexao);
							header("Location:decidir.php");
							break;
						}
						else {
							//Se não entrar como usuario comum
							mysqli_close($conexao);
							header("Location:area_privada.php");
							break;
						}
					}
				}
			}
		} else {
			//Usuario não encontrado
			echo "<div class='popover-error-login' id='popover-error' style='width: 250px;'><span style='align-self: center; justify-content: center;'>E-mail não encontrado</span></div>";
			mysqli_close($conexao);
		}
	} else {
		//Campos vazios
		echo "<div class='popover-error-login' id='popover-error' style='width: 240px;'><span>Os campos estão vazios</span></div>";
	}
}
?>