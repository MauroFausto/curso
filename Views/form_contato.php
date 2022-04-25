<?php

    require_once "/xampp/htdocs/curso/Models/Interfaces/Composite/componentInterface.php";
    require_once "../Models/Composite/h1.class.php";
    require_once "../Models/Composite/label.class.php";
    require_once "../Models/Composite/input.class.php";
    require_once "../Models/Composite/form.class.php";
    require_once "../Models/Composite/br.class.php";
    
    $form = new form("#", "POST");

    $h1 = new h1("Contato");
    $label1 = new label("Nome: ");
    $input1 = new input("text", "nome", "");
    $form->setElemento($h1);
    $form->setElemento(new br());
    $form->setElemento($label1);
    $form->setElemento($input1);
    $form->setElemento(new br());
    $form->setElemento(new br());
    $form->setElemento(new label("e-Mail: "));
    $form->setElemento(new input("email", "email", ""));
    $form->setElemento(new br());
    $form->setElemento(new br());
    $form->setElemento(new label("Sexo: "));
    $form->setElemento(new label("Feminino "));
    $form->setElemento(new input("radio", "sexo", "feminino"));
    $form->setElemento(new label("Masculino "));
    $form->setElemento(new input("radio", "sexo", "masculino"));
    $form->setElemento(new br());
    $form->setElemento(new br());
    $form->setElemento(new label("Celular para contato: "));
    $form->setElemento(new input("text", "celular", ""));
    $form->setElemento(new br());
    $form->setElemento(new br());
    $form->setElemento(new label("Data de Nascimento: "));
    $form->setElemento(new input("date", "data", ""));

    $form->criar();

?>