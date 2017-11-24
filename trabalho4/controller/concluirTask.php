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

      $sql = "UPDATE tarefa SET     tarefastatus=1 WHERE idtarefa = " . $_GET['cod'];
      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
?>
<script> window.close(); </script>
