<?php

    class a implements component
    {
        private $href;
        private $texto;
       
        public function __construct($href, $texto)
        {
            $this->href = $href;
            $this->texto = $texto;
        }

        public function criar()
        {
            echo "<a href='{$this->href}'>{$this->texto}</a>";
        }
    }
?>