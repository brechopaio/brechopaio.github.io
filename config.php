<?php
$dbHost = 'servidor.mysql.database.azure.com';
$dbUsername = 'paio'; // Nome de usuário do banco de dados
$dbPassword = 'Edu1234.';
$dbName = 'sgbd-software-design-paio'; // Nome do banco de dados no Azure (não inclua o domínio do servidor)
$dbPort = 3306;

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
    // Aqui você pode lidar com erros de conexão, se necessário.
} else {
    echo "Conexão efetuada com sucesso";
    // Conexão bem-sucedida, você pode continuar com suas consultas e operações no banco de dados.
}
?>
