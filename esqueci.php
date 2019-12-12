<?php
if(!empty($_POST['email'])){
	require "conexao.php";
	$email = addslashes($_POST['email']);
	$string = "SELECT * FROM clientes WHERE email = '{$email}'";
	$comando = mysqli_query($conexao, $string);
	while($result = mysqli_fetch_array($comando))
	{
		if($result['email'] == $email)
		{
			$novasenha = substr(md5(time()), 0, 6);

			$senha_codificada = md5($novasenha);
			
			$string = "UPDATE clientes SET senha = '$senha_codificada' WHERE email = '{$email}'";
			
			$sql_code = mysqli_query($conexao , $string);

			mysqli_close($conexao);
			
			echo "<script>alert('Sua nova senha é: $novasenha')</script>";
			
			break;
		}
	}
}
?>