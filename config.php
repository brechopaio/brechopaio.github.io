<?php

$dbHost = 'banco-dados-cadastro-clientes.mysql.database.azure.com';
$dbUsername = 'brechopaio@banco-dados-cadastro-clientes';
$dbPassword = 'Edu1234.';
$dbName = 'formulario-paio';
$dbPort = 3307;

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno) {
    echo "Erro na conexão: " . $conexao->connect_error;
} else {
    echo "Conexão efetuada com sucesso";
}

?>
