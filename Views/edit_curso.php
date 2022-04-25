<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar o Formulário Cursos</title>
    </head>
    <body>
        <h2>Alteração de Formulário de Cursos</h2>
        <form action="#" method="POST">
            <input type="hidden" name="idcurso" value="<?php echo $ret[0]->idcurso; ?>">
        
            <label>Nome:</label><br>
            <input type="text" name="curso" value="<?php echo $ret[0]->nome; ?>"><br><br>
           
            
            <input type="submit" value="Alterar">
        </form>
    </body>
</html>