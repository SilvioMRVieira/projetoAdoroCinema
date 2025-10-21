<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
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
                    <a href="adoroCinema.php"><img src="img/adorocinema.png" alt="adorocinema"></a>
                </div>
                <div class="boas-vindas">
                    <h1>bem-vindo(a)</h1>
                    <p>Entre e divirta-se!</p>
                </div>
                <form action="sessao.php" method="post">
                    <input type="email" name="email" placeholder="EMAIL">
                    <input type="password" name="senha" placeholder="SENHA">
                    <button type="submit">Entrar</button>
                </form>
                <div class="termos">
                    <p>Indo adiante, você confirma que aceita as <span>condições gerais de uso</span> na
                        <span>política de privacidade</span>.
                    </p>
                    <p class="entrar">Você não tem uma conta? <a href="cadUser.html"><span>Cadastre-se</span></a>
                    </p>
                </div>
            </div>
        </section>
    </main>

</body>

</html>