<?php

echo "<h2> Aula PDO </h2>";

// tipo do banco -> msql
// host -> localhost
// banco de dados -> aulapdo
// senha -> não tem

$conexao = new PDO("mysql:host=localhost;dbname=aulapdo", "root" , ""); // estamos abrindo a porta de coneção para o banco

// var_dump($conexao);

$select = "SELECT * FROM tb_produtos WHERE nome_produto LIKE '%A%'";


$resultado = $conexao->query($select);

$consulta = $resultado->fetchAll();

echo "<pre>";

var_dump($consulta);

?>