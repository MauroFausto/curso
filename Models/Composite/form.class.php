<?php

    class form implements component
    {
        private $action;
        private $method;
        private $elementos;

        public function __construct($action, $method)
        {
            $this->action = $action;
            $this->method = $method;
        }

        public function criar()
        {
            echo "<form action='{$this->action}' method='{$this->method}'>";

            foreach($this->elementos as $objeto)
            {
                $objeto->criar();
            }
            
            echo "</form>";
        }

        public function setElemento($elemento)
        {
            $this->elementos[] = $elemento;
        }

        
    }

?>