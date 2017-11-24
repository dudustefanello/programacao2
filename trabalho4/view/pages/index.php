<!DOCTYPE HTML>
<html lang="pt">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<title>owl Cloud Agency</title>

		<link rel="stylesheet" href="../styles/index.css" type="text/css" media="screen">

		<script src="../scripts/jquery.js"></script>
		<script src="../scripts/scriptIndex.js"></script>
	</head>
	<body>
		<?php
			if (!isset($_COOKIE['userLogged'])) {
				header('Location: login.php');
			}
		?>
		<div class="container">
			<div class="header1">
				<a href="index.php">
					<img src="../images/header.png" usemap="#mapHeader">
				</a>
			</div>
			<div class="header2">
				<?php
					echo '<a href="../../controller/unsetCookie.php?user=' . $_COOKIE['userLogged'] . '"><br><br><br>Sair</a>';

				?>
			</div>
			<div class="menu1">
				<buttonCalendar>
					<img src="../icons/iconCalendar.png">
				</buttonCalendar>

				<buttonList>
					<img src="../icons/iconList.png">
				</buttonList>

				<buttonKanban>
					<img src="../icons/iconKanban.png">
				</buttonKanban>

				<buttonClients>
					<img src="../icons/iconClients.png">
				</buttonClients>

				<buttonChat>
					<img src="../icons/iconChat.png">
				</buttonChat>

				<buttonCloud>
					<img src="../icons/iconCloud.png">
				</buttonCloud>

				<buttonIdea>
					<img src="../icons/iconIdea.png">
				</buttonIdea>

				<buttonNotes>
					<img src="../icons/iconNotes.png">
				</buttonNotes>

				<buttonPuzzle>
					<img src="../icons/iconPuzzle.png">
				</buttonPuzzle>

			</div>
			<div class="contents">
				<img src="../images/temp/imageIndex.png">
			</div>
			<div class="menu2">
				<img src="../icons/iconOwl2.png">
			</div>
			<div class="footer">
				Copyright 2017 Eduardo Stefanello<br>
				eduardo@stefanello.cc<br>
			</div>
		</div>
	</body>
</html>
