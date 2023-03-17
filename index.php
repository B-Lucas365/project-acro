<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acro Cabos</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/fonts/style.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <?php include('./includes/header.php'); ?>
        
    <main>
        <section class="section" id="home">
            <div class="container">
                <div class="image">
                    <img src="assets/images/man-intro.svg" alt="">
                </div>
                <div class="text">
                    <h2 class="title">Soluções para os mais variados projetos de elevação</h2>
                    <p> 
                        São em momentos de decisão, que construímos a nossa história. Neste mar de possibilidades encontramos meios de sustentar sonhos e elevar oportunidades, para que atravessem gerações de pessoas comprometidas com o amanhã.
                    
                    </p>
                    <a class="button" href="#">Saiba mais</a>
                </div>
                
            </div>
        </section>

        <section class="section" id="services">
            <div class="container grid">
                <div class="cards grid">
                    <div class="card">
                        <div class="tiles">
                            <img src="assets/images/certificate.svg" alt="">
                            <h3 class="title">Produtos Certificados</h3>
                        </div>
                        <div>
                            <p>Seguimos as Normas e Legislação vigente, trabalhando assim com produtos de acordo com suas especificações de carga, uso e segurança.</p>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="tiles">
                            <img src="assets/images/icone-teste-qualidade.webp.svg" alt="">
                            <h3 class="title">Qualidade</h3>
                        </div>
                        <div>
                            <p>Nossos produtos passam por um rigoroso controle de qualidade do início ao fim do processo.
                            </p>
                            
                        </div>
                    </div>

                    <div class="card">
                        <div class="tiles">
                            <img src="assets/images/icone-engenheiro-tecnico.webp.svg" alt="">
                            <h3 class="title">Departamento de Engenharia</h3>
                        </div>
                        <div>
                            <p>Profissionais qualificados para especificação, inspeção e desenvolvimento de soluções personalizadas.
                            </p>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>

        <section class="section" id="about">
            <div class="container grid">
                <div class="image">
                    <!-- carrousel de imagens -->
                    <img src="assets/images/servicos-especializados-03.webp.svg" alt="estudio de fotos">
                </div>
                <div class="text">
                    <h2 class="title">Serviços Especializados</h2>
                    <p>Serviços Especializados</p><br>
                    <p>Quando se trata de colocar em risco a vida ou prejudicar o desempenho de uma operação, podendo até paralisar a mesma e, em ambos os casos gerando prejuízo a empresa, com certeza você estará ZERO disposto a assumir os riscos. E para que os riscos sejam minimizados você precisa agir de forma preventiva, sabendo como se encontra o estado de conservação e uso dos equipamentos utilizados nos processos de movimentação, elevação e amarração de cargas, bem como se estão respeitando as Normas vigentes.</p>
                    <p>Desta forma a Acro criou uma nova divisão, a Acro Services, com foco em serviços técnicos especializados para as operações de movimentação, elevação e amarração de cargas, permitindo aos nossos clientes realizarem o trabalho com mais segurança e eficiência.</p>
                </div>

            </div>
        </section>

        <section class="section" id="products">
            <div class=" container">
                <header>
                    <h2 class="title">Produtos Acro cabos</h2>
                </header>
                <div class="products swiper">
                    <div class="swiper-wrapper">
                        <div class="product swiper-slide">
                            <blockquote>
                                <img src="assets/produtos/cabos-de-aco.webp" alt="">
                            </blockquote>
                        </div>
    
                        <div class="product swiper-slide">
                            <blockquote>
                                <img src="assets/produtos/cordas.webp" alt="">
                            </blockquote>
                        </div>
    
                        <div class="product swiper-slide">
                            <blockquote>
                                <img src="assets/produtos/correntes.webp" alt="">
                            </blockquote>
                        </div>

                        <div class="product swiper-slide">
                            <blockquote>
                                <img src="assets/produtos/talhas.webp" alt="">
                            </blockquote>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="section" id="contact">
            <div class="container grid">

                <div class="text">
                    <h2 class="title">Entre em contato conosco</h2>
                    <p>
                        Entre em contato conosco pelos canais de atendimento, adorariamos atende-lo
                    </p>
                    <a href="https://api.whatsapp.com/send?1=pr_BR&phone=551132995400" class="button" target="_blank">Entrar em Contato <i class="icon-whatsapp"></i></a>
                </div>

                <div class="links">
                    <ul class="grid">
                        <h2 class="title">Acro São Paulo</h2>
                        <li>(11) 4750-1996</li>
                        <li> R. Nilton Coelho de Andrade, 1326 - Jardim Andarai, São Paulo - SP, 02167-010</li>
                        <li>acrocabo@acrocabo.com.br</li>
                    </ul>
                </div>

                <div class="links">
                    <ul class="grid">
                        <h2 class="title">ACRO PARANÁ</h2>
                        <li>(41) 3411-1001</li>
                        <li>R. Carlos de Laet, 925 - Hauer, Curitiba - PR, 81610-050</li>
                        <li>acrocuritiba@acrocabo.com.br</li>
                    </ul>
                </div>

            </div>
        </section>

    </main>

    <?php include('./includes/footer.php'); ?>


    <a href="#home" class="back-to-top"><i class="icon-arrow_up"></i></a>


    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>