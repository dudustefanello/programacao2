<!DOCTYPE HTML>
	<html lang="pt">
		<head>
			<meta http-equiv="content-type" content="text/html; charset=utf-8">
			<title>Page title</title>
			<link rel="stylesheet" href="../styles/kanban.css" type="text/css" media="screen">
		</head>
		<body>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "owldatabase";

				$conn = mysqli_connect($servername, $username, $password, $dbname);
			?>
			<div class="contents">
				<div class="pendente">
					<?php
					echo "
						<table>
							<tr>
								<th>Pendente</th>
							</tr>
					";

					$sql =     "SELECT a.idpedido, b.clientenome, a.pedidoentrega
							FROM pedido AS a
							INNER JOIN cliente AS b
							ON a.cliente_idcliente = b.idcliente
							WHERE a.pedidostatus = 0";

					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
				            while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo '<td><a target="_blank" href="exibePedido.php?cod=' . $row['idpedido'] . '">
									<b>' . $row['clientenome'] . '</b><br>
								</a>Entrega: ' . $row['pedidoentrega'] . '</td>';
							echo "</tr>";
				            }
				      }
					echo "</table>";
					?>
				</div>
				<div class="analise">
					<?php
					echo "
						<table>
							<tr>
								<th>Em Análise</th>
							</tr>
					";

					$sql =     "SELECT a.idpedido, b.clientenome, a.pedidoentrega
							FROM pedido AS a
							INNER JOIN cliente AS b
							ON a.cliente_idcliente = b.idcliente
							WHERE a.pedidostatus = 1";

					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo '<td><a target="_blank" href="exibePedido.php?cod=' . $row['idpedido'] . '">
									<b>' . $row['clientenome'] . '</b><br>
								</a>Entrega: ' . $row['pedidoentrega'] . '</td>';
							echo "</tr>";
				           	}
				      }
					echo "</table>";
					?>
				</div>
				<div class="parado">
					<?php
					echo "
						<table>
							<tr>
								<th>Parado</th>
							</tr>
					";

					$sql =     "SELECT a.idpedido, b.clientenome, a.pedidoentrega
							FROM pedido AS a
							INNER JOIN cliente AS b
							ON a.cliente_idcliente = b.idcliente
							WHERE a.pedidostatus = 3";

					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo '<td><a target="_blank" href="exibePedido.php?cod=' . $row['idpedido'] . '">
									<b>' . $row['clientenome'] . '</b><br>
								</a>Entrega: ' . $row['pedidoentrega'] . '</td>';
							echo "</tr>";
				            }
				      }
					echo "</table>";
					?>
				</div>
				<div class="concluido">
					<?php
					echo "
						<table>
							<tr>
								<th>Concluído</th>
							</tr>
					";

					$sql =     "SELECT a.idpedido, b.clientenome, a.pedidoentrega
							FROM pedido AS a
							INNER JOIN cliente AS b
							ON a.cliente_idcliente = b.idcliente
							WHERE a.pedidostatus = 4";

					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo '<td><a target="_blank" href="exibePedido.php?cod=' . $row['idpedido'] . '">
									<b>' . $row['clientenome'] . '</b><br>
								</a>Entrega: ' . $row['pedidoentrega'] . '</td>';
							echo "</tr>";
				            }
				      }
					echo "</table>";
					?>
				</div>
			</div>
		</body>
	</html>
