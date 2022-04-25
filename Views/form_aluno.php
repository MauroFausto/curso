<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário Aluno</title>
    </head>
    <body>
        <h2>Formulário Novo Aluno</h2>
        <form action="#" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="nome" value="<?php if ($_POST) echo $_POST['nome']; ?>"><br><br>
            <label>CPF:</label><br>
            <input type="text" name="cpf" value="<?php if ($_POST) echo $_POST['cpf']; ?>"><br><br>
            <label>Data de Nascimento</label><br>
            <input type="date" name="data" value="<?php if ($_POST) echo $_POST['data']; ?>"><br><br>
            
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>