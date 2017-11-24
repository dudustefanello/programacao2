<?php
      session_start();

      $servername = "localhost";
      $username = "root";
      $password = "root";
      $dbname = "owldatabase";

      // Cria conexão
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      // Checa conexão
      if (!$conn) {
            $_SESSION['erro'] = "Connection failed: " . mysqli_connect_error();
      }

      $sql = "SELECT usuario, usuariosenha FROM usuario WHERE usuario ='" . $_POST['nome'] . "'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                  if($row['usuariosenha'] == $_POST['senha']) {
                        setcookie('userLogged',  $row['usuario'], time() + 28800, "/");
                        header("Location: ../view/pages/index.php");
                  } else {
                        setcookie('erro', "Senha Incorreta", time() + 10, "/");
                        header("Location: ../view/pages/login.php");
                  }
            }
      } else {
            setcookie('erro', "Usuário não Existe", time() + 10, "/");
            header("Location: ../view/pages/login.php");
      }

      mysqli_close($conn);
?>
