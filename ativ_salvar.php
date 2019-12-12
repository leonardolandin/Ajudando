<?php
if(isset($_FILES['arquivo'])){
	require_once __DIR__."/php/phpUtils/conexao.php";
	require_once __DIR__."/php/phpUtils/operacoes.php";
	$nome = $_FILES['arquivo'];
	$direc = "upload/";
	$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()).$extensao;
	date_default_timezone_set('UTC');
	$data = date("Y-n-j H:i:s");
	$string =  "INSERT INTO documento_salva (nome_temporario, arquivo, registro) VALUES ('$novo_nome', '$extensao', '$data')";
	$comando = mysqli_query($conexao, $string);
	if($comando){
		$string = $selecione_tudo." documento_salva ".$onde." nome_temporario = '{$novo_nome}'";
		$comando1 = mysqli_query($conexao, $string);
		if($comando1){
			while($result = mysqli_fetch_array($comando1)){
				$nome = $result['id_documento_salva'];
				$nomextenso = $nome.$extensao;
				//echo "<script>alert('$nomextenso')</script>";
				$string1 = "UPDATE documento_salva SET nome = '$nomextenso' WHERE id_documento_salva = $nome";
				$comando2 = mysqli_query($conexao, $string1);
				if($comando2){
					move_uploaded_file($_FILES['arquivo']['tmp_name'], $direc.$nomextenso);
					mysqli_close($conexao);
					break;
				}
				
			}
		}
	}
}
?>