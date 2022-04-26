<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Alunos por Cursos - Gráfico Barras</title>
        <script src="../lib/apexcharts.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Quantidade de Alunos por Curso</h1>
        <!-- Área de desenho para o gráfico -->
        <div id="grafico">
        <script>
            $(function(){
                $.ajax({
                    type: "get",
                    url: "index.php",
                    data: "controle=CursoController&metodo=dados_grafico",
                    dataType: "json",
                    success: function(dados){
                        // Criação do Gráfico
                    },
                    error: function(){
                        alert("Falha catastrófica!");
                    }
                });
            });
        </script>
        </div>
    </body>
</html>
