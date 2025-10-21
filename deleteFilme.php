<?php

session_start();

include_once('connect.php');

if (!empty($_GET['id_filme'])) {

    $id = $_GET['id_filme'];

    $sql = "SELECT * FROM filmes WHERE id_filme = $id";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM filmes WHERE id_filme = $id";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        }
        header("Location: dashboardFilmes.php");
    };