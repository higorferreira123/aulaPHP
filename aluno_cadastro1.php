<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        include "menu.php"
    ?>

    <div class="onteudo">
        <h3>Confirmação de cadastro</h3>


    <?php

        if (isset($_REQUEST["enviar"]))
        {
            include "conexao.php";

            $nome = $_REQUEST["nome"];
            $cidade = $_REQUEST["cidade"];
            $estado = $_REQUEST["estado"];

            $sql= "insert into anulos (nome, cidade, estado) values (:nome, :cidade, :estado)";

            $result = $conexao->prepare($sql);
            $result->bindValue(":nome",$nome);
            $result->bindValue(":cidade",$cidade);
            $result->bindValue(":estado",$estado);
            $result->execute();

            echo "aluno cadastrado com sucesso";
         }  


    ?>
            <a href="aluno_cadastro.php">Voltar</a>
        </div>

</body>
</html>