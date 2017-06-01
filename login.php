<?php
include_once 'template/header.php';
include_once 'conexaodb.php';;

$email = $_POST['email'];
$senha = sha1($_POST['senha']);
$con = conectaDB();

$sql = "SELECT * FROM usuario WHERE email='".$email."' AND senha='".$senha."';";
$result = mysqli_query($con, $sql);

$usuario = $result->fetch_assoc();


if ($result->num_rows > 0) {
    $_SESSION['usuarioID'] = $usuario['id'];
    $_SESSION['usuarioNome'] = $usuario['nome'];
    $msg = 'Bem vindo, ' . $usuario['nome'];
} else {
    $msg = 'Usu&aacute;rio ou senha incorretos.';
}
include_once 'template/menu.php';

echo $msg;

include_once 'template/footer.php';
?>
