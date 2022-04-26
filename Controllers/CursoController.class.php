<?php

    require_once "models/Conexao.class.php";
    require_once "models/CursoDAO.class.php";
    require_once "models/Curso.class.php";

    class CursoController
    {
        public function listarCursos()
        {
            $cursoDAO = new CursoDAO();
            $retorno = $cursoDAO->consultarTodosCursos();

            require_once "Views/listar_curso.php";
        }

        public function inserirCurso()
        {
            require_once "Views/form_curso.php";

            $erro = 0;

            if($_POST)
            {
                if (empty($_POST["curso"]))
                {
                    $erro++;
                    echo "<script>alert('Preencha o Nome do Curso')</script>";
                }
             
                if ($erro == 0)
                {
                    // Inserir no BD
                 $curso = new Curso(nome: $_POST["nome"],idcurso:0);

                 $cursoDAO = new CursoDAO();
                 $retorno = $cursoDAO->inserir($curso);

                    header("location:index.php?controle=CursoController&metodo=listarCursos&msg=$retorno");
                    
                    // echo "<pre>";
                    // echo var_dump($curso);
                    // echo "</pre>";                    
                    
                  
                }
            }
                  
        }

        public function alterarCurso()
        {
            if (isset($_GET["id"]))
            {
                $curso = new Curso(idcurso:$_GET["id"]);
                $cursoDAO = new CursoDAO();
                $ret =$cursoDAO->BuscarCurso($curso);

                if (is_array($ret))
                {
                    if (count($ret) > 0)
                    {
                        require_once "views/edit_curso.php";
                    }
                    else
                    {
                        // aluno não encontrado
                        header("location:index.php?controle=CursoController?metodo=listarCursos&msg=Curso não encontrado.");                        
                    }
                }
                else
                {
                    // Problema ao alterar
                    header("location:index.php?controle=CursoController?metodo=listarCursos&msg=$retorno");
                }
            }            
            if ($_POST)
            {
                // Verificar os dados

                // Update registro

                $curso = new Curso(idcurso:$_POST["id"],
                                   nome:$_POST["id"],);
                
                $cursoDAO = new CursoDAO();
                $retorno = $cursoDAO->Alterar($curso);
                
                // Header
                header("location:index.php?controle=CursoController&metodo=listarCursoss&msg=$retorno");
            }
        }

        public function excluirCurso()
        {
            if(isset($_GET["id"]))
            {
                $curso = new Curso(idcurso:$_GET["id"]);
                $cursoDAO = new CursoDAO($curso);
                
                $retorno = $cursoDAO->excluir($curso);

                header("location:index.php?controle=CursoController&metodo=listarCursos&msg=$retorno");
            }
        }

        public function graficoBarras()
        {
            require_once "views/graficoBarras.html";
        }

        public function graficoPizza()
        {
            require_once "views/graficoPizza.html";
        }

        public function dados_grafico()
        {
            $cursoDAO = new cursoDAO();
            $retorno = $cursoDAO->buscar_dados_graficos();
            echo json_encode($retorno);
        }
    }
?>