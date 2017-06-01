<?php
require_once 'template/header.php';
require_once 'template/menu.php';
require_once 'conexaodb.php';
?>


<div align="center">
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Endere&ccedil;o de coleta</th>
                <?php
                if (isset($_SESSION['usuarioID'])) {
                    echo '<th> a&ccedil;&atilde;o</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $con = conectaDB();

            $sql = 'SELECT * FROM localdecoleta;';
            $q = mysqli_query($con, $sql);
            while ($row = $q->fetch_assoc()) {
                $teste[] = $row;
                echo '<td>' . $row['empresa'] . '</td><td>Rua ' . $row['rua'] . ', n&ordm; ' . $row['numero'] . '<br/>Bairro ' . $row['bairro'] . " &ndash; " . $row['cidade'] . ' &ndash; ' . $row['estado'] . '</td>';
                if (isset($_SESSION['usuarioID'])) {
                    echo '<td><a href="deleteAddress.php?id=' . $row['id'] . '">Remover</a></td>';
                }
                echo '</tr>';
            }
//                . '<td>Rua ' . $rua . ', n&ordm; ' . $num . '<br/>Bairro ' . $bairro . " &ndash; " . $cidade . ' &ndash; ' . $estado . '</td>'
//                . '<td>' . $empresa . '</td>';
//                $i++;
//            };
            ?>
        </tbody>
    </table>

</div>
<?php
require_once 'template/footer.php';
?>