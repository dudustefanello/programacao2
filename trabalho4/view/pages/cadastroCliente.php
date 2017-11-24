<!DOCTYPE HTML>
<html lang="pt">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">

	<title>owl Cloud Agency</title>

	<link rel="stylesheet" href="../styles/login.css" type="text/css" media="screen">

	<script src="../scripts/jquery.js"></script>
	<script src="../scripts/scriptIndex.js"></script>

</head>
<body>
	<div class="container">
		<div class="header1">
			<a href="index.php">
				<img src="../images/header.png" usemap="#mapHeader">
			</a>
		</div>
		<div class="header2"></div>
		<div class="contents">
			<form action="../../controller/cadClient.php" method="post">
				<p>
					Cliente:<br>
					<input type="text" name="nome">
				</p>
				<p>
					Email:<br>
					<input type="text" name="email">
				</p>
				<p>
					Telefone:<br>
					<input type="text" name="telefone">
				</p>
				<p>
					Endereço:<br>
					<input type="text" name="endereco"><br>
					<input type="submit" value="Enviar">
				</p>
			</form>
		</div>
	</div>
</body>
</html>
