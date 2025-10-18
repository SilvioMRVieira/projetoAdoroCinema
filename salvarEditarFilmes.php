<?php
include "connect.php";
// Condição para que o update seja verificado no formulário html, na busca dos dados de atualização
if (isset($_POST['update'])) { //se existe dados em update

    $id = $_POST['id']; //informa o id do registro a ser atualizado
    $filme = $_POST['nome']; //informa a nota a ser alterada
    $arquivo = $_FILES['arquivo'];
    $trailer = $_POST['trailer'];
    $diretor = $_POST['diretor'];
    $sinopse = $_POST['sinopse'];

    $pasta = "img/";

    $imagem =  $arquivo['name'];
    $novoarquivo = uniqid('filme');

    $extensao = strtolower(PATHINFO($imagem, PATHINFO_EXTENSION));

    $path = $pasta . $novoarquivo . "." . $extensao;

    $enviar = move_uploaded_file($arquivo["tmp_name"], $path);


    // carraga os parametros de UPDATE na tabela de notas do BD, como id informado pelo post
    $sqlUpdate = "UPDATE filmes SET nome_filme = '$filme', arquivo = '$novoarquivo', imagem = '$path', trailer = '$trailer', diretor = '$diretor', sinopse = '$sinopse' WHERE id_filme = '$id'";

    $result = mysqli_query($conn, $sqlUpdate); //executa a conexão e o comando update
}
// retorna  para o portal do professor
header("Location: dashboardFilmes.php");