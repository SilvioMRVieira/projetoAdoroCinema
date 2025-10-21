<?php

session_start();

include_once('connect.php');

if (!empty($_GET['id_usuario'])) {

    $id = $_GET['id_usuario'];

    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while ($usuarios = mysqli_fetch_assoc($result)) {
            $id = $usuarios['id_usuario'];
            $nome = $usuarios['nome_usuario'];
            $email = $usuarios['email'];
            $senha = $usuarios['senha'];
            $nivel = $usuarios['nivel'];
        }
    } else {
        header("Location: dashboardUser.php");
    }
} else {

    header("Location: dashboardUser.php");
};

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Atualizar Usuário</title>
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
                    <h1>Atualizar Usuário</h1>
                </div>
                <form enctype="multipart/form-data" action="salvarEditarUser.php" method="post">
                    <input type="text" name="nome" id="" value="<?php echo $nome ?>">
                    <input type="email" name="email" value="<?php echo $email ?>">
                    <input type="password" name='senha' value='<?php echo $senha ?>'>
                    <div class="radio">
                        <label>
                            <input type="radio" name="nivel" value="usuario"
                                <?php echo $nivel == 'usuario' ? 'checked' : '' ?> required>
                            Usuário
                        </label>

                        <label>
                            <input type="radio" name="nivel" value="gestor"
                                <?php echo $nivel == 'gestor' ? 'checked' : '' ?> required>
                            Gestor
                        </label>

                        <label>
                            <input type="radio" name="nivel" value="admin"
                                <?php echo $nivel == 'admin' ? 'checked' : '' ?> required>
                            Admin
                        </label>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button type="submit" name="update">Atualizar</button>
                </form>
                <div class="termos">
                    <p class="entrar">Lista de usuários <a href="dashboardUser.php"><span>Entre</span></a></p>
                </div>
            </div>
        </section>
    </main>

</body>

</html>