<?php

$nome = $_POST ['nome'];
$qtd = $_POST ['qtd'];
$preco = $_POST ['preco'];
$fornecedor = $_POST ['fornecedor'];
$data_compra = $_POST ['data_compra'];

//echo "Nome do produto:", $nome;
//echo "<br> quantidade:", $qtd;
//echo "<br>Preço:", $preco;

//conecta no banco de dados
include "conexao.php";

$sql = "INSERT INTO `usuário`(`nome_produto`, `qtd`, `preco`, `fornecedor`, `data_compra`)

        VALUES ('$nome', '$qtd', '$preco', '$fornecedor', '$data_compra')";

    if (mysqli_query($con,$sql)){
        echo "produto cadastrado com sucesso!";
        echo "<br> <a href='cadastro.html'>voltar</a>";
    }  else {
        echo "erro no cadastro";
    }

