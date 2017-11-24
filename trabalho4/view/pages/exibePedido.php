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

				// Checa conexão
			      if (!$conn) {
			            die(mysqli_connect_error());
			      }

                        $sql =     "SELECT idpedido, cliente_idcliente, pedidodata, pedidoentrega, pedidodescricao, pedidostatus
						FROM pedido
                                    WHERE idpedido =" . $_GET['cod'];

						$result = mysqli_query($conn, $sql);
						if (mysqli_query($conn, $sql)) {
					            echo "New record created successfully";
					      } else {
					            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					      }
                        $row = mysqli_fetch_assoc($result);

                        echo '<form action="../../controller/alterPedido.php?cod=' . $row['idpedido'] . '" method="post">

                              <p>
                                    Cliente:<br>
                                    <input type="text" placeholder="' . $row['cliente_idcliente'] . '">
                          </p>

                          <p>
				  Descrição:<br>
                                <textarea name="descricao" rows="3" cols="30">' . $row['pedidodescricao'] . '</textarea><br>
                          </p>

				  <p>
				  	<select name="status">
						<option value="0">Pendente</option>
						<option value="1">Em Análise</option>
						<option value="3">Parado</option>
						<option value="4">Concluído</option>
					</select>
				  </p>

				  <p>
					  Data:<br>
					  <input type="text" placeholder="' . $row['pedidodata'] . '">
			    </p>

                          <p>
                                Data de entrega:<br>
                                <input type="text" name="data" value="' . $row['pedidoentrega'] . '">
                          </p>

                          <p>
				  <input type="submit" value="Salvar Alterações">
                          </p>

                        </form>';

                        echo '<a href="../../controller/deletePedido.php?cod=' . $row['idpedido'] . '">Deletar Tarefa</a><br>';
                        ?>

                  </div>
            </div>
	</body>
</html>
