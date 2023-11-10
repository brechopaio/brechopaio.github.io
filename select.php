<?php

include_once('config.php');

$query = "SELECT * FROM usuarios";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Telefone: " . $row['telefone'] . "<br>";
        echo "Sexo: " . $row['sexo'] . "<br>";
        echo "Data de Nascimento: " . $row['data_nasc'] . "<br>";
        echo "Cidade: " . $row['cidade'] . "<br>";
        echo "Estado: " . $row['estado'] . "<br>";
        echo "Endereço: " . $row['endereco'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

mysqli_close($conexao);

?>
