<?php
require_once 'template/header.php';
require_once 'template/menu.php';
?>
        <br/>
        <?php
        if (isset($_SESSION['usuarioID'])) {
            echo '<p> Voc&ecirc; j&aacute; est&aacute; logado. <a href="logout.php">Clique aqui para fazer logout.</a></p>';
        } else {
            echo '<form align="center" name="formLogin" action="login.php" method="POST">
            Usuario <input type="text" name="email" /> <br/>
            Senha: <input type="password" name="senha" />

            
            <input type="submit" value="Enviar" name="submit" />
        </form>';
        }
        ?> 
        <hr />

        <footer>
            <address>
                <p>Cidade: Exemplo Rua: Exemplo, 123 Bairro: Exemplo </p>
            </address>
            <p>Telefone: 0000-0000. <a href="formContato.php" Contato por email.>Contate-nos via e-mail.</a></p>
        </footer>
    </body>
</html>