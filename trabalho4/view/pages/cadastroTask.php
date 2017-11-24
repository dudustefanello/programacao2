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
				<form action="../../controller/cadTask.php" method="post">

                          <p>
                                Tarefa:<br>
                                <input type="text" name="nome">
			        </p>

                          <p>
                                Descrição:<br>
                                <textarea name="descricao" rows="3" cols="30"></textarea><br>
			        </p>

                          <p>
                                Data de entrega:<br>
                                <input type="text" name="data" value="AAAA-MM-DD">
                          </p>

                          <p>
                                Responsável:<br>
                                <select name="responsavel">
                                      <?php
                                      $servername = "localhost";
                                      $username = "root";
                                      $password = "root";
                                      $dbname = "owldatabase";

                                      // Cria conexão
                                      $conn = mysqli_connect($servername, $username, $password, $dbname);


                                      $sql = "SELECT usuario FROM usuario";
                                      $result = mysqli_query($conn, $sql);

                                      if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_assoc($result)){
                                                 echo '<option value="' . $row['usuario'] . '">' . $row['usuario'] . '</option>';
                                            }
                                      }

                                     ?>
                               </select>
                          </p>

                          <p>
                                Prioriade:<br>
                                Baixa <input type="range" name="prioridade" min="0" max="4" value="1"> Alta
                          </p>

                          <p>
                                <input type="submit" value="Enviar">
                          </p>

			      </form>
                  </div>
            </div>
	</body>
</html>
