<?php
session_start();
session_destroy();
?>
<!doctype html>
<html>
    <head>
        <title>Ecopontos</title>
    </head>
    <body>
       
        <div align='center'>
            <img  src="imagens/imagem3.jpg" alt="Logo" width="150px"/>        
            <h1>Projeto Ecopontos</h1>
        </div>


        <header id="menu" align="center">
            <font size="4">
            <span><a href="index.php">Home</a></span>
            <span><a href="info.php">Informa&ccedil;&otilde;es gerais</a></span>
            <span><a href="listagem.php">Listagem de ecopontos</a></span>
            <span><a href="formContato.php">Contato</a></span>
            <?php
            //session_start();
            if (isset($_SESSION['usuarioLogado'])) {
                echo '<span><a href="addressForm.php">Cadastrar endere&ccedil;o</a> </span>'
                . '<span><a href="logout.php">Fazer logout</a></span>';
            } else {
                echo '<span><a href="formLogin.php">Fazer login</a></span>';
            }
            ?>
            </font>
        </header>
        <hr style="margin-top: 30px;" />


        <span>Logout realizado.<a href="index.php">Voltar para p&aacute;gina inicial</a></span>

        <hr />

        <footer>
            <address>
                <p>Cidade: Exemplo Rua: Exemplo, 123 Bairro: Exemplo </p>
            </address>
            <p>Telefone: 0000-0000. <a href="formContato.php" Contato por email.>Contate-nos via e-mail.</a></p>
        </footer>
    </body>
</html>