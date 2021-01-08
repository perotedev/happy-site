<?php
    session_start();

    if ((! isset($_SESSION['logado'])) || ($_SESSION['logado'] != TRUE)) {
        echo "<script> alert('Vocẽ precisa fazer login para acessar esta página!'); window.location='../../index.php; </script>";
    }
    else{}
?>

<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../../_img/_logos/logo_aba.png">
        <title>HappyControl | Sistema de Gerenciamento</title>
        <link rel="stylesheet" href="../../_css/bootstrap.min.css">
        <link rel="stylesheet" href="../../_css/master.css">
    </head>

    <body class="bg-happy-blue">
        <header class="container">
            <div class="row bg-happy-dark text-center font-weight-bold">
                <p class="col-12 text-white my-1">SISTEMA DE GERENCIAMENTO HAPPYCONTROL</p>
            </div>
            <nav class="row bg-happy-yellow align-items-center">
                <section class="col-12 col-lg-11 color-happy-dark pl-0">
                    <ul class="nav text-center">
                        <li class="nav-item">
                            <a class="nav-link py-1 text-black bg-selected" href="./user_tela.php">Início</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./promotions.php">Promoções</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./ocarmentos.php">Orçamentos <span class="notification-number rounded-left rounded-right font-weight-bold px-1">13</span></a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./messages.php">Mensagens <span class="notification-number rounded-left rounded-right font-weight-bold px-1">5</span></a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./cost_material.php">Preços de Custo</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./users_acounts.php">Gerenciar Usuários</a>
                        </li>

                        <li class="nav-item linha-vertical1 active bg-happy-selected">
                            <a class="nav-link py-1 text-black bg-selected" href="./calendar.php">Calendário</a>
                        </li>
                    </ul>
                </section>

                <a class="col-12 col-lg-1 py-1 no-effect bg-happy-blue-dark bg-selected-blue linha-vertical2" href="" alt="">
                    <div class="text-white font-weight-bold text-center">
                        <p class="my-0">SAIR</p>
                    </div>
                </a>
            </nav>
        </header>

        <main class="container">
            <div class="row bg-happy-blue-dark">
                <div class="col-12"></div>
            </div>
            <section class="row bg-light">
                <div class="col-12 py-2 text-center">
                    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23f8f9fa&amp;ctz=America%2FManaus&amp;src=cHQtYnIuYnJhemlsaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%230B8043&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                </div>
            </section>
        </main>

        <footer class="container">
            <div class="row bg-happy-dark mb-0 py-2">
                <div class="col-12 text-center text-white">
                    <p>Desenvolved by rodrigodev.online, 2021</p>
                </div>
            </div>

        </footer>
    </body>

    <script src="../../_js/jquery.min.js"></script>
    <script src="../../_js/bootstrap.min.js"></script>
</html>

