<?php
include("conexao.php");

$jg = $_POST['jg'];
$qtd = $_POST['qtd'];

$consulta = "SELECT qtd FROM jogos WHERE nome = '$jg'";
$resultado = $conn->query($consulta);

if ($resultado->num_rows == 0) {
    echo "<script>
        alert('Jogo não encontrado!');
        window.location.href='usuario.html';
    </script>";
    exit();
}

$dados = $resultado->fetch_assoc();

if ($dados['qtd'] < $qtd) {
    echo "<script>
        alert('Estoque insuficiente!');
        window.location.href='usuario.html';
    </script>";
    exit();
}

$sql = "UPDATE jogos SET qtd = qtd - $qtd WHERE nome = '$jg'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Compra realizada com sucesso!');
        window.location.href='usuario.html';
    </script>";
} else {
    echo "Erro na compra: " . $conn->error;
}

$conn->close();
?>
