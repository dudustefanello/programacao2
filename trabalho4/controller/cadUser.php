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
      $sql = "INSERT INTO usuario (usuario, usuariosenha)
      VALUES ('" . $_POST['nome'] . "', '" . $_POST['senha'] . "')";

      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      // Fecha a conexão
      mysqli_close($conn);

      header("Location: ../view/pages/login.php");
?>
