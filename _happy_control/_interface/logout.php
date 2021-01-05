<?php
    session_start();

    (bool) session_destroy();
    echo "<script> alert('Sessão encerrada com sucesso!'); window.location='../tela_login.php'; </script>";

?>