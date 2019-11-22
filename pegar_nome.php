<?php
if(isset($_SESSION['nome'])){
	$nome = $_SESSION['nome'];
	echo "$nome";
}
?>