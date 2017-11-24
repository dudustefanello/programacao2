<?php
      setcookie('userLogged',  $_GET['user'], time() - 1, "/");
      header('Location: ../view/pages/login.php')
?>
