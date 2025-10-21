<?php

session_start();
include_once('back-end/connect.php');
$sql = "SELECT * FROM filmes";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/container.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="stylesheet" href="css/estreia.css">
    <link rel="stylesheet" href="css/noticias.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Adoro Cinema</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <header>
        <div class="logoBusca">
            <div class="logo">
                <a href="index.html"><img src="img/adorocinema.png" alt="logoAdoroCinema"></a>
            </div>
            <div class="busca">
                <div class="container">
                    <div class="container-busca">
                        <input type="text" placeholder="Procurar por um filme, uma série, uma personalidade...">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                    <div>
                        <h6>Ex.: <a href="#">Quarteto-Fantástico</a>, <a href="#">Superman</a>, <a href="#">The Last Of
                                Us</a>,...</h6>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="nav-texto">
        <nav class="nav-header">
            <ul class="nav-links">
                <li><a href="filmes">FILMES</a></li>
                <li><a href="programacao">PROGRAMAÇÃO</a></li>
                <li><a href="trailer">TRAILER</a></li>
                <li><a href="noticias">NOTICIAS</a></li>
                <li><a href="series">SÉRIES</a></li>
                <li><a href="televisao">TELEVISÃO</a></li>
                <li><a href="filmesonline">FILMES ONLINE</a></li>
                <li><a href="novelas">NOVELAS</a></li>
            </ul>
            <ul class="dropdown">
                <li><a class="minha-conta" href="minhaConta">
                        <?php echo " " . $_SESSION['nome_usuario']; ?>
                    </a></li>
                <div class="dropdown-content login">
                    <a href="back-end/logout.php">SAIR</a>
                    <!-- <a class="criar-conta" href="cadUser.html">CRIAR UMA CONTA</a> -->
                </div>
            </ul>
        </nav>
        <div class="texto">Descubra nossa busca por <a href="programacao">horários de filmes</a>, as <a
                href="noticias">notícias</a> e
            <a href="materias">matérias especiais</a> de cinema, os <a href="ultimas">últimos trailers</a> e mais...
        </div>
    </div>

    <main>
        <section class="section-first">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <!-- Primeiro carrossel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="   <?php
                                        $sql = "SELECT * FROM filmes where id_filme = 2"; //Select na tabela de alunos
                                        $result = mysqli_query($conn, $sql);
                                        while ($filme = mysqli_fetch_assoc($result)) {
                                            echo $filme['imagem'];
                                        }
                                        ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>"<?php
                                    $sql = "SELECT * FROM filmes where id_filme = 2"; //Select na tabela de alunos
                                    $result = mysqli_query($conn, $sql);
                                    while ($filme = mysqli_fetch_assoc($result)) {
                                        echo $filme['nome_filme'];
                                    }
                                    ?>"</h4>
                            <p><?php
                                $sql = "SELECT * FROM filmes where id_filme = 2"; //Select na tabela de alunos
                                $result = mysqli_query($conn, $sql);
                                while ($filme = mysqli_fetch_assoc($result)) {
                                    echo $filme['sinopse'];
                                }
                                ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="   <?php
                                        $sql = "SELECT * FROM filmes where id_filme = 5"; //Select na tabela de alunos
                                        $result = mysqli_query($conn, $sql);
                                        while ($filme = mysqli_fetch_assoc($result)) {
                                            echo $filme['imagem'];
                                        }
                                        ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>"<?php
                                    $sql = "SELECT * FROM filmes where id_filme = 5"; //Select na tabela de alunos
                                    $result = mysqli_query($conn, $sql);
                                    while ($filme = mysqli_fetch_assoc($result)) {
                                        echo $filme['nome_filme'];
                                    }
                                    ?>"</h4>
                            <p><?php
                                $sql = "SELECT * FROM filmes where id_filme = 5"; //Select na tabela de alunos
                                $result = mysqli_query($conn, $sql);
                                while ($filme = mysqli_fetch_assoc($result)) {
                                    echo $filme['sinopse'];
                                }
                                ?></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="   <?php
                                        $sql = "SELECT * FROM filmes where id_filme = 1"; //Select na tabela de alunos
                                        $result = mysqli_query($conn, $sql);
                                        while ($filme = mysqli_fetch_assoc($result)) {
                                            echo $filme['imagem'];
                                        }
                                        ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>"<?php
                                    $sql = "SELECT * FROM filmes where id_filme = 1"; //Select na tabela de alunos
                                    $result = mysqli_query($conn, $sql);
                                    while ($filme = mysqli_fetch_assoc($result)) {
                                        echo $filme['nome_filme'];
                                    }
                                    ?>"</h4>
                            <p><?php
                                $sql = "SELECT * FROM filmes where id_filme = 1"; //Select na tabela de alunos
                                $result = mysqli_query($conn, $sql);
                                while ($filme = mysqli_fetch_assoc($result)) {
                                    echo $filme['sinopse'];
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- cards widescreen -->
        <section class="card-img">
            <div class="carousel-container">
                <div class="carousel" id="carousel">
                    <div class="carousel-slide slide1">
                        <img src="img/odeio-cinema.jpg" alt="">
                        <div class="card-texto">
                            <p>Quais são as teorias mais bizarras sobre filmes?
                                Confira o debate no OdeioCinema!</p>
                        </div>
                    </div>

                    <div class="carousel-slide slide2">
                        <img src=" <?php
                                    $sql = "SELECT * FROM filmes where id_filme = 3"; //Select na tabela de alunos
                                    $result = mysqli_query($conn, $sql);
                                    while ($filme = mysqli_fetch_assoc($result)) {
                                        echo $filme['imagem'];
                                    }
                                    ?>" alt="">
                        <div class="card-texto">
                            <p><?php
                                $sql = "SELECT * FROM filmes where id_filme = 3"; //Select na tabela de alunos
                                $result = mysqli_query($conn, $sql);
                                while ($filme = mysqli_fetch_assoc($result)) {
                                    echo $filme['sinopse'];
                                }
                                ?> </p>
                        </div>
                    </div>
                    <div class="carousel-slide slide3">
                        <img src="img/monstro.jpg" alt="">
                        <div class="card-texto">
                            <p>Compare o serial killer de Monstro: A História de Ed Gein com o assasino real</p>
                        </div>
                    </div>
                    <div class="carousel-slide slide4">
                        <img src=" <?php
                                    $sql = "SELECT * FROM filmes where id_filme = 4"; //Select na tabela de alunos
                                    $result = mysqli_query($conn, $sql);
                                    while ($filme = mysqli_fetch_assoc($result)) {
                                        echo $filme['imagem'];
                                    }
                                    ?>" alt="">
                        <div class="card-texto">
                            <p><?php
                                $sql = "SELECT * FROM filmes where id_filme = 4"; //Select na tabela de alunos
                                $result = mysqli_query($conn, $sql);
                                while ($filme = mysqli_fetch_assoc($result)) {
                                    echo $filme['sinopse'];
                                }
                                ?> </p>
                        </div>
                    </div>
                </div>
                <!-- SETAS DENTRO DO CONTAINER -->
                <button class="carousel-arrow arrow-left" id="arrowleft" onclick="moveCarousel(-1)">
                    ❮
                </button>
                <button class="carousel-arrow arrow-right" id="arrowleft" onclick="moveCarousel(1)">
                    ❯
                </button>
            </div>

        </section>
        <section id="filmes">
            <div class="barra-top"></div>
            <div class="titulo-filmes">
                <h1>Filmes</h1>
            </div>
            <nav class="lista-filmes">
                <ul class="lista-itens">
                    <li>Filmes mais populares</li>
                    <li>Melhores filmes de comédia</li>
                    <li>Melhores filmes de ação</li>
                    <li>Melhores filmes de crianças</li>
                </ul>
                <div class="dropdown-lista">
                    <button onclick="myFunction()" id="botao" class="dropbtn">+</button>
                    <div id="myDropdown" class="dropdown-content">
                        <li><a href="agenda">Agenda de estreias</a></li>
                        <li><a href="melhores">Melhores filmes em cartaz</a></li>
                        <li><a href="bilheteria">Bilheterias do cinema</a></li>
                        <li><a href="criancas">Filmes para criança em cartaz</a></li>
                        <li><a href="comedia">Filmes de comédia mais populares</a></li>
                        <li><a href="acao">Filmes de ação mais populares</a></li>
                        <li><a href="todosCriancas">Todos os filmes para crianças</a></li>
                        <li><a href="trailers">Trailers de filmes</a></li>
                        <li><a href="breve">Trailers de filmes em breve</a></li>
                    </div>
                </div>
            </nav>
            <div id="cep">
                <div class="input-cep">
                    <input type="text" placeholder="Cidade ou CEP">
                    <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
                <div class="pesquisa-login">
                    <h5><a href="Login">Faça login para pesquisar seus cinemas favoritos</a></h5>
                </div>
            </div>
            <div class="container-esperados">
                <div class="estreia">
                    <div class="item-titulo">
                        <div class="bar-left"></div>
                        <h3>Estreias da semana</h3>
                    </div>
                    <!-- card padrão -->
                    <section class="carousel-estreia">
                        <div class="container-estreias show1234">
                            <div class="imagem slide1">
                                <div class="cardImagem">
                                    <img src="<?php
                                                $sql = "SELECT * FROM filmes where id_filme = 6"; //Select na tabela de alunos
                                                $result = mysqli_query($conn, $sql);
                                                while ($filme = mysqli_fetch_assoc($result)) {
                                                    echo $filme['imagem'];
                                                }
                                                ?>" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1"><?php
                                                        $sql = "SELECT * FROM filmes where id_filme = 6"; //Select na tabela de alunos
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($filme = mysqli_fetch_assoc($result)) {
                                                            echo $filme['sinopse'];
                                                        }
                                                        ?></p>
                                    <p class="linha2"><?php
                                                        $sql = "SELECT * FROM filmes where id_filme = 6"; //Select na tabela de alunos
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($filme = mysqli_fetch_assoc($result)) {
                                                            echo $filme['diretor'];
                                                        }
                                                        ?></p>
                                </div>
                            </div>
                            <div class="imagem slide2">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/estranhos.webp" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Os Estranhos: Ca...</p>
                                    <p class="linha2">De Renny Harlin</p>
                                </div>
                            </div>
                            <div class="imagem slide3">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/kygo.jpg" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Kygo: Back at th...</p>
                                    <p class="linha2">De Sam Wrench</p>
                                </div>
                            </div>
                            <div class="imagem slide4">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/Nezha2.jpg" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Ne Zha 2: O Rena...</p>
                                    <p class="linha2">De Yu Yang</p>
                                </div>
                            </div>
                            <div class="imagem slide5">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/atosMoises.webp" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">3 Atos de Moisés</p>
                                    <p class="linha2">De Diretor Desconheci...</p>
                                </div>
                            </div>
                            <div class="imagem slide6">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/misty.webp" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Misty: A História...</p>
                                    <p class="linha2">De Georges Gachot </p>
                                </div>
                            </div>
                            <div class="imagem slide7">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/paraiso.jpg" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Paraíso em Cha...</p>
                                    <p class="linha2">De Mika Gustafson</p>
                                </div>
                            </div>
                            <div class="imagem slide8">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/zoopocalipse.jpg" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Zoopocalipse - U...</p>
                                    <p class="linha2">De Ricardo Curtis, Rodri...</p>
                                </div>
                            </div>
                            <div class="imagem slide9">
                                <div class="cardImagem">
                                    <img src="img/carouselEstreias/parisTexas.jpg" alt="">
                                    <h1 class="legenda">Sessões</h1>
                                </div>
                                <div class="nomeFilme">
                                    <p class="linha1">Paris, Texas</p>
                                    <p class="linha2">De Wim Wenders</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn-prev">
                            ❮ </button>
                        <button class="btn-next"> ❯ </button>
                        <div class="btn-lancamentos">
                            <button><a href="lancamentos">Todos os lançamentos da semana</a></button>
                        </div>
                    </section>

                </div>

                <div class="cartaz">
                    <div class="item-titulo">
                        <div class="bar-left"></div>
                        <h3>Em cartaz</h3>
                    </div>
                    <div class="cartaz-card">
                        <div class="card-cartaz">
                            <div class="imgSombra">
                                <img src="img/cartaz/slayer.jpg" alt="">
                                <h1 class="legenda">Sessões</h1>
                            </div>
                            <div class="cartazFilme">
                                <p class="linha1">Damon Slayer: Ki...</p>
                                <p class="linha2">De Haruo Sotozaki </p>
                            </div>
                        </div>
                        <div class="card-cartaz">
                            <div class="imgSombra">
                                <img src="img/cartaz/invocacao.webp" alt="">
                                <h1 class="legenda">Sessões</h1>
                            </div>
                            <div class="cartazFilme">
                                <p class="linha1">Invocação do Ma...</p>
                                <p class="linha2">De Michael Chaves </p>
                            </div>
                        </div>
                        <div class="card-cartaz">
                            <div class="imgSombra">
                                <img src="img/cartaz/grandeViagem.jpg" alt="">
                                <h1 class="legenda">Sessões</h1>
                            </div>
                            <div class="cartazFilme">
                                <p class="linha1">A Grande Viage...</p>
                                <p class="linha2">De Kogonada </p>
                            </div>
                        </div>
                        <div class="card-cartaz">
                            <div class="imgSombra">
                                <img src="img/cartaz/sogra.jpg" alt="">
                                <h1 class="legenda">Sessões</h1>
                            </div>

                            <div class="cartazFilme">
                                <p class="linha1">A Sogra Perfeita 2</p>
                                <p class="linha2">De Cris D'Amato </p>
                            </div>
                        </div>
                    </div>
                    <div class="btn-cartaz">
                        <button><a href="filmesCartaz">Todos os filmes em cartaz</a></button>
                    </div>
                </div>
            </div>

            <div class="mais-esperados">
                <div class="esperados">
                    <div class="item-titulo">
                        <div class="bar-left"></div>
                        <h3>Mais esperados</h3>
                    </div>
                    <p>Os lançamentos mais aguardados</p>
                    <div class="imgEsperados">
                        <img src="img/esperados/seNaoFosseVoce.jpg" alt="">
                        <p>Se Não Fosse Você</p>
                    </div>
                    <div class="esperados-lista">
                        <ul>
                            <li><a href="#">O Agente Secreto</a></li>
                            <li><a href="#">Nossa Culpa</a></li>
                            <li><a href="#">Coração de Lutador: The Smashing Machine</a></li>
                            <li><a href="#">Predador: Terras Selvagens</a></li>
                            <li><a href="#">O Telefone Preto 2</a></li>
                            <li><a href="#">Tron: Ares</a></li>
                            <li><a href="#">Missão Pet</a></li>
                            <li><a href="#">Malês</a></li>
                            <li><a href="#">Anaconda</a></li>
                        </ul>
                    </div>

                </div>
                <div class="btn-esperados">
                    <button><a href="proximosLacamentos">Todos os próximos lançamentos</a></button>
                </div>
            </div>

            <div class="card-pesquisa">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScJ_V048RhWrMWi9RLJmDKKbIioTSBKyyyDq5p3xcOOXmKMbQ/viewform"
                    target="_blank"><img src="img/esperados/25anos.webp" alt=""></a>
            </div>
            <div class="ultimas-noticias">
                <div class="item-titulo">
                    <div class="bar-left"></div>
                    <h3>Últimas notícias de filmes</h3>
                </div>
                <div class="ultimas-um">
                    <div class="noticias">
                        <img src="img/noticias/olharMisterioso.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Festivais e Premiações</p>
                        <p class="texto-descricao">Festival do Rio 2025: 5 filmes LGBTQIAP+ que serão exibidos durante o
                            grande evento carioca</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                    <div class="noticias">
                        <img src="img/noticias/frankstein.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Lançamentos</p>
                        <p class="texto-descricao">Irreconhecível! Trailer final de Frankenstein revela visual de Jacob
                            Elordi como a criatura do filme de terror de Guillermo del Toro</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                    <div class="noticias">
                        <img src="img/noticias/lucicreide.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Visto na Web</p>
                        <p class="texto-descricao">Qual é o filme da Sessão da Tarde hoje(01/10)? Lucicreide Vai Pra
                            Marte tem uma conexão inesperada com Tom Cruise</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                </div>
                <div class="ultimas-dois">
                    <div class="noticias">
                        <img src="img/noticias/gattaca.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Visto na Web</p>
                        <p class="texto-descricao">Todo fã de ficção científica já deve ter visto este filme sobre uma
                            visão aterrorizante do futuro: Está no streaming!</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                    <div class="noticias">
                        <img src="img/noticias/outron.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Visto na Web</p>
                        <p class="texto-descricao">Agora no streaming: Um dos melhores filmes dos últimos anos que
                            poucos viram</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                    <div class="noticias">
                        <img src="img/noticias/thor.jpeg" alt="">
                        <p class="texto-noticia">NOTÍCIAS - Personalidades</p>
                        <p class="texto-descricao">Todos os três filhos de Chris Hemsworth apareceram no último filme do
                            Thor: Você os reconheceu?</p>
                        <p class="data">segunda, 13 de outubro de 2025</p>
                    </div>
                </div>
                <div class="btn-ultimas">
                    <button><a href="">Todas as noticias de filmes</a></button>
                    <button><a href="">Todas as matérias especiais</a></button>
                </div>
                <!-- Arquivo de video para o trailer -->
                <div class="trailers">
                    <div class="item-titulo">
                        <div class="bar-left"></div>
                        <h3>Trailers</h3>
                    </div>
                    <div class="trailers-card">
                        <div class="grid">
                            <div class="grid-container">
                                <div class="grid-item-one">
                                    <div class="video">
                                        <?php
                                        $sql = "SELECT trailer FROM filmes where id_filme = 5";
                                        $result = mysqli_query($conn, $sql);
                                        while ($filme = mysqli_fetch_assoc($result)) {
                                            echo $filme['trailer'];
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="grid-item-two">
                                    <div class="card-trailers">
                                        <div class="card-trailer">
                                            <img src="img/trailers/gladiador.jpg" alt="">
                                            <div class="play-button-circle"></div>
                                            <p>Gladiador 2 Trailer...</p>
                                        </div>
                                        <div class="card-trailer">
                                            <img src="img/trailers/cinza.webp" alt="">
                                            <div class="play-button-circle"></div>
                                            <p>Cinquenta Tons De...</p>
                                        </div>
                                        <div class="card-trailer">
                                            <img src="img/trailers/dragon.jpg" alt="">
                                            <div class="play-button-circle"></div>
                                            <p>Dragon Ball Daima...</p>
                                        </div>
                                        <div class="card-trailer">
                                            <img src="img/trailers/steve.jpg" alt="">
                                            <div class="play-button-circle"></div>
                                            <p>Steve Trailer Dubla...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item-three"></div>
                            </div>
                        </div>

                    </div>
                    <div class="btn-trailers">
                        <button><a href="">Todos os trailers</a></button>
                    </div>
                </div>

                <div class="ultimas-criticas">
                    <div class="item-titulo">
                        <div class="bar-left"></div>
                        <h3>Nossas últimas críticas</h3>
                    </div>
                    <div class="card-criticas">
                        <div class="img-criticas">
                            <img src="img/criticas/salverosa.jpg" alt="">
                            <p class="card-title">#SalveRosa</p>
                            <p class="direcao">De Susanna Lira</p>
                            <span class="estrelas">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                        </div>
                        <div class="img-criticas">
                            <img src="img/criticas/morraAmor.webp" alt="">
                            <p class="card-title">Morra, Amor</p>
                            <p class="direcao">De Lynne Ramsay</p>
                            <span class="estrelas">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                        </div>
                        <div class="img-criticas">
                            <img src="img/criticas/telefonePreto.jpg" alt="">
                            <p class="card-title">O Telefone Preto 2</p>
                            <p class="direcao">De Scott Derrickson</p>
                            <span class="estrelas">&#9733;&#9733;&#9734;&#9734;&#9734;</span>
                        </div>
                        <div class="img-criticas">
                            <img src="img/criticas/twinLess.webp" alt="">
                            <p class="card-title">Twinless</p>
                            <p class="direcao">De James Sweeney (II)</p>
                            <span class="estrelas">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                        </div>
                        <div class="img-criticas">
                            <img src="img/criticas/honeyNao.webp" alt="">
                            <p class="card-title">Honey, Não!</p>
                            <p class="direcao">De Ethan Coen</p>
                            <span class="estrelas">&#9733;&#9733;&#9733;&#9733;&#9734;</span>
                        </div>
                        <div class="img-criticas">
                            <img src="img/criticas/mauricioSousa.jpg" alt="">
                            <p class="card-title">Mauricio de Sousa...</p>
                            <p class="direcao">De Pedro Vasconcelos</p>
                            <span class="estrelas">&#9733;&#9733;&#9733;&#9734;&#9734;</span>
                        </div>
                    </div>
                    <div class="btn-criticas">
                        <button><a href="">Todas as últimas críticas</a></button>
                    </div>
                </div>
        </section>
        <section class="streaming">
            <div class="barra-top"></div>
            <div class="titulo-filmes">
                <h1>Streaming</h1>
                <p>Acesse os conteúdos do catálogo da sua plataforma favorita</p>
            </div>
            <div class="logo-streaming">
                <div class="logo-nome">
                    <img src="img/streaming/prime.png" alt="">
                    <p>Prime Video</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/disney.png" alt="">
                    <p>Disney+</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/netflix.png" alt="">
                    <p>Netflix</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/globoplay.png" alt="">
                    <p>GloboPlay</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/hbo.png" alt="">
                    <p>HBO Max</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/mgm.png" alt="">
                    <p>MGM</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/Looke.png" alt="">
                    <p>Looke</p>
                </div>
                <div class="logo-nome">
                    <img src="img/streaming/apple.png" alt="">
                    <p>Apple TV+</p>
                </div>

            </div>
            <div class="grid">
                <div class="grid-streaming">
                    <div class="grid-stm1">
                        <div class="item-titulo">
                            <div class="bar-left"></div>
                            <h3>Trailers de streamings</h3>
                        </div>
                        <div class="trailer">
                            <iframe width="660" height="350"
                                src="https://www.youtube.com/embed/wVqwoGwmR_I?si=55JUN9EfZhvO4ibz"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="grid-stm2">
                        <div class="card-stm">
                            <img src="img/streaming/mulherCabine.webp" alt="">
                            <div class="play-button-circle"></div>
                            <p>Mulher na Cabin...</p>
                        </div>
                        <div class="card-stm">
                            <img src="img/streaming/gladiador2.jpg" alt="">
                            <div class="play-button-circle"></div>
                            <p>Gladiador 2 Trailer...</p>
                        </div>
                        <div class="card-stm">
                            <img src="img/streaming/steve.jpg" alt="">
                            <div class="play-button-circle"></div>
                            <p>Steve Trailer Dubla...</p>
                        </div>
                        <div class="card-stm">
                            <img src="img/streaming/babygirl.webp" alt="">
                            <div class="play-button-circle"></div>
                            <p>Babygirl Trailer Ori...</p>
                        </div>
                    </div>
                    <div class="grid-stm3"></div>
                    <div class="grid-stm4"></div>
                    <div class="grid-stm5"></div>
                </div>
            </div>




        </section>

    </main>
    <script src="js/script.js"></script>
    <script src="js/carrossel.js"></script>
    <script src="js/estreias.js"></script>
</body>

</html>