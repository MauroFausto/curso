<html>
    <head>
        <title>Lista de Aluno</title>
    </head>
    <body>
        <?php 
            if (isset($_GET["msg"]))
            {
                echo "<h3>{$_GET['msg']}</h3><br>";
            }
        ?>
        <table>
            <h2>Lista de Alunos</h2><br>
            <table border = "1">
                <tr>
                    <th>Id do Aluno</th>
                    <th>Nome do Aluno</th>
                    <th>CPF do Aluno</th>
                    <th>Data de Nascimento do Aluno</th>
                </tr>
                <?php
                    if(is_array($retorno))
                    {
                        foreach($retorno as $dado)
                        {
                            echo   "<tr>" .
                                   "<td>($dado->idaluno)</td>" .
                                   "<td>($dado->nome)</td>" .
                                   "<td>($dado->cpf)</td>" .
                                   "<td> ". date("d/m/Y", strtotime($dado->dataNascimento)) . "</td>";
                            echo   "<td>" .
                                       "<a href='index.php?controle=AlunoController&metodo=alterarAluno&id={$dado->idaluno}'> Alterar </a>" .
                                   "</td>";
                ?>          <td>
                                <a href="index.php?controle=AlunoController&metodo=excluirAluno&id=<?php echo $dado->idAluno ?>" onclick="return confirm('Confirma a exclusão do aluno?')">Excluir</a>
                            </td>
                        </tr>
                <?php            
                        }
                    } 
                    else
                        echo "<h2>$retorno</h2>";
                ?>
            </table>
        </table>
        <br><a href="index.php?controle=AlunoController&metodo=inserirAluno">Inserir Novo Aluno</a>
    </body>
</html>

