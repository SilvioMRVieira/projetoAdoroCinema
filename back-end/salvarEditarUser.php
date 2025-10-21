<?php
include "connect.php";
// Condição para que o update seja verificado no formulário html, na busca dos dados de atualização
if (isset($_POST['update'])) { //se existe dados em update

    $id = $_POST['id']; //informa o id do registro a ser atualizado
    $nome = $_POST['nome']; //informa a nota a ser alterada
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];    


    // carraga os parametros de UPDATE na tabela de notas do BD, como id informado pelo post
    $sqlUpdate = "UPDATE usuarios SET nome_usuario = '$nome', email = '$email', senha = '$senha', nivel = '$nivel' WHERE id_usuario = '$id'";

    $result = mysqli_query($conn, $sqlUpdate); //executa a conexão e o comando update
}
// retorna  para o portal do professor
header("Location: dashboardUser.php");