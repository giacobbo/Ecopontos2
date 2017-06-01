<?php
require_once 'template/header.php';
require_once 'template/menu.php';
if (!isset($_SESSION['usuarioID'])) {
    header('Location: formLogin.php');
}

$adrFile = "adressList.txt";
$file = fopen($adrFile, "r");
?>
<form name="adress" action="addAddress.php" method="POST">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" />
    </div>
    <div>
        <label for="empresa">Empresa:</label> 
        <input type="text" name="empresa" id="empresa" /> <br/>
        <label for="estado">Estado:</label> 
        <input type="text" name="estado" id="estado" /><br/>
        <label for="cidade">Cidade:</label> 
        <input type="text" name="cidade" id="cidade"/> <br/>
        <label for="bairro">Bairro:</label> 
        <input type="text" name="bairro" id="bairro"/> <br/>
        <label for="rua">Rua:</label> 
        <input type="text" name="rua" id="rua"/> <br/>
        <label for="num">Numero:</label> 
        <input type="text" name="num" id="num"/> <br/>
        <label for="complemento">Complemento:</label> 
        <input type="text" name="complemento" id="complemento"/> 
    </div>
    <div>
        <label for="vidro">Vidro</label>
        <input type="checkbox" name="vidro" value="vidro" id="vidro"/>
        <label for="plastico">Pl&aacute;stico</label>
        <input type="checkbox" name="plastico" value="plastico" id="plastico"/>
        <label for="metal">Metal</label>
        <input type="checkbox" name="metal" value="metal" id="metal"/>
        <label for="papel">Papel</label>
        <input type="checkbox" name="papel" value="papel" id="papel"/>
    </div>

    <input type="submit"/>
</form>
<?php
require_once 'template/footer.php';
?>