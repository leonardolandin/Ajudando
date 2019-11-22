<?php
session_start();
unset($_SESSION['nome'], $_SESSION['social'], $_SESSION['login']);
if(isset($_SESSION['adm'])){
	unset($_SESSION['adm']);
}
header ("location: index.html");
?>