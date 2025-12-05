<?php
include("conexao.php");

$sql = "SELECT nome, genero, qtd FROM jogos";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogos Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<footer id="footer">
    <h1>JOGOS DISPONÍVEIS - PIXEL HUB</h1>
</footer>

<div class="form">

    <table border="1" width="100%" style="color:white; text-align:center;">
        <tr>
            <th>Nome do Jogo</th>
            <th>Gênero</th>
            <th>Quantidade</th>
        </tr>

        <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['genero']; ?></td>
            <td><?php echo $row['qtd']; ?></td>
        </tr>
        <?php } ?>

    </table>

    <br>
    <a href="repositor.html">Voltar</a>

</div>

</body>
</html>
