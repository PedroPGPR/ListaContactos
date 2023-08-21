<?php

    $dblock = 0;
    $contacto = selectSQLUnico("SELECT * FROM contacts WHERE id='$rotas[1]'");
    $form = isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["observations"]);

    if($form){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $descr = $_POST["observations"];
        updateSQL("UPDATE contacts SET name='$name', phone='$phone', email='$email', observations='$descr' WHERE id='$rotas[1]'");
        $dblock = 1;
    }

    require_once("templates/header_template.php");  
    require_once("views/editar_view.php");
    require_once("templates/footer_template.php");

?>