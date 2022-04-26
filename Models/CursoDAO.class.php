<?php

    
    class CursoDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }

        public function consultarTodosCursos()
        {
            $sql = "SELECT * FROM CURSO; ";

            try 
            {
                $stm = $this->conexao->prepare($sql);
                $stm->execute();
                
                // Finaliza a Conexão
                $this->conexao = null;

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (PDOException $ex) 
            {
                return "Problema ao consultar os cursos.";
            }
        }

        public function inserir($curso)
        {
            $sql = "INSERT INTO CURSO (NOME)
                    VALUES (?)";

            try
            {
                $stm = $this->conexao->prepare($sql);
                                
                $stm->bindValue(1,$curso->getCurso());
               
                                
                $stm->execute();
                $this->conexao = null;

                return "Curso inserido com sucesso!";
            }
            catch (PDOException $ex)
            {
                $this->conexao = null;
                return "Problema ao inserir um novo Curso.";
            }
        }

        public function BuscarCurso($curso)
        {
            $sql = "SELECT * FROM CURSO WHERE idcurso = ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $curso->getIdCurso());
                $stm->execute();

                $this-> conexao = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (PDOException $ex)
            {
                $this->conexao = null;
                return "Problema ao consultar a tabela Cursos.";
            }
        }

        public function Alterar($curso)
        {
            $sql = "UPDATE CURSO SET NOME =  ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $curso->getCurso());
             
                $stm->execute();

                $this->conexao = null;

                $this-> conexao = null;
                return "Curso alterado com sucesso!";
            }
            catch (PDOException $ex)
            {
                $this->conexao = null;
                return "Problema ao consultar a tabela Cursos.";
            }
        }

        public function excluir($curso)
        {
            $sql = "DELETE FROM curso WHERE idcurso = ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $curso->getCurso());
                $stm->execute();

                $this-> conexao = null;
                return "Curso excluído com sucesso!";
            }
            catch (PDOException $ex)
            {
                $this->conexao = null;
                return "Problema ao excluir o Curso.";
            }
        }

        public function buscar_dados_grafico()
        {
            $sql = "SELECT curso.nome, COUNT(aluno.idAluno) AS valor FROM aluno, curso, aluno_curso where aluno.idaluno = aluno_curso.idaluno and curso.idcurso = aluno_curso.idcurso group by curso.nome order by valor desc";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->execute();
                $this->conexao = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e)
            {
                $this->conexao = null;
                return "Problema ao buscar pelos dados para construir o gráfico.";
            }
        }        
    }
?>