<?php
$conexao = new PDO("mysql:host=localhost;dbname=aulapdo", "root" , "");


function InserirInformacoes($conexao, $nome, $valor, $validade){
    // $guarda = "INSERT INTO tb_produtos (nome_produto, valor, data_validade) VALUES ('" . $nome . "'," . $valor . ",'" . $validade . "')";
  
  
    $guarda =  "INSERT INTO tb_produtos(nome_produto, valor,data_validade) VALUES ( :nome_produto, :valor, :data_validade )";
   
    $preparacao = $conexao->prepare($guarda);
    $preparacao->bindParam(":nome_produto" , $nome);
    $preparacao->bindParam(":valor" , $valor);
    $preparacao->bindParam(":data_validade" , $validade);
  
  $preparacao->execute();
//   $conexao->exec($guarda);

}


InserirInformacoes($conexao, "Doritos", 22.00, "2024-02-01");


?>