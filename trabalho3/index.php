<!DOCTYPE html>
<html>
	<head>
		<title>Lembrador</title>
	</head>
	<body>
		<?php
			session_start();
		?>
		<form action="form.php" method="get">
			Tarefa:<br>
			<input type="text" name="tar">
			<br>
			Descrição:<br>
			<input type="text" name="des">
			<br><br>
			<input type="submit" value="Salvar">
		</form>
		<hr>
		<?php
			if($_SESSION['ok'] == 1){
				foreach ($_SESSION['tarefas'] as $value) {
			    	echo "$value <br>";
				}
			}
		?>

	</body>
</html>