<?php
include("conexao.php");

$jg = $_POST['jg'];
$qtd = $_POST['qtd'];

$sql = "UPDATE jogos SET qtd = qtd + $qtd WHERE nome = '$jg'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Estoque atualizado com sucesso!');
        window.location.href='repositor.html';
    </script>";
} else {
    echo "Erro ao repor: " . $conn->error;
}

$conn->close();
?>
