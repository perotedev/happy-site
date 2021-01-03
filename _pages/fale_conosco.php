<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../_img/_logos/logo_aba.png">
        <title>Happy Amazônia | Móveis sob medida</title>
        <link rel="stylesheet" href="../_css/bootstrap.min.css">
        <link rel="stylesheet" href="../_css/master.css">

    </head>
    
    <body class="bg-light">
        <header>
            <nav class="container py-2">
                <div class="row align-items-center">
                    <img class=" col-12 col-lg-3" src="../_img/_logos/happy_logo.png" alt="Logo da Happy Amazônia">
                    
                    <div class="col"></div>

                    <section class="bg-happy-yellow rounded-left col-12 col-lg-5">
                        <ul class="nav d-flex justify-content-center tamanho-letra">
                            <li class="nav-item">
                                <a class="nav-link color-happy-dark bg-selected" href="../index.php">Início</a>
                            </li>
        
                            <li class="nav-item dropdown">
                                <a class="nav-link color-happy-dark bg-selected bg-happy-yellow dropbtn dropdown-toggle" href="produtos.php">Produtos</a>
                                <div class="dropdown-content">
                                    <a href="moveis_sob_medida.php"> • Móveis sob medida</a>
		                            <a href="produtos_de_limpeza.php"> • Produtos de limpeza</a>
		                            <a href="promocoes.php"> • Promoções</a>
                                </div>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link color-happy-dark bg-selected" href="sobre_nos.php">Sobre Nós</a>
                            </li>
        
                            <li class="nav-item">
                                <a class="nav-link active color-happy-dark bg-selected bg-happy-selected" href="fale_conosco.php">Fale Conosco</a>
                            </li>
                        </ul>
                    </section>
                    
                    <div class="rounded-right bg-happy-blue linha-vertical tamanho-letra text-center col-12 col-lg-3 pt-3 center justify-content-end">
                        <p class="font-weight-bold text-white">vendas@happyamazonia.com<br>Telefone: (92) 99874-7412<br>Segunda a Sexta - 8h às 18h</p>
                    </div>

                </div>
            </nav>
        </header>

        <main class="">
            <section class="container">
                <section class="row align-items-center">
                    <div class="col-12 col-lg-4 pb-3 bg-happy-blue text-white text-center">
                        <h2 class="font-weight-bold pt-4">Mídias Sociais</h2>
                        <p class="pt-2 px-4">
                            Instagram: @happyamazonia <img src="../_img/_icons/circled_Instagram.svg" id="logo-insta-midia" alt="Logo do instagram"><br>
                            Facebook: happyamazonia <img src="../_img/_icons/rounded_Facebook.svg" id="logo-face-midia" alt="Logo do facebook">
                        </p>

                    </div>

                    <div class="col-12 col-lg-4 pb-3 bg-happy-yellow text-center">
                        <h2 class="font-weight-bold pt-4 text-center">Envie uma mensagem:</h2>
                        <p class="pt-2 px-4">
                            Solicite um orçamento, preencha os dados e escreva a sua mensagem no
                            espaço logo abaixo!
                        </p>
                        <img src="../_img/_icons/double-arrow-down.svg" alt="Seta dupla para baixo">

                    </div>

                    <div class="col-12 col-lg-4 pb-3 bg-happy-blue text-white text-center">
                        <h2 class="font-weight-bold pt-4">Reclame aqui</h2>
                        <p class="pt-2 px-4">
                            Para reclamações ligue para o número:<br>
                            <span class="font-weight-bold text-size20">(92) 99632-7412</span>
                        </p>

                    </div>
                </section>

                <section class="bg-happy-yellow py-4 px-4 mb-5">
                    <form class="row w-100 pt-3" action="_interface/enviar_mensagem.php" method="POST">
                        <section class="col-12 col-lg-5 col-md-5 form-group">
                            <div class="pb-3">
                                <label class="font-weight-bold" for="nome"> Seu nome:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Escreva seu nome aqui" required>
                            </div>

                            <div class="pb-3">
                                <label class="font-weight-bold" for="telefone"> Seu telefone:</label>
                                <input type="text" class="form-control" id="telefone" name="telefonw" placeholder="Escreva seu telefone aqui" required>
                            </div>

                            <div class="pb-3">
                                <label class="font-weight-bold" for="email"> Seu e-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Escreva seu e-mail aqui" required>
                            </div>

                            <div>
                                <label class="font-weight-bold" for="assunto">Motivo da mensagem:</label>
                                <div>
                                    <label class="pr-4" for="">
                                        <input type="radio" name="motivo" value="Orçamento" required> Orçamento
                                    </label>

                                    <label class="pr-4" for="">
                                        <input type="radio" name="motivo" value="Reclamação"> Reclamação
                                    </label>

                                    <label class="pr-4" for="">
                                        <input type="radio" name="motivo" value="Outro"> Outro
                                    </label>
                                </div>
                            </div>
                        </section>

                        <div class="col"></div>

                        <section class="col-12 col-lg-6 form-group">

                            <div class="pb-3">
                                <label class="font-weight-bold" for="mensagem">Escreva sua mensagem:</label>
                                <div class="form-group">
                                    <textarea class="form-control" class="form-control" name="mensagem" id="mensagem" placeholder="Escreva sua mensagem aqui" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="text-right">
                                <button id="btn-send-email" type="submit" class="btn btn-primary">Enviar Mensagem <img src="../_img/_icons/send-icon.svg" alt="Imagem representando enviar"> </button>
                            </div>
                        </section>
                    </form>
                </section>

                <div class="row bg-happy-yellow justify-content-center rounded-top">
                    <h2 class="font-weight-bold px-4 py-4 text-center">Clientes Happy Satisfeitos</h2>
                </div>

                <section class="bg-happy-yellow row text-center pb-4 px-4">
                    <div class="col-12 col-lg-3">
                        <img src="../_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="../_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="../_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3">
                        <img src="../_img/_expos/promo3.jpg" class="rounded img-cards" alt="...">
                        <div class="">
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </section>
            </section>

        </main>

        <footer class="d-block bg-happy-blue pt-3">
            <section class="container">
                <section class="row text-center text-light tamanho-letra">
                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                    <div class="col-12 col-lg-4">
                        <p>Varias informações aqui<br>
                            Varias informações aqui<br>
                            Varias informações aqui</p>

                    </div>

                </section>

            </section>
        </footer>

    </body>

    <script src="../_js/jquery.min.js"></script>
    <script src="../_js/bootstrap.min.js"></script>

</html>