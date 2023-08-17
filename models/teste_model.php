<?php

    $contactos = selectSQL("SELECT * FROM contacts");

    require_once("templates/header_template.php");
    require_once("views/home_view.php");
    require_once("templates/footer_template.php");

?>