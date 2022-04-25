<?php

    class Aluno
    {
        public function __construct(
            private int $idaluno = 0,
            private string $nome = "", 
            private string $cpf = "",
            private string $dataNascimento = "") { }

        // Getters
        public function getIdAluno() { return $this->idaluno; }
        
        public function getNomeAluno() { return $this->nome; }

        public function getCpfAluno() { return $this->cpf; }

        public function getDataNascimentoAluno() { return $this->dataNascimento; }

        // Setters
        public function setIdAluno(int $idaluno) { $this->idAluno = $idaluno; }

        public function setNomeAluno(int $nome) { $this->nome = $nome; }

        public function setCpfAluno(int $cpf) { $this->cpf = $cpf; }

        public function setDataNascimentoAluno(int $dataNascimento) { $this->dataNascimento = $dataNascimento; }
        
    }
?>