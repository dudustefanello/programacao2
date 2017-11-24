<?php
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "owldatabase";

      // Cria conexão
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Checa conexão
      if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

      $sql = "SELECT idcliente FROM cliente WHERE clientenome = '". $_POST['cliente'] . "'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $row = mysqli_fetch_assoc($result);
      $id = $row['idcliente'];

      $sql = "INSERT INTO pedido (cliente_idcliente, pedidodata, pedidoentrega, pedidodescricao)
      VALUES ('" . $id . "', '" . $_POST['data'] . "', '" . $_POST['dataentrega'] . "', '" . $_POST['descricao'] . "')";

      $result = mysqli_query($conn, $sql);
      if ($result) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>
<script> window.close(); </script>
