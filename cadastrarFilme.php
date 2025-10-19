<?php
include_once 'connect.php';
// Capturando dados do formulário de cadastro de usuário
$nome = $_POST['nome'];
$arquivo = $_FILES['arquivo'];
$trailer = $_POST['trailer'];
$diretor = $_POST['diretor'];
$sinopse = $_POST['sinopse'];

$pasta = "img/";

$imagem = $arquivo['name'];
$novoarquivo = uniqid('filme');

$extensao = strtolower(PATHINFO($imagem, PATHINFO_EXTENSION));

$path = $pasta . $novoarquivo . "." . $extensao;

$enviar = move_uploaded_file($arquivo["tmp_name"], $path);

// Query para inserir os dados de cadastro de usuário no banco de dados(BD)
$sql = "INSERT INTO filmes (nome_filme, arquivo, trailer, imagem, diretor, sinopse) VALUES (?, ?, ?, ?, ?, ?)";
/*Instrução statement para preparar, carregar e executar o registro no BD  */
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssss', $nome, $novoarquivo, $trailer, $path, $diretor, $sinopse);
$stmt->execute();
/* Fecha o statement e a conexão com o BD */
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Cadastrar Filme</title>
</head>

<body>
    <main>
        <!-- <section class="img-msg">
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
            </div> -->

        </section>
        <section class="cad-login">
            <div class="form">
                <div class="log">
                    <a href="adoroCinema.html"><img src="img/adorocinema.png" alt="adorocinema"></a>
                </div>
                <div class="boas-vindas">
                    <h1>Filme cadastrado com sucesso!</h1>
                    <p>Verifique as informações do mais novo conteúdo do adoroCinema.</p>
                </div>

                <div class="termos">
                    <p class="entrar">Continuar a cadastrar! <a href="dashboardFilmes.php"><span>Voltar</span></a>
                    </p>
                </div>
            </div>
        </section>
    </main>

</body>

</html>