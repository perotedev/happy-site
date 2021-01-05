<?php
    session_start();

    if ((! isset($_SESSION['logado'])) || ($_SESSION['logado'] != TRUE)) {
        echo "<script> alert('Vocẽ precisa fazer login para acessar esta página!'); window.location='../../index.php; </script>";
    }
    else{
?>

<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <header>

        </header>

        <main>

        </main>

        <footer>

        </footer>
    </body>
</html>