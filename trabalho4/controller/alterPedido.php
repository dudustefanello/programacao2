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
      echo "oi " . $_POST['status'];

      $sql = "UPDATE pedido SET     pedidodescricao='" . $_POST['descricao'] . "',
                                    pedidostatus='" . $_POST['status'] . "',
                                    pedidoentrega='" . $_POST['data'] . "' WHERE idpedido = " . $_GET['cod'];
      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
      //<script> window.close(); </script>
?>
