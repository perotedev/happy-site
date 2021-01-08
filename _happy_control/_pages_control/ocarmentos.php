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
            <div class="row bg-happy-dark">
                <p class="col-12 col-lg-6 text-white font-weight-bold my-1"><span class="color-happy-yellow">HAPPY</span><span class="color-happy-blue">CONTROL</span> | SISTEMA DE GERENCIAMENTO</p>
                <p class="col-12 col-lg-6 text-white text-right my-1">Sexta-feira, 08 de janeiro de 2021 | 07h32m</p>
            </div>
            <nav class="row bg-happy-yellow align-items-center">
                <section class="col-12 col-lg-11 color-happy-dark pl-0">
                    <ul class="nav text-center">
                        <li class="nav-item">
                            <a class="nav-link py-1 text-black bg-selected" href="./user_tela.php" alt="">Início</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./promotions.php" alt="">Promoções</a>
                        </li>

                        <li class="nav-item linha-vertical1  active bg-happy-selected">
                            <a class="nav-link py-1 text-black bg-selected" href="./ocarmentos.php" alt="">Orçamentos <span class="notification-number rounded-left rounded-right font-weight-bold px-1">13</span></a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./messages.php" alt="">Mensagens <span class="notification-number rounded-left rounded-right font-weight-bold px-1">5</span></a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./cost_material.php" alt="">Preços de Custo</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./users_acounts.php" alt="">Gerenciar Usuários</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./calendar.php" alt="">Calendário</a>
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
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
                </div>
            </section>

            <section class="row bg-light">
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
                </div>
            </section>

            <section class="row bg-light">
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
                </div>
            </section>

            <section class="row bg-light">
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
                </div>
            </section>

            <section class="row bg-light">
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
                </div>
            </section>

            <section class="row bg-light">
                <div class="col-12 py-5 text-center">
                    <h1>TESTE</h1>
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

