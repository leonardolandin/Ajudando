<?php
	require_once __DIR__."/phpUtils/conexao.php";
	require_once __DIR__."/phpUtils/operacoes.php";
session_start();

$string = $selecione_tudo." ".$cliente." ".$onde." email = '{$email}'";
$comando = mysqli_query($conexao, $string);
if(mysqli_num_rows($comando) == true) {
	$string = "UPDATE clientes SET contato_email = '$email_confirma', contato_celular = '$celular_confirma', credito_autor = '$credito_autor', formatos_id_formatos = $formatos, informatica_id_informatica = $informatica, editor_texto_id_editor_texto = $editor_texto, editor_apresentacao_id_editor_apresentacao = $apresentacao, atividades_imagens_id_atividades_imagens = $atividades_imagem, imagens_videos_id_imagens_videos = $imagem_videos, multimidia_id_multimidia = $multimidia, disponibiliza_atividades_id_disponibiliza_atividades = $disponibiliza_atividades, atividades_academicas_id_atividades_academicas = $atividades_academicas, niveis_niveis = 1 WHERE email = '$email'";
	$comando = mysqli_query($conexao, $string);
	mysqli_close($conexao);
	unset($_SESSION['salvar_depois']);
	//header("Location:area_privada.php");
}
?>