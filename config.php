<?php

$dbHost = 'banco-dados-cadastro-clientes.mysql.database.azure.com';
$dbUsername = 'brechopaio';
$dbPassword = 'Edu1234.';
$dbName = 'banco-dados-cadastro-clientes';
$dbPort = 3306;

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
} else {
    echo "Conexão efetuada com sucesso";
}
if ($conexao->connect_errno) {
    die("Erro na conexão: " . $conexao->connect_error);
} else {
    echo "Conexão efetuada com sucesso";
}

?>
