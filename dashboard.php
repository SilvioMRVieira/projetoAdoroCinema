<?php

session_start();
include_once('connect.php');
$sql = "SELECT * FROM usuarios"; //Select na tabela de alunos
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-grid">
        <header>
            <div class="logo-dash">
                <img src="img/adorocinema.png" alt="">
            </div>
            <div class="group-icon">
                <div class="user-dash">
                    <h3> <?php echo " " . $_SESSION['nome_usuario']; ?></h3>
                </div>
                <div class="icon">
                    <a href="dashboard.php" target="_blank"><i class="fa-regular fa-house"></i></a>
                </div>
                <button><a href="logout.php">Sair</a></button>

            </div>

        </header>
        <aside>
            <ul>
                <a href="dashboardUser.php">
                    <li>Usuários</li>
                </a>
                <a href="dashboardCategorias.php">
                    <li>Categorias</li>
                </a><a href="dashboardFilmes.php">
                    <li>Filmes</li>
                </a>
                <a href="dashboardSeries.php">
                    <li>Séries</li>
                </a>

            </ul>
        </aside>
        <main>
            <section class="welcome">
                <h1>Bem-vindo</h1>
                <p>Área de configuração do conteúdo da plataforma adoroCinema</p>
                <img src="img/pngegg.webp" alt="">
            </section>

        </main>
    </div>


</body>

</html>