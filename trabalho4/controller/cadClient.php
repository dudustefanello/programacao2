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

      // Monta a query
      $sql = "INSERT INTO cliente (clientenome, clienteemail, clientetelefone, clienteendereco)
      VALUES ('" . $_POST['nome'] . "', '" . $_POST['email'] . "', '". $_POST['telefone'] . "', '" . $_POST['endereco'] . "')";

      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      // Fecha a conexão
      mysqli_close($conn);
?>
<script> window.close(); </script>
