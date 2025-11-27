<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disciplina Cadastro</title>
</head>
<body>
    <h1> Cadastro de Disciplinas </h1>
    <form name="Enviar" method="POST" action="disciplina_cadastro.php">
        <fieldset>
            <p>Informe o nome da disciplina:</p>
            <input type="text" name="disciplina">

            <p>Escolha o curso</p>
            <select name="curso">
            <option value="Escolha o curso">Escolha o curso</option>
          
            </select>

            <br>
            <br>
            <input type="submit" name="Enviar" value="Cadastrar Disciplina"> 
        </fieldset>