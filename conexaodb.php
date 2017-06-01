<?php

function conectaDB() {

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "ecopontos_2";

    $con = mysqli_connect($host, $usuario, $senha, $db);

    if (mysqli_connect_errno()) {
        echo "Erro ao acessar banco de dados" . mysqli_connect_error();
    } else {
        return $con;
    }
}
?>