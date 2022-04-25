<?
    class Curso
    {
        private $idcurso;
        private $nome;

        public function __construct($idcurso = null, $nome = null)
        {
            $this->idcurso = $idcurso;
            $this->nome = $nome;
        }

        public function getIdCurso($idcurso) { return $this->idcurso; }

        public function getCurso($curso) { return $this->curso;}
    }
?>