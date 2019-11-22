<?php
$email = $_SESSION['login'];
if($email == null) {
	$email = $_SESSION['salvar_depois'];
}

$user = $selecione_tudo." ".$cliente." ".$onde." email = '{$email}'";
$query = mysqli_query($conexao, $user);

if(mysqli_num_rows($comando) == true) {
	while($result = mysqli_fetch_array($comando)) {
		if($result["formatos_id_formatos"] != null || $result["informatica_id_informatica"] != null) {
			mysqli_close($conexao);							
			header("Location:area_privada.php");
			break;
		}
	}
}

if($_POST['completar']) {
	if(!empty($_POST['informatica']) and !empty($_POST['editor_texto']) and !empty($_POST['editor_apresentacao']) and !empty($_POST['imagens_videos']) and !empty($_POST['multimidia']) and !empty($_POST['atividades_academicas']) and !empty($_POST['atividades_imagens']) and !empty($_POST['credito_autor']) and !empty($_POST['disponibiliza_atividades']) and !empty($_POST['formatos']) and !empty($_POST['checked1']) and !empty($_POST['checked2'])){
		$informatica = (int)addslashes($_POST['informatica']);
		$editor_texto = (int)addslashes($_POST['editor_texto']);
		$apresentacao = (int)addslashes($_POST['editor_apresentacao']);
		$imagem_videos = (int)addslashes($_POST['imagens_videos']);
		$multimidia = (int)addslashes($_POST['multimidia']);
		$atividades_academicas = (int)addslashes($_POST['atividades_academicas']);
		$atividades_imagem = (int)addslashes($_POST['atividades_imagens']);
		$credito_autor = addslashes($_POST['credito_autor']);
		$disponibiliza_atividades = (int)addslashes($_POST['disponibiliza_atividades']);
		$formatos = (int)addslashes($_POST['formatos']);
		$email_confirma = addslashes($_POST['checked1']);
		$celular_confirma = addslashes($_POST['checked2']);
		require_once __DIR__."\salvar_completarCadastro.php";
	} else {
		echo "<div class='popover-error-login' id='popover-error' style='top: 30px;'><span>Alguns campos não estão preenchidos</span></div>";
	}
}
?>