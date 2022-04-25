<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar o Formulário Aluno</title>
    </head>
    <body>
        <h2>Alteração de Formulário de Aluno</h2>
        <form action="#" method="POST">
            <input type="hidden" name="idAluno" value="<?php echo $ret[0]->idAluno; ?>">
        
            <label>Nome:</label><br>
            <input type="text" name="nome" value="<?php echo $ret[0]->nome; ?>"><br><br>
            <label>CPF:</label><br>
            <input type="text" name="cpf" value="<?php echo $ret[0]->cpf; ?>"><br><br>
            <label>Data de Nascimento</label><br>
            <input type="date" name="data" value="<?php echo $ret[0]->dataNascimento; ?>"><br><br>
            
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>