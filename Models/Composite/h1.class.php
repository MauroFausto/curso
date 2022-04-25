<?php

    class h1 implements component
    {
        private $texto;
        
        public function __construct($texto)
        {
            $this->texto = $texto;
        }

        public function criar()
        {
            echo "<h1>{$this->texto}</h1>";
        }
    }

?>