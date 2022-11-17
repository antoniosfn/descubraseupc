<!DOCTYPE html>


<html lang="pt-br">

<head>
    <!-- Essenciais -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170218734-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-170218734-1');
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5PMDZBK');</script>
    <!-- End Google Tag Manager -->
    <meta http-equiv=”content-language” content=”pt-br”>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Antonio Figueiredo">
    <meta name=”creator” content=”AntonioDevSites”>

    <!-- SEO -->
    <title>Descubra seu PC</title>
    <meta name="robots" content="noindex, nofollow">
    



    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,700;1,300;1,500&display=swap" rel="stylesheet">
    <!-- Font Awesome icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Fonts CSS-->
    <link rel="stylesheet" href="css/heading.css">
    <link rel="stylesheet" href="css/body.css">
</head>

<body id="page-top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5PMDZBK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="https://antoniodevsites.com.br/descubraseupc">Descubra seu PC</a>


        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="assets/img/icon.png" alt="Logo - Descubra seu PC">
            <!-- Masthead Heading-->


            <h2 class='masthead-heading mb-0'>Computador Encontrado!</h2>

            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <?
            $usuario = $_POST['name'];
            echo "<p class='pre-wrap masthead-subheading font-weight-light mb-0'>Vamos continuar, $usuario.</p>";
            ?>
        </div>
    </header>
    <section class="page-section portfolio">
        <div class="container">

            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <div class="col-lg ml-auto">

                    <p class="lead">Logo abaixo, você pode visualizar as configurações correspondentes ao seu perfil de uso. O próximo passo é anotar essas informações, fazer uma pesquisa na internet de uma máquina com as configurações idênticas ou superiores, ou então, mostre ao vendedor da loja em que você decidir comprar para que ele possa lhe apresentar as opções disponíveis.</p><br>
                    <hr>

                    <div class="alert alert-danger" role="alert">Observação:<br>Lembre-se que essas informações é básico para atender ao uso, ou seja, você não será afetado(a) negativamente se as configurações disponíveis na loja for superior.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section d-flex align-items-center flex-column">
        <div class="container">

            <div class="row">
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div><br><br>



                <?php


                // Recebendo as respostas do formulario
                $perfil = $_POST['perfil'];
                $condicao = $_POST['condicao'];
                $usuario = $_POST['name'];


                //Escolhendo configurações conforme opções escolhidas:
                $computadores['diaadia']['economico']['cpu'] =  "Intel Celeron, Pentium ou similar";
                $computadores['diaadia']['economico']['rom'] =  "HDD 500GB";
                $computadores['diaadia']['economico']['ram'] =  "4GB DDR";

                $computadores['diaadia']['normal']['cpu'] =  "Intel Core i3 ou similar";
                $computadores['diaadia']['normal']['rom'] =  "SSD 240GB";
                $computadores['diaadia']['normal']['ram'] =  "4GB DDR";

                $computadores['trabalho']['economico']['cpu'] =  "Intel Core i3 ou similar";
                $computadores['trabalho']['economico']['rom'] =  "HDD 1TB";
                $computadores['trabalho']['economico']['ram'] =  "8GB DDR4";

                $computadores['trabalho']['normal']['cpu'] =  "Intel Core i5 ou similar";
                $computadores['trabalho']['normal']['rom'] =  "HDD 1TB + SSD 240GB";
                $computadores['trabalho']['normal']['ram'] =  "8GB DDR4";


                $computadores['edicao']['economico']['cpu'] =  "Intel Core i5 ou similar";
                $computadores['edicao']['economico']['rom'] =  "HDD 1TB + SSD 240GB";
                $computadores['edicao']['economico']['ram'] =  "8GB DDR4";
                $computadores['edicao']['economico']['video'] =  "2GB";
                $computadores['edicao']['economico']['tela'] =  "HD";

                $computadores['edicao']['normal']['cpu'] =  "Intel Core i7 ou similar";
                $computadores['edicao']['normal']['rom'] =  "HDD 1TB + SSD 512GB";
                $computadores['edicao']['normal']['ram'] =  "16GB DDR4";
                $computadores['edicao']['normal']['video'] =  "4GB";
                $computadores['edicao']['normal']['tela'] =  "FULL HD";

                $computadores['gamer']['economico']['cpu'] =  "AMD Ryzen 5 ou Intel Core i5 ou i7";
                $computadores['gamer']['economico']['rom'] =  "HDD 1TB E SSD 240GB";
                $computadores['gamer']['economico']['ram'] =  "8GB DDR4";
                $computadores['gamer']['economico']['video'] =  "2GB";
                $computadores['gamer']['economico']['tela'] =  "FULL HD";

                $computadores['gamer']['normal']['cpu'] =  "Intel Core i9";
                $computadores['gamer']['normal']['rom'] =  "SSD 1TB";
                $computadores['gamer']['normal']['ram'] =  "32GB DDR4";
                $computadores['gamer']['normal']['video'] =  "8GB";
                $computadores['gamer']['normal']['tela'] =  "FULL HD";



                $cpu = $computadores[$perfil][$condicao]['cpu'];
                $rom = $computadores[$perfil][$condicao]['rom'];
                $ram = $computadores[$perfil][$condicao]['ram'];
                if (isset($computadores[$perfil][$condicao]['video'])) {
                    $video = $computadores[$perfil][$condicao]['video'];
                }
                if (isset($computadores[$perfil][$condicao]['tela'])) {
                    $tela = $computadores[$perfil][$condicao]['tela'];
                }

                //Onde mostrará as configurações
                ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Especificações básicas</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Processador</th>
                            <td>
                                <? echo $cpu?>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Memoria RAM</th>
                            <td>
                                <? echo $ram?>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Armazenamento</th>
                            <td>
                                <? echo $rom?>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Placa de video dedicada</th>
                            <td>
                                <? 
                               if (isset($video)) {
                                  echo $video;
                                }else
                                echo "-";
                                ?>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Resolução da tela</th>
                            <td>
                                <?
                                if (isset($tela)) {
                                    echo $tela;
                                }else
                                echo "-";
                                ?>
                            </td>

                        </tr>
                    </tbody>
                </table>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div><br><br>

            </div>


        </div>
        <div class="container">

            <div class="row text-center">
                <div class="col">

                    <div class="text-center">
                        <div class="alert alert-success" role="alert">Obrigado por utilizar nosso aplicativo. Por favor, se encontrar qualquer erro no site, me informe através do meu whatsapp, clicando no botão abaixo:</div><br>
                            <a class="btn btn-outline-primary" href="https://wa.me/5594991653451" role="button">Clique aqui</a><br><br>
                        <p class="pre-wrap masthead-subheading">Mais informações sobre o desenvolvedor:<br><a href="https://antoniodevsites.com.br">Site oficial</a></p><br><br>

                        <a class="btn btn-primary" href="https://antoniodevsites.com.br/descubraseupc" role="button">Fazer nova consulta</a>

                    </div>

                </div>
            </div><br>

        </div>
    </section>



    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">AUTOR DO PROJETO</h4>
                    <p class="pre-wrap lead mb-0">Antonio de Sousa Figueiredo Neto</p>
                    <p class="pre-wrap lead mb-0">Email: antoniozdm@icloud.com</p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="mb-4">CONTATO</h4><a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/5594991653451" target="_blank"><i class="fab fa-fw fa-whatsapp"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/antoniodevsites" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="mb-4">PROJETOS</h4>
                    <p class="pre-wrap lead mb-0"><a href="https://antoniodevsites.com.br">Antonio DevSites</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <section class="copyright py-4 text-center text-white">
        <div class="container"><small class="pre-wrap">Copyright © 2019-2021 Descubra seu PC - Todos os direitos reservados. </small></div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>



    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170218734-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-170218734-1');
    </script>



</body>

</html>