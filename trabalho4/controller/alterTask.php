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

      $sql = "UPDATE tarefa SET     tarefanome='" . $_POST['nome'] . "',
                                    tarefaentrega='" . $_POST['data'] . "',
                                    tarefadescricao='" . $_POST['descricao'] . "',
                                    tarefaprioridade='" . $_POST['prioridade'] . "' WHERE idtarefa = " . $_GET['cod'];
      // Chama e vê se deu certo
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      mysqli_close($conn);
?>
<script> window.close(); </script>
