<html>
    <head>

    </head>
    <body>
    <?php 
            if (isset($_GET["msg"]))
            {
                echo "<h3>{$_GET['msg']}</h3><br>";
            }
        ?>
        <table>
            <h2>Lista de Cursos</h2><br>
            <table border = "1">
                <tr>
                    <th>Id do Curso</th>
                    <th>Nome do Curso</th>
                </tr>
                <?php
                    if(is_array($retorno))
                    {
                        foreach($retorno as $dado)
                        {
                            echo   "<tr>" .
                                   "<td>($dado->idcurso)</td>" .
                                   "<td>($dado->nome)</td>";                              
                            echo   "<td>".
                                       "<a href='index.php?controle=CursoController&metodo=alterarCurso&idcurso={$dado->idcurso}'> Alterar </a>" .
                                   "</td>";
                ?>          <td>
                                <a href="index.php?controle=CursoController&metodo=excluirCurso&idcurso=<?php echo $dado->idcurso ?>" onclick="return confirm('Confirma a exclusão do Curso?')">Excluir</a>
                            </td>
                        </tr>
                <?php            
                        }
                    } 
                    else
                        // echo "<h2>$retorno</h2>";
                ?>
            </table>
        </table>
        <br><a href="index.php?controle=CursoController&metodo=inserirCurso">Inserir Novo Curso</a>
    </body>
</html>

