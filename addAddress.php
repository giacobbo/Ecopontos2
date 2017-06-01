<?php

session_start();
require_once 'class/localcoleta.php';
require_once 'conexaodb.php';

if (isset($_SESSION['usuarioID'])) {
    $nome = trim($_POST["nome"]);
    $empresa = trim($_POST["empresa"]);
    $estado = trim($_POST["estado"]);
    $cidade = trim($_POST["cidade"]);
    $bairro = trim($_POST["bairro"]);
    $rua = trim($_POST["rua"]);
    $num = trim($_POST["num"]);
    $complemento = trim($_POST["complemento"]);

    $lc = new Localcoleta($nome, $empresa, $estado, $cidade, $bairro, $rua, $num, $complemento);
    $con = conectaDB();
    $sql = $lc->saveToDB();
    
    mysqli_query($con, $sql);
    
    header('Location: listagem.php');
    
} else {
    header('Location: formLogin.php');
}