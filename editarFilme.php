<?php

session_start();

include_once('connect.php');

if(!empty($_GET['id_filme'])) {

    $id = $_GET['id_filme'];

    $sql = "SELECT * FROM filmes WHERE id_filme = $id";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while ($filmes = mysqli_fetch_assoc($result)) {
            $id = $filmes['id_filme'];
            $nome = $filmes['nome_filme'];
            $arquivo = $filmes['arquivo'];
            $trailer = $filmes['trailer'];
            $diretor = $filmes['diretor'];
            $sinopse = $filmes['sinopse'];           
        }
    } else {
        header("Location: dashboardFilmes.php");
    }
} else {

    header("Location: dashboardFilmes.php");
};  

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Atualizar Filme</title>
</head>

<body>
    <main>
        <section class="img-msg">
            <div class="mensagem">
                <div class="img-text">
                    <div class="icon">
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="texto">
                        <p>Avalie os filmes e séries e dê sua opinião</p>
                    </div>
                </div>
                <div class="img-text">
                    <div class="icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="texto">
                        Descubra as avaliações e comentários de seus amigos
                    </div>
                </div>
                <div class="img-text">
                    <div class="icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="texto">
                        Receba boletins informativos regulares que o manterão atualizado sobre novos lançamentos,
                        filmes, séries e o mundo do cinema.
                    </div>
                </div>
                <div class="img-text">
                    <div class="icon">
                        <i class="fa-solid fa-ticket"></i>
                    </div>
                    <div class="texto">
                        Salve seus cinemas favoritos para organizar a sua programação
                    </div>
                </div>
                <div class="img-text">
                    <div class="icon">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </div>
                    <div class="texto">
                        Crie suas coleções de filmes e séries para compartilhar com seus amigos e a comunidade
                        AdoroCinema
                    </div>
                </div>
            </div>

        </section>
        <section class="cad-login">
            <div class="form">
                <div class="log">
                    <a href="adoroCinema.html"><img src="img/adorocinema.png" alt="adorocinema"></a>
                </div>
                <div class="boas-vindas">
                    <h1>cadastro de filme</h1>
                </div>
                <form enctype="multipart/form-data" action="salvarEditarFilmes.php" method="post">
                    <input type="text" name="nome" id="" value="<?php echo $nome ?>">
                    <input type="file" name="arquivo" value="<?php echo $arquivo ?>">
                    <input type="text" name='trailer' value='<?php echo $trailer ?>'>
                    <input type=" text" name="diretor" value="<?php echo $diretor ?>">
                    <input type="text" name="sinopse" value="<?php echo $sinopse ?>">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" name="update">Atualizar</button>
                </form>
                <div class="termos">
                    <p class="entrar">Lista de filmes <a href="dashboardFilmes.php"><span>Entre</span></a></p>
                </div>
            </div>
        </section>
    </main>

</body>

</html>