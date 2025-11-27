<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Cadastro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<?php include "menu.php" ?>
   <div class="conteudo">

    <h3> Cadastro de Professores </h3>
    <form method="post" action="#">

            <p>Informe o nome<br>
            <input type="text" name="nome">
            </p>
            <p>Informe a area de formação:<br>
            <input type="text" name="cidade">
            </p>

            <p>Digite a graduação:<br>
            <input type="text" name="estado">
            </p>
            <p>

            <input type="submit" name="enviar" value="Cadastrar"> 
            </p>
    </form>
</div>

<body>
    <html>