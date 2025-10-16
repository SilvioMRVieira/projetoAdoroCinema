<?php
// Inclui o arquivo de conexão ao DB
include 'connect.php';
// Capturando dados do formulário de cadastro de usuário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

// Query para inserir os dados de cadastro de usuário no banco de dados(BD)
$sql = "INSERT INTO usuarios (nome, cpf, email, senha, nivel) VALUES ( ?, ?, ?, ?, ?)";
/*Instrução statement para preparar, carregar e executar o registro no BD  */
$stmt = $conn->prepare($sql);
$stmt->bind_param('sssss', $nome, $cpf, $email, $senha, $nivel);
$stmt->execute();
/* Fecha o statement e a conexão com o BD */
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stilus.css">
    <title>Cadastrado</title>
</head>

<body>
    <div id="msgCadastro">
        <h1>Usuário(a)
            <?php echo $nome ?> cadastrado com sucesso!</h1>
        <!-- Retorna para página de cadastro de usuário -->
        <a href="/coude-23/Projetos/Projeto01/cadastrarUser.html"><button class="msgCad">Voltar</button></a>
    </div>

</body>

</html>