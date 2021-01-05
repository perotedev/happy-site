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

    <body class="bg-happy-blue">
        <header>

        </header>

        <main>
            <div class="container">
                <section class="block-size">
                    <form action="./_interface/login.php" method="POST">
                        <div class="row aligin-itens-center">
                            <div class="col"></div>

                            <div class="col-lg-4 block-focus  bg-light rounded-top">
                                <h1 class="font-weight-bold w-100 py-3 text-center color-happy-dark">HappyControl</h1>
                            </div>

                            <div class="col"></div>
                        </div>

                        <div class="row align-items-center mb-4">
                            <div class="col"></div>

                            <div class="col-lg-4 pt-4 px-5 block-focus block-focus text-center bg-dark rounded-bottom card-login-size">
                                <img class="text-center mt-3 mb-2" id="busto-user" src="../_img/_icons/person-icon.svg" alt="Silueta de uma pessoa">
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
                                        <button id="btn-login" type="submit" class="btn btn-primary font-weight-bold w-100 px-4">ENTRAR</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col"></div>
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