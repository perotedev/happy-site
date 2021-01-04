<?php
    require_once "_interface/conect.php"
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../_img/_logos/logo_aba.png">
        <title>HappyControl | Sistema de Gerenciamento</title>
        <link rel="stylesheet" href="../_css/bootstrap.min.css">
        <link rel="stylesheet" href="../_css/master.css">
    </head>

    <body class="bg-happy-yellow">
        <header>

        </header>

        <main>
            <div class="container">
                <section class="bg-dark rounded block-focus block-size">
                    <form action="" method="POST">
                        <div class="row align-items-center mb-4">
                            <div class="col-12 col-lg-4 bg-light rounded-left">
                                <h1 class="font-weight-bold w-100 text-center color-happy-dark pt-5">HappyControl</h1>
                                <h5 class="font-weight-bold color-happy-blue w-100 text-center">Sistema de Gerenciamento</h5>
                                <img class="w-100 text-center px-4 pb-5" src="../_img/_icons/suport-icon.svg" alt="Engrenagem e Chave Inglesa">
                            </div>

                            
                                <div class="col-12 col-lg-4 pl-5 pr-4 text-center">
                                    <img class="text-center pt-2" id="busto-user" src="../_img/_icons/person-icon.svg" alt="Silueta de uma pessoa">
                                    <div class="form-group text-left">
                                        <div>
                                            <label class="font-weight-bold text-white" for="user">Usuário</label>
                                            <input type="text" class="form-control" name="user" id="user" placeholder="Digite seu usuário aqui" required>
                                        </div>

                                        <div class="pt-2">
                                            <label class="font-weight-bold text-white" for="password">Senha</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha aqui" required>
                                        </div>
                                        
                                        <div class="pt-4">
                                            <a href="#">
                                                <button id="btn-login" type="submit" class="btn btn-primary font-weight-bold w-100 px-4">ENTRAR  <img src="../_img/_icons/login-icon.svg" alt="Botão de Login"></button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 pl-4">
                                <iframe class="rounded" src="https://calendar.google.com/calendar/embed?height=350&amp;wkst=1&amp;bgcolor=%23F6BF26&amp;ctz=America%2FManaus&amp;src=cHQtYnIuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%230B8043&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showTz=0&amp;showCalendars=0" style="border-width:0" width="300" height="350" frameborder="0" scrolling="no"></iframe>
                                </div>
                        </div>
                    </form>
                </section>
            </div>
        </main>

        <footer>

        </footer>
    </body>

    <script src="_js/jquery.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
</html>