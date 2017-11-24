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
                        $servername = "localhost";
                        $username = "root";
                        $password = "root";
                        $dbname = "owldatabase";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        $sql =     "SELECT a.idtarefa, b.usuario_usuario, a.tarefanome, a.tarefaentrega, a.tarefadescricao, a.tarefaprioridade, a.tarefastatus
						FROM tarefa AS A
						INNER JOIN tarefa_has_usuario AS B
						ON a.idtarefa = b.tarefa_idtarefa
                                    WHERE a.idtarefa =" . $_GET['cod'];
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        echo '<form action="../../controller/alterTask.php?cod=' . $row['idtarefa'] . '" method="post">

                              <p>
                                    Tarefa:<br>
                                    <input type="text" name="nome" value="' . $row['tarefanome'] . '">
                          </p>

                          <p>
                                Descrição:<br>
                                <textarea name="descricao" rows="3" cols="30">' . $row['tarefadescricao'] . '</textarea><br>
                          </p>

                          <p>
                                Data de entrega:<br>
                                <input type="text" name="data" value="' . $row['tarefaentrega'] . '">
                          </p>

                          <p>
                                Prioriade:<br>
                                Baixa <input type="range" name="prioridade" min="0" max="4" value="' . $row['tarefaprioridade'] . '"> Alta
                          </p>

                          <p>
                                <input type="submit" value="Salvar Alterações">
                          </p>

                        </form>';
				
                        echo '<a href="../../controller/deleteTask.php?cod=' . $row['idtarefa'] . '">Deletar Tarefa</a><br>';
				if($row['tarefastatus'] == 0){
					echo '<a href="../../controller/concluirTask.php?cod=' . $row['idtarefa'] . '">Concluir Tarefa</a>';
				}
				if($row['tarefastatus'] == 1){
					echo '<a href="../../controller/reopenTask.php?cod=' . $row['idtarefa'] . '">Reabrir Tarefa</a>';
				}
                        ?>

                  </div>
            </div>
	</body>
</html>
