<?php

    require_once "models/Interfaces/Composite/componentInterface.php";

    require_once "Models/Composite/a.class.php";
    require_once "Models/Composite/li.class.php";
    require_once "Models/Composite/ul.class.php";
    
    class InicioController
    {
        public function mostrarMenu()
        {
            // Criar o menu utilizando Composite Pattern
            $a = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");
            
            $li = new li($a);

            $ul = new ul();
            $ul->setElemento($li);

            $ul->setElemento(new li(new a("index.php?controle=AlunoController&metodo=listar", "Listar Alunos")));
            
            $ul->setElemento(new li(new a("index.php?controle=CursoController&metodo=graficoBarras", "Gráfico de Barras")));
            
            $ul->setElemento(new li(new a("index.php?controle=CursoController&metodo=graficoBarras", "Gráfico de Pizza")));

            require_once "views/menu.php";
        }
    }    
?>