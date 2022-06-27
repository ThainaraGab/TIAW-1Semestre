<?php
session_start();
include_once("conexão.php");
?>
<!DOCTYPE hmtl>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelf-Tech</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.css"
        integrity="sha512-m3pAvNriL711NMlhkZHK6K4Tu2/RjtrzyjxZU8mlAbxxoDoURy27KajN1LGTLeEEPvaN12mKAgSCrYEwF9y0jA=="
        crossorigin="anonymous" />

    
    <link rel="stylesheet" href="style.css">
</head>
<body> 
     <header id="header" class="shadow bg-light">
        <nav class="container navbar">
            <a href="/index.html" class="nav-brand text-dark">
                Shelf-Tech
            </a>

            
            <button class="toggle-button">
                <span><i class="fas fa-bars"></i></span>
            </button>

            
            <div class="collapse">
                <ul class="navbar-nav">
                    <a href="index.html" class="nav-link">Home</a>
                    <a href="envio.html" class="nav-link">Artigos</a>
                    <a href="newslatter.html" class="nav-link">Newslatter</a>
                </ul>
            </div>

            
            <div class="collapse">
                <ul class="navbar-nav">
                    <div class="search-box">
                        <a href="#" class="nav-link"><i class="fas fa-search"></i></a>
                    </div>
                    <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="nav-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="nav-link"><i class="fab fa-dribbble"></i></a>
                </ul>
            </div>
        </nav>
    </header>



<main id="site-main">
    <h2>Enviar Mensagem</h2>
    <?php if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);    
    }
    $pagina_atual = filter_input(INPUT_GET,'pagina',
    FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina=atual : 1;

    $qnt_result_pg = 10;

    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

    $result_contatos_msgs =  "SELECT * FROM contatos_msgs Limit $inicio,$qnt_result_pg";
    $resultado_contatos_msgs = mysqli_query($conn, $result_contatos_msgs);
    while($row_contatos_msg = mysqli_fetch_assoc($resultado_contatos_msgs)){
        
        echo "Nome: " . $row_contatos_msg['nome'] . "<br>";
        echo "E-mail: " . $row_contatos_msg['email'] . "<br>";
        echo "Website: " . $row_contatos_msg['website'] . "<br>";
        echo "Mensagem: " . $row_contatos_msg['mensagem'] . "<br><hr>";
    }

    $result_pg = "SELECT COUNT(id) AS num_result FROM contatos_msgs";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    echo "Quantidades de resultados: ";
    echo $row_pg['num_result'];

    ?>
    
    </h2>
</main>

<footer id="footer">
        <div class="container">
            <div class="row mb-3">
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Sobre nós</h2>

                    <div class="secondary-title text-secondary">
                        <p class="mt-2 ">
                            Somos um grupo que busca trazer informações relevante sobre o mundo da tecnologia.
                        </p>

                        <address>
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            Av. Afonso Vaz de Melo, 1200 - Barreiro, Belo Horizonte - MG, 30640-070
                        </address>

                        <div class="phone">
                            <i class="fas fa-mobile text-primary"></i>
                            (31) 1234-5678
                        </div>

                        <div class="email">
                            <i class="fas fa-envelope text-primary"></i>
                            support@shelftech.com.br
                        </div>

                    </div>
                </div>
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Últimas postagens</h2>

                    <div class="feature-post">
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="./assets/postagem 1.png" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                Com qual idade começar a programar?
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Segunda 02, 2022 </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="./assets/postagem 2.png" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                'Hello World' em várias linguagens!
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Segunda 02, 2022 </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                        <div class="flex-item">
                            <article class="article">
                                <div class="d-flex">
                                    <a href="#">
                                        <img src="./assets/postagem 3.png" class="object-fit px-1" alt="">
                                        <div class="px-1">
                                            <a href="#" class="text-title display-2 text-dark">
                                                Framework: o que é e pra que serve essa ferramenta?
                                            </a>
                                            <p class="secondary-title text-secondary display-3">
                                                <span><i class="far fa-clock text-primary"></i> Segunda 02, 2022 </span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <h2 class="footer-title secondary-title">Tags</h2>

                    <div class="tags">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="nav-link btn bg-light">Em alta</a>
                            <a href="#" class="nav-link btn bg-light">Front-end</a>
                            <a href="#" class="nav-link btn bg-light">technology</a>
                            <a href="#" class="nav-link btn bg-light">Back-end</a>
                        </div>
                    </div>

                    <h2 class="footer-title secondary-title mt-2">Social</h2>

                    <div class="tags social">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="nav-link btn bg-light"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            
            <div class="copyrights">
                <p class="text-center text-secondary display-2">
                    © 2022 <a href="#" class="text-primary">Shelf-Tech</a> - Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
        crossorigin="anonymous"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"
        integrity="sha512-1LlEYE0qExJ/GUfAJ0k2K2fB5sIvMv/q6ueo3syohvQ3ElWDQVSMUOf39cxaDWHtNu7M6lF6ZC1H6A1m3SvheA=="
        crossorigin="anonymous"></script>

    
    <script src="main.js"></script>
 

 </body>
</html>
