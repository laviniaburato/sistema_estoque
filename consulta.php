<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta dos produtos</title>
    <style>
        .button{
            color:  rgb(253, 253, 253);

        }
        h2{
            color: rgb(255, 255, 255);
            font-size: medium;
            font-family: Cambria;
            font-size: xx-large;
            font-style: inherit;
        }
        body{
            background-color: rgb(28, 41, 100);
        }
        table, td, th {
            border: 1px solid;
        }

        table {
            background-color: white;
            width: 50%;
            border-collapse: collapse;
            margin-left: 26%;
            padding: 30px;
            text-align: center;

        }

        td{
            color: blue;
        }
</style>
</head>
<body>

    <center><hr><h2>Consulta</h2><hr></center>
    <br>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome Produto</th>
            <th>Qtd</th>
            <th>Preço</th>
            <th>fornecedor</th>
            <th>Data da Compra</th>
        </tr>
        <tbody>
            <!--aqui vai o PHP-->
        </tbody>

        <?php
        include "conexao.php";

        $sql = "SELECT * FROM produtos";

        $dados = mysqli_query($con,$sql);

        while ($linha = mysqli_fetch_array($dados)){
            $id_produto = $linha ['id_produto'];
            $nome_produto = $linha ["nome_produto"];
            $qtd = $linha ['qtd'];
            $preco = $linha ['preco'];
            $fornecedor = $linha['fornecedor'];
            $data_compra = $linha ['data_compra'];
       
        echo "<tr>
        <td>$id_produto</td>
        <td>$nome_produto</td>
        <td>$qtd</td>
        <td>$preco</td>
        <td>$fornecedor</td>
        <td>$data_compra</td>
        </tr>";
    }
    ?>
    </table>
    <br>
    <a class="button" href="index.html">Voltar</a>

    <center><img src="imagem05.png" alt="login" height="600px" width="400px"></center>

    <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

</body>
</html>