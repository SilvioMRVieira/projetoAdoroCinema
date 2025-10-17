<?php
session_start(); //inicia a sessão
include("connect.php"); //conecta no BD
// variável para receber o comando de select
$sql = "SELECT * FROM usuarios";
/*Instrução statement para preparar, carregar e executar o registro no BD  */
$stmt = $conn->prepare($sql);
$stmt->execute();
// envia os  dados carregados no statemente na variavelresult 
$result = $stmt->get_result();

if ($result->num_rows > 0) { //processa o result enquanto a quantidade de linhas for maior que 0

  while ($users = $result->fetch_assoc()) { //monta um array associativo com os dados solicitados

    $conta = $users['email'];
    $pass = $users['senha'];
    $level = $users['nivel'];
    $nome = $users['nome_usuario'];

    $email = $_POST['email'];
    $senha = $_POST['senha'];  

    // verifica se os dados enviados pelo formulário com o método post estão de acordo com os registros do banco de dados da tabela usuários
    if ($conta === $email && $pass === $senha && $level === 'usuario') { //verificação de usuario
      // cria a session
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      $_SESSION['nome_usuario'] = $nome;

      // echo $email;

      header(header: 'location: index.php'); //carrega o portal
      exit;
    } 
    if ($conta === $email && $pass === $senha && $level === 'gestor') { //verificação de usuario
      // cria a session
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      $_SESSION['nome_usuario'] = $nome;

      header(header: 'location: dashboard.php'); //carrega o portal
      exit;
    } 
    if ($conta === $email && $pass === $senha) { //verificação de usuario
      // cria a session
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      $_SESSION['nome_usuario'] = $nome;

      header(header: 'location: index.php'); //carrega o porta
      exit;
    }   
  }
}
  if (empty($_SESSION['email'])) {
      $_SESSION['msg_erro'] = "Login ou senha incorretos. Tente novamente";
      var_dump($_SESSION['msg_erro']);
      // header("Location: login.php");
      exit;
    }

// header(header: 'location: usuarioNaoCadastrado.html');//caso não seja localizado o usuário ou suas informações não confiram com o registro do BD, apresenta a mensagem de usuário não cadastrado