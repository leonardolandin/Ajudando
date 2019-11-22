<?php
require "conexao.php";
$e = "kleydson122@gmail.com";
$string = "UPDATE clientes SET nivel_nivel = '2' WHERE email = '{$e}'";
$comando = mysqli_query($conexao, $string);
if($comando){
	echo"foi";
}else{
	echo"não foi";
}
?>