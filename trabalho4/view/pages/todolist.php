<!DOCTYPE HTML>
<html lang="pt">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../styles/todolist.css" type="text/css" media="screen">
		<title>Page title</title>
		<style>
			table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
		</style>
	</head>
	<body>
		<div class="barra">
			<br><a href="cadastroTask.php" target="_blank">Nova Tarefa</a>
		</div>
		<div class="conteudo">
			<?php
				echo "
					<table>
						<tr>
							<th>Tarefa</th>
							<th>Data de Entrega</th>
							<th></th>
						</tr>
				";
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "owldatabase";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				$sql =     "SELECT a.idtarefa, b.usuario_usuario, a.tarefanome, a.tarefaentrega, a.tarefadescricao, a.tarefaprioridade, a.tarefastatus
						FROM tarefa AS A
						INNER JOIN tarefa_has_usuario AS B
						ON a.idtarefa = b.tarefa_idtarefa
						WHERE b.usuario_usuario  = '" . $_COOKIE['userLogged'] . "'
						ORDER BY a.tarefastatus ASC, a.tarefaentrega ASC";

				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
			            while($row = mysqli_fetch_assoc($result)) {
						if($row['tarefastatus'] == 0){
							echo "<tr>";
							echo '<td><a target="_blank" href="exibeTarefa.php?cod=' . $row['idtarefa'] . '">' . $row['tarefanome'] . '</td>';
							echo "<td>" . $row['tarefaentrega'] . "</td>";
							echo '<td><a target="_blank" href="../../controller/concluirTask.php?cod=' . $row['idtarefa'] . '">Concluir</a></td>';
							echo "</tr>";
						}
						else{
							echo "<tr>";
							echo '<td><a target="_blank" href="exibeTarefa.php?cod=' . $row['idtarefa'] . '"><s>' . $row['tarefanome'] . '</s></td></s>';
							echo "<td><s>" . $row['tarefaentrega'] . "</s></td>";
							echo '<td><a target="_blank" href="../../controller/concluirTask.php?cod=' . $row['idtarefa'] . '"><s>Concluir</s></a></td></s>';
							echo "</tr>";
						}
			            }
			      }
			?>
		</div>
	</body>
</html>
