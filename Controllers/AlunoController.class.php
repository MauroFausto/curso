<?php

    require_once "models/Conexao.class.php";
    require_once "models/AlunoDAO.class.php";
    require_once "models/Aluno.class.php";

    class AlunoController
    {
        public function listarAlunos()
        {
            $alunoDAO = new AlunoDAO();
            $retorno = $alunoDAO->consultar();

            require_once "views/listar_aluno.php";
        }

        public function inserirAluno()
        {
            require_once "views/form_aluno.php";

            $erro = 0;

            if($_POST)
            {
                if (empty($_POST["nome"]))
                {
                    $erro++;
                    echo "<script>alert('Preencha o Nome do Aluno')</script>";
                }
                if ($_POST["cpf"] == "")
                {
                    $erro++;
                    echo "<script>alert('Preencha o CPF do Aluno')</script>";
                }
                if ($_POST["data"] == "")
                {
                    $erro++;
                    echo "<script>alert('Preencha a Data de Nascimento do Aluno')</script>";
                }
                if ($erro == 0)
                {
                    // Inserir no BD
                    $aluno = new aluno(cpf: $_POST["cpf"], 
                                       nome: $_POST["nome"], 
                                       dataNascimento: $_POST["data"], 
                                       idaluno: 0);

                    $alunoDAO = new AlunoDAO();
                    $retorno = $alunoDAO->Inserir($aluno);

                    header("location:index.php?controle=AlunoController&metodo=listarAlunos&msg=$retorno");
                    
                    echo "<pre>";
                    echo var_dump($aluno);
                    echo "</pre>";                    
                    
                    // $sql = "INSERT INTO ALUNO (NOME, CPF, DATANASCIMENTO) VALUES (?,?,?)";
                }
            }
            else
            {
                 
            }            
        }

        public function alterarAluno()
        {
            if (isset($_GET["id"]))
            {
                $aluno = new Aluno(idaluno:$_GET["id"]);
                $alunoDAO = new AlunoDAO();
                $ret = $alunoDAO->buscarAluno($aluno);

                if (is_array($ret))
                {
                    if (count($ret) > 0)
                    {
                        require_once "views/edit_aluno.php";
                    }
                    else
                    {
                        // aluno não encontrado
                        header("location:index.php?controle=AlunoController?metodo=listarAlunos&msg=Aluno não encontrado.");                        
                    }
                }
                else
                {
                    // Problema ao alterar
                    header("location:index.php?controle=AlunoController?metodo=listarAlunos&msg=$ret");
                }
            }            
            if ($_POST)
            {
                // Verificar os dados

                // Update registro do aluno

                $aluno = new Aluno(idaluno:$_POST["idaluno"],
                                   nome:$_POST["nome"],
                                   cpf:$_POST["cpf"],
                                   dataNascimento:$_POST["data"]);
                
                $alunoDAO = new AlunoDAO();
                $retorno = $alunoDAO->Alterar($aluno);
                
                // Header
                header("location:index.php?controle=AlunoController&metodo=listarAlunos&msg=$retorno");
            }
        }

        public function excluirAluno()
        {
            if(isset($_GET["id"]))
            {
                $aluno = new Aluno(idaluno:$_GET["id"]);
                $alunoDAO = new AlunoDAO($aluno);
                
                $retorno = $alunoDAO->excluirAluno($aluno);

                header("location:index.php?controle=AlunoController&metodo=listarAlunos&msg=$retorno");
            }
        }

        // Validação de Dados
        public function ValidarDados ($dados)
        {

            /*
            if (empty($_POST["nome"]))
                {
                    $erro++;
                    echo "<script>alert('Preencha o Nome do Aluno')</script>";
                }
                if ($_POST["cpf"] == "")
                {
                    $erro++;
                    echo "<script>alert('Preencha o CPF do Aluno')</script>";
                }
                if ($_POST["data"] == "")
                {
                    $erro++;
                    echo "<script>alert('Preencha a Data de Nascimento do Aluno')</script>";
                }
                if ($erro == 0)
                {
                    // Inserir no BD
                    $aluno = new aluno(cpf: $_POST["cpf"], 
                                       nome: $_POST["nome"], 
                                       dataNascimento: $_POST["data"], 
                                       idAluno: 0);

                    $alunoDAO = new AlunoDAO();
                    $retorno = $alunoDAO->Inserir($aluno);

                    header("location:index.php?controle=AlunoController&metodo=listarAlunos&msg=$retorno");
                    
                    echo "<pre>";
                    echo var_dump($aluno);
                    echo "</pre>";                    
                    
                    // $sql = "INSERT INTO ALUNO (NOME, CPF, DATANASCIMENTO) VALUES (?,?,?)";
                }
                */

        }
    }

?>