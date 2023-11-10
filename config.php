<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'paio1234';
$dbName = 'formulario-paio';
$dbPort = 3307;


$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno)
{
    echo "Erro";
}
else
{
    echo "Conexão efetuada com sucesso";
}

?>


