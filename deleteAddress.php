<?php

session_start();
require_once 'conexaodb.php';

if (isset($_SESSION['usuarioID'])) {

    $id = $_GET['id'];
    $con = conectaDB();

    $sql = 'DELETE FROM localdecoleta WHERE id='.$id.';';
    $q = mysqli_query($con, $sql);
    
    header('Location: listagem.php');
} else {
    header('Location: formLogin.php');
}