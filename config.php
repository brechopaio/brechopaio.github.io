<?php

// Informações de conexão ao banco de dados no Azure
$dbServer = 'http://software-design-paio.azurewebsites.net/';
$dbUsername = 'seuusuario@seuservidor';
$dbPassword = 'suasenha';
$dbName = 'nomedoseubanco';

$connectionOptions = array(
    'Database' => $dbName,
    'Uid' => $dbUsername,
    'PWD' => $dbPassword
);

// Tentativa de conexão
$conexao = sqlsrv_connect($dbServer, $connectionOptions);

if (!$conexao) {
    die(print_r(sqlsrv_errors(), true));
} else {
    echo "Conexão efetuada com sucesso";
}
?>
