<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Curso</title>
</head>
<body>

<h2>Formulário Novo Curso</h2>
        <form action="#" method="POST">
            <label>Nome:</label><br>
            <input type="text" name="curso" value="<?php if ($_POST) echo $_POST['curso']; ?>"><br><br>
       
            
            <input type="submit" value="Cadastrar">
    
</body>
</html>