<?php
require_once __DIR__."/php/phpUtils/conexao.php";
$string = "SELECT * FROM documento_salva";
$comando = mysqli_query($conexao, $string);
while($result = mysqli_fetch_array($comando)){
	$nomes[] = $result["nome"];
}
?>