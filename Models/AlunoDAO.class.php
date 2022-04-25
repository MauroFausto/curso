<?php

    class AlunoDAO extends Conexao
    {
        public function __construct()
        {
            parent:: __construct();
        }        

        public function Consultar()
        {
            $sql = "SELECT * FROM ALUNO;";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->execute();
                $this-> conexao = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (PDOException $pdex)
            {
                $this->conexao = null;
                return "Problema ao consultar a tabela Alunos.";
            }
        }

        public function Inserir($aluno)
        {
            $sql = "INSERT INTO ALUNO (NOME, CPF, DATANASCIMENTO)
                    VALUES (?,?,?)";

            try
            {
                $stm = $this->conexao->prepare($sql);
                                
                $stm->bindValue(1, $aluno->getNomeAluno());
                $stm->bindValue(2, $aluno->getCpfAluno());
                $stm->bindValue(3, $aluno->getDataNascimentoAluno());
                                
                $stm->execute();
                $this->conexao = null;

                return "Aluno inserido com sucesso!";
            }
            catch (PDOException $pdex)
            {
                $this->conexao = null;
                return "Problema ao inserir um novo Aluno.";
            }
        }

        public function BuscarAluno($aluno)
        {
            $sql = "SELECT * FROM ALUNO WHERE idAluno = ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $aluno->getIdAluno());
                $stm->execute();

                $this-> conexao = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (PDOException $pdex)
            {
                $this->conexao = null;
                return "Problema ao consultar a tabela Alunos.";
            }
        }

        public function Alterar($aluno)
        {
            $sql = "UPDATE ALUNO SET nome = ?, cpf = ?, dataNascimento = ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $aluno->getNomeAluno());
                $stm->bindValue(2, $aluno->getCpfAluno());
                $stm->bindValue(3, $aluno->getDataNascimentoAluno());
                $stm->execute();

                $this->conexao = null;

                $this-> conexao = null;
                return "Aluno alterado com sucesso!";
            }
            catch (PDOException $pdex)
            {
                $this->conexao = null;
                return "Problema ao consultar a tabela Alunos.";
            }
        }

        public function ExcluirAluno($aluno)
        {
            $sql = "DELETE FROM ALUNO WHERE idAluno = ?";

            try
            {
                $stm = $this->conexao->prepare($sql);
                $stm->bindValue(1, $aluno->getIdAluno());
                $stm->execute();

                $this-> conexao = null;
                return "Aluno excluído com sucesso!";
            }
            catch (PDOException $pdex)
            {
                $this->conexao = null;
                return "Problema ao excluir o Aluno.";
            }
        }
    }    
?>