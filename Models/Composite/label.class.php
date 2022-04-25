<?php

    class label implements component
    {
        private $texto;
        
        public function __construct($texto)
        {
            $this->texto = $texto;
        }

        public function criar()
        {
            echo "<label>{$this->texto}</label>";
        }
    }

?>