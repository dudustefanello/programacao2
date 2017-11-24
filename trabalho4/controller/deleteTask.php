<?php
      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "owldatabase";

      $conn = mysqli_connect($servername, $username, $password, $dbname);

      $sql =     "DELETE FROM tarefa_has_usuario
                  WHERE tarefa_idtarefa =" . $_GET['cod'];
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $sql =     "DELETE FROM tarefa
                  WHERE idtarefa =" . $_GET['cod'];
      if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
?>
<script> window.close(); </script>
