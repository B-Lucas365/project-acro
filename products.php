<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acro Cabos</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/fonts/style.css">
    <link rel="stylesheet" href="./styles/product.css">
</head>
<body>
    <?php include('./includes/header.php'); ?>

        
    <main>
        <div class="divider-1"></div>

        <section class="section" id="products">
            <div class=" container">
                <header>
                    <h2 class="title">Nossos Produtos</h2>
                </header>
                <div class="products swiper">
                    <h2>Cabos</h2>
                    <div class="swiper-wrapper">
                        <div class="products swiper-slide">
                            
                                <img src="assets/produtos/cabos-de-aco.webp" alt="">
                                <p>Camos de Aço</p>
                            
                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/cordoalha.webp" alt="">
                                <p>Cordoalhas</p>

                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/lacos-de-cabo-de-aco.webp" alt="">
                                <p>Laços de aço</p>

                        </div>

                        <div class="products swiper-slide">
                                <img src="assets/produtos/lacos-sinteticos.webp" alt="">
                                <p>Laços Sinteticos</p>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="products swiper">
                    <h2>Acessórios</h2>
                    <div class="swiper-wrapper">
                        <div class="products swiper-slide">
                                <img src="assets/produtos/acessorios-de cabos.webp" alt="">
                                <p>Acessórios de cabos</p>

                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/acessorios-em-aco-inox.webp" alt="">
                                <p>Acessórios em inox</p>

                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/correntes.webp" alt="">
                                <p>Correntes</p>

                        </div>

                        <div class="products swiper-slide">
                                <img src="assets/produtos/protecoes-para-cintas.webp" alt="">
                                <p>Proteção para cintas</p>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="products swiper">
                    <h2>Cintas e Ligas</h2>
                    <div class="swiper-wrapper">
                        <div class="products swiper-slide">
                                <img src="assets/produtos/cintas-e-protecoes.webp" alt="">
                                <p>Cintas para Elevação</p>

                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/lingas-de-correntes.webp" alt="">
                                <p>Ligas de corrents</p>

                        </div>
    
                        <div class="products swiper-slide">
                                <img src="assets/produtos/talhas.webp" alt="">
                                <p>Talhas de corrent</p>

                        </div>

                        <div class="products swiper-slide">
                                <img src="assets/produtos/equipamentos.webp" alt="">
                                <p>equipamentos para cabos</p>

                        </div>

                        <div class="products swiper-slide">
                                <img src="assets/produtos/cordas.webp" alt="">
                                <p>Cordas navais</p>

                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <a href="#products" class="back-to-top"><i class="icon-arrow_up"></i></a>

        <div class="divider-2"></div>
    </main>

    <?php include('./includes/footer.php'); ?>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>