<?php
include('conexao.php');

$newgame   = $_POST['newgame'];
$qtdnew    = $_POST['qtdnew'];
$generonew = $_POST['generonew'];

if (empty($newgame) || empty($qtdnew) || empty($generonew)) {
    echo "<script>
        alert('Preencha todos os campos!');
        window.location.href='repositor.html';
    </script>";
    exit();
}

$sql = "INSERT INTO jogos (nome, qtd, genero) 
        VALUES ('$newgame', '$qtdnew', '$generonew')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Jogo adicionado com sucesso!');
        window.location.href='repositor.html';
    </script>";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
