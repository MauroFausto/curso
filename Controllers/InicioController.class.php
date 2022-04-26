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
            /*
            $a0 = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");            
            $li0 = new li($a0);
            $ul0 = new ul();

            $a = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");            
            $li = new li($a);
            $ul = new ul();

            $a = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");            
            $li = new li($a);
            $ul = new ul();
            
            $a = new a("index.php?controle=CursoController&metodo=listar", "Listar Cursos");            
            $li = new li($a);
            $ul = new ul();
            
            
            $ul1 = new ul();
            $ul2 = new ul();
            $ul3 = new ul();

            $ul0->setElemento($li);

            $ul1->setElemento(new li(new a("index.php?controle=AlunoController&metodo=listar", "Listar Alunos")));
            
            
            $ul2->setElemento(new li(new a("index.php?controle=CursoController&metodo=graficoBarras", "Gráfico de Barras")));
            
            $ul3->setElemento(new li(new a("index.php?controle=CursoController&metodo=graficoPizza", "Gráfico de Pizza")));

            require_once "views/menu.php";
            */
        }
    }    
?>