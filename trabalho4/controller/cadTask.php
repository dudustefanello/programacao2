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

      $sql = "INSERT INTO tarefa (tarefanome, tarefaentrega, tarefadescricao, tarefaprioridade)
      VALUES ('" . $_POST['nome'] . "', '" . $_POST['data'] . "', '" . $_POST['descricao'] . "', '" . $_POST['prioridade'] . "')";

      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql = "SELECT idtarefa FROM tarefa ORDER BY idtarefa DESC LIMIT 1";
      $result = mysqli_query($conn, $sql);
      // Chama e vê se deu certo
      if ($result) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $row = mysqli_fetch_assoc($result);

      $sql = "INSERT INTO tarefa_has_usuario (tarefa_idtarefa, usuario_usuario) VALUES (" . $row['idtarefa'] . ", '" . $_POST['responsavel'] . "')";
      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
?>
<script> window.close(); </script>
