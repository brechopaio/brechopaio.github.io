<?php

$dbHost = 'software-design-paio-pi2.scm.azurewebsites.net';
$dbUsername = 'brechopaio';
$dbPassword = 'Edu1234.';
$dbName = 'formulario-paio';
$dbPort = 3306;

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conexao->connect_errno)
{
    echo "Erro na conexão: " . $conexao->connect_error;
}
else
{
    echo "Conexão efetuada com sucesso";
}

?>


