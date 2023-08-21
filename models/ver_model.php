<?php

    $contacto = selectSQLUnico("SELECT * FROM contacts WHERE id='$rotas[1]'");

    require_once("templates/header_template.php");  
    require_once("views/ver_view.php");
    require_once("templates/footer_template.php");

?>