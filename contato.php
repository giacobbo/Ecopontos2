<?php
//echo '<pre>';
//print_r($_POST);

$nomeContato = $_POST['nome'];
$emailContato = $_POST['email'];
$mensagem = $_POST['mensagem'];

$nomeSite = 'Ecopontos';
$emailSite = 'vggiacobbo@gmail.com';

$destinatarios = $nomeContato." <".$emailContato.">, ".$nomeSite." <".$emailSite.">";

mail($destinatarios, 'Contato Portal Ecopontos', $mensagem);

header('Location: formContato.php');