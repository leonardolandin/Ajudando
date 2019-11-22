<?php
function Tabela($nome_tabela){
	if(isset($nome_tabela)){
		require "./php/phpUtils/conexao.php";
		$comando = mysqli_query($conexao , "SELECT * FROM $nome_tabela");
		$cont = 0;
		while($result = mysqli_fetch_array($comando)){
			$valor[$cont] = $result[0];
			$str[$cont] = $result[1];
			$cont++;
		}
		for($i = 0; $i < max($valor); $i++){
			$string[$i] = "<option value='$valor[$i]'>$str[$i]</option>";
		}
		mysqli_close($conexao);
		return $string;
	}
}
?>