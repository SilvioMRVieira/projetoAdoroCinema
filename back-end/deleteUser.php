<?php

session_start();

include_once('connect.php');

if (!empty($_GET['id_usuario'])) {

    $id = $_GET['id_usuario'];

    $sql = "SELECT * FROM usuarios WHERE id_usuario = $id";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM usuarios WHERE id_usuario = $id";
        $resultDelete = mysqli_query($conn, $sqlDelete);
        }
        header("Location: dashboardUser.php");
    };