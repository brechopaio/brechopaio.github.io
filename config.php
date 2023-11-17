<?php

$dbHost = 'banco-dados-cadastro-clientes.mysql.database.azure.com';
$dbUsername = 'brechopaio';
$dbPassword = 'Edu1234.';
$dbName = 'formulario-gustavo';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) 
{
    echo "Erro na conexão";
} 
else 
{
    echo "Conexão efetuada com sucesso";
}

?>
