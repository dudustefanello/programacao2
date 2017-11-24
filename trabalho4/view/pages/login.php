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
				<a href="pageIndex.htm">
					<img src="../images/header.png" usemap="#mapHeader">
				</a>
			</div>
			<div class="header2"></div>
                  <div class="contents">
                        <?php
                              if(isset($_COOKIE['erro'])) echo $_COOKIE['erro'];
                        ?>
                        <form class="" action="../../controller/loginValidation.php" method="post">
                              <p>
                                    Usuário:<br>
                                    <input type="text" name="nome">
                              </p>

                              <p>
                                    Senha:<br>
                                    <input type="password" name="senha"><br>
                                    <input type="submit" value="Entrar"><br>
                              </p>

                              <p>
                                    <a href="cadastroUser.php">Cadastrar Usuário</a>
                              </p>
                        </form>
                  </div>
            </div>
	</body>
</html>
