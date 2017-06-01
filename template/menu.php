<header id="menu" class="menu" >

    <font size="4">
    <span><a href="index.php">In&iacute;cio</a></span>
    <span><a href="info.php">Informa&ccedil;&otilde;es gerais</a></span>
    <span><a href="listagem.php">Listagem de ecopontos</a></span>
    <span><a href="formContato.php">Contato</a></span>
    <?php
    //session_start();
    if (isset($_SESSION['usuarioID'])) {
        echo '<span><a href="addressForm.php">Cadastrar endere&ccedil;o</a> </span>'
        . '<span><a href="logout.php">Fazer logout</a></span>';
    } else {
        echo '<span><a href="formLogin.php">Fazer login</a></span>';
    }
    ?>
    </font>
</header>
    
<!--<hr style="margin-top: 30px;" />-->