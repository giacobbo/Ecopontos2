<?php
require_once 'template/header.php';
require_once 'template/menu.php';
?>

        <hr style="margin-top: 30px;" />

        <div align="center">
            <form name="formContato" action="contato.php" method="POST">
                Nome: <input type="text" name="nome" /><br/>
                E-mail: <input type="text" name="email" />
                <br />
                Mensagem: <textarea name="mensagem" rows="20" cols="50">
                </textarea>

                <input type="submit" value="Enviar" name="submit" />
            </form>
        </div>
        <hr />

        <footer>
            <address>
                <p>Cidade: Exemplo Rua: Exemplo, 123 Bairro: Exemplo </p>
            </address>
            <p>Telefone: 0000-0000. <a href="formContato.php" Contato por email.>Contate-nos via e-mail.</a></p>
        </footer>
    </body>
</html>