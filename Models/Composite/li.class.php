<?php

    class li implements component
    {
        private $elemento;

        public function criar()
        {
            echo "<li>";
            $this->elemento->criar();
            echo "</li>";
        }

        function __construct($elemento)
        {
            $this->elemento = $elemento;
        }
    }
    
?>