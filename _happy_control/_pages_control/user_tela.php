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
                        <li class="nav-item active bg-happy-selected">
                            <a class="nav-link py-1 text-black bg-selected" href="./user_tela.php" alt="">Início</a>
                        </li>

                        <li class="nav-item linha-vertical1">
                            <a class="nav-link py-1 text-black bg-selected" href="./promotions.php" alt="">Promoções</a>
                        </li>

                        <li class="nav-item linha-vertical1">
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
            <section class="row bg-light pt-3">
                <div class="col-12 col-lg-3 text-center">
                    <a href="./new_promotion.php">
                        <div class="bg-happy-blue bg-happy-dark-select text-center rounded p-4 w-100">
                            <img class="card-icon-control" src="../../_img/_icons/new_post_icon.svg" alt="Criar Nova Promoção">
                            <h5 class="text-white pt-2">Criar Promoção</h5>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 text-center">
                    <a href="./change_cost.php">
                        <div class="bg-happy-blue bg-happy-dark-select rounded p-4 w-100">
                            <img class="card-icon-control" src="../../_img/_icons/cost_materials_icon.svg" alt="Alterar Preços">
                            <h5 class="text-white pt-2">Alterar Preços</h5>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 text-center">
                    <a href="./new_user.php">
                        <div class="bg-happy-blue bg-happy-dark-select rounded p-4 w-100">
                            <img class="card-icon-control" src="../../_img/_icons/new_user_icon.svg" alt="Cadastrar Usuário">
                            <h5 class="text-white pt-2">Cadastrar Usuário</h5>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-3 text-center">
                    <a href="./send_email.php">
                        <div class="bg-happy-blue bg-happy-dark-select rounded p-4 w-100"
                            ><img class="card-icon-control" src="../../_img/_icons/send-icon.svg" alt="Enviar E-mail">
                            <h5 class="text-white pt-2">Enviar E-mail</h5>
                        </div>
                    </a>
                </div>
            </section>

            <section class="row bg-light py-3">
                <div class="col-12 col-lg-6 text-center">
                    <div class="bg-happy-yellow rounded p-4 w-100">
                        <h1 class="text-white">TESTE</h1>
                    </div>
                </div>

                <div class="col-12 col-lg-6 text-center">
                    <div class="bg-happy-yellow rounded p-4 w-100">
                        <h1 class="text-white">TESTE</h1>
                    </div>
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

