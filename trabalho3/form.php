<?php 
	session_start();
	if($_SESSION['ok'] == 0){
		$_SESSION['tarefas'] = array();
	}
	array_push($_SESSION['tarefas'], $_GET['tar']." > ".$_GET['des']);
	$_SESSION['ok'] = 1;
	header("Location: index.php");
?>