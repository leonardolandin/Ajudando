<?php
if($_POST['cadastrar']) {
	if(!empty($_POST['nome']) and !empty($_POST['senha']) and !empty($_POST['nomesocial']) and !empty($_POST['email']) and !empty($_POST['celular'])) {
		$Nome = addslashes($_POST['nome']);
		$Senha = addslashes($_POST['senha']);
		$Nome_Social = addslashes($_POST['nomesocial']);
		$Email = addslashes($_POST['email']);
		$Celular = addslashes($_POST['celular']);
		$Titulacao = (int)addslashes($_POST['titulacoes']);

		require_once __DIR__."\salvar_cadastro.php";
	} else {
		echo "<div class='popover-error-login' id='popover-error' style='width: 240px;'><span>Alguns ou todos os campos estão vazios</span></div>";
	}
}
?>