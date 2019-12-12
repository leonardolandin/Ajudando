<?php 
	require_once __DIR__."/phpUtils/conexao.php";
	require_once __DIR__."/phpUtils/operacoes.php";

//Verificar se já existe cadastro
session_start();
$string = $selecione_tudo." ".$cliente." ".$onde." email = '{$Email}'";
$comando = mysqli_query($conexao, $string);
if(mysqli_num_rows($comando) == true) {
	//Já tem cadastro
	echo "<div class='popover-error-login' id='popover-error' style='width: 240px;'><span>Este e-mail já está cadastrado</span></div>";
	echo "<script>
	localStorage.setItem('cadNome', '$Nome')
	localStorage.setItem('cadSenha', '$Senha')
	localStorage.setItem('cadNomeSocial', '$Nome_Social')
	localStorage.setItem('cadCelular', '$Celular')
	</script>";
	mysqli_close($conexao);
} else {
	//Caso nao, cadastrar
	$senha_codificada = md5($Senha);
	$_SESSION['salvar_depois'] = $Email;
	$string = $inserir." ".$cliente." ".$campos_cliente." VALUES ('$Nome', '$senha_codificada', '$Nome_Social', '$Email', '$Celular', 'ajudando', '$Titulacao')";
	$comando = mysqli_query($conexao, $string);
	mysqli_close($conexao);
	header("Location:completar_cadastro.php");
}
?>