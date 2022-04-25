<?php

    class input implements component
    {
        private $type;
        private $name;
        private $value;
        
        public function __construct($type, $name, $value)
        {
            $this->type = $type;
            $this->name = $name;
            $this->value = $value;
        }

        public function criar()
        {
            echo "<input type='{$this->type}' name='{$this->name}' value='{$this->value}'>";
        }
    }

?>