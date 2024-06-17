<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $pessoas = $_POST['pessoas'];
    $pedido = $_POST['pedido'];

    // Aqui você pode fazer o que quiser com os dados,
    // como enviar por e-mail, salvar em um banco de dados, etc.

    // Exemplo simples de exibição dos dados:
    echo "<h2>Dados recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Data:</strong> $data</p>";
    echo "<p><strong>Hora:</strong> $hora</p>";
    echo "<p><strong>Número de pessoas:</strong> $pessoas</p>";
    echo "<p><strong>Pedido:</strong> $pedido</p>";
} else {
    // Se alguém tentar acessar processa_form.php diretamente, redireciona para o formulário
    header("Location: form.php");
    exit();
}
?>