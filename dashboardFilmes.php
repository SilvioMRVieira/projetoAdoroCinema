<?php

session_start();
include_once('connect.php');
$sql = "SELECT * FROM filmes"; //Select na tabela de alunos
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/modal.css">
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
                    <a href="dashboard.php"><i class="fa-regular fa-house"></i></a>
                </div>
                <button><a href="logout.php">Sair</a></button>
            </div>
        </header>
        <aside>
            <ul>
                <a href="dashboardUser.php">
                    <li aria-disabled="true">Usuários</li>
                </a>
                <a href="dashboardCategorias.php">
                    <li aria-disabled="true">Categorias</li>
                </a><a href="dashboardFilmes.php">
                    <li style="color: #dc2026;">Filmes</li>
                </a>
                <a href=" dashboardSeries.php">
                    <li aria-disabled="true">Séries</li>
                </a>
            </ul>
            <div>
                <button class="btn_filmes"><i class="fa-solid fa-video"></i></button>
            </div>

        </aside>
        <main>
            <section>
                <div class="tabela">
                    <table>
                        <thead>
                            <tr>
                                <th>Cartaz</th>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Diretor</th>
                                <th>Sinopse</th>
                                <th>Editar</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($filme = mysqli_fetch_assoc($result)) { //montando array associativo
                            ?>

                            <?php echo "<tr>";
                                echo "<td><img style='width: 70px;' src=" . $filme['imagem'] . " alt=''></td>";
                                echo "<td>" . $filme['id_filme'] . "</td>";
                                echo "<td>" . $filme['nome_filme'] . "</td>";
                                // echo "<td>" . $filme['arquivo'] . "</td>";
                                echo "<td>" . $filme['diretor'] . "</td>";
                                echo "<td>" . $filme['sinopse'] . "</td>";
                                echo "<td> <a style='color: #dc2026;' href='editarFilme.php?id_filme=$filme[id_filme];' ><i class='fa-regular fa-pen-to-square'></i></a>
                                <a style='color: #dc2026;' href='deleteFilme.php?id_filme=$filme[id_filme];'><i class='fa-regular fa-trash-can'></i></a> </td>";
                                ?>
                            <?php
                            };
                            ?>

                        </tbody>
                    </table>

                </div>

            </section>

        </main>
        <!-- Modal principal -->
        <dialog id="modal">
            <div id="conteudoModal"></div>
            <button id="fecharModal">Fechar</button>
        </dialog>

        <!-- Modal de confirmação -->
        <dialog id="modalConfirmacao">
            <div id="conteudoModalConfirmacao">
                <!-- Mensagem de confirmação já está aqui -->
                <section class="cad-login">
                    <h2>✓ Cadastro realizado com sucesso!</h2>
                    <p>O filme foi cadastrado no sistema.</p>
                </section>
            </div>
            <button id="fecharModalConfirmacao">OK</button>
        </dialog>

    </div>

    <script src="js/modal.js"></script>

</body>

</html>