<?php

    $contactos = selectSQL("SELECT * FROM contacts");

    if(isset($rotas[0]) && isset($rotas[1])){
        deleteSQL("DELETE FROM contacts WHERE id='$rotas[1]'");
        header("Location: http://localhost/ListaContactos");
        exit();
    }

    require_once("templates/header_template.php");
    require_once("views/home_view.php");
    require_once("templates/footer_template.php");

?>