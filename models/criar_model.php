<?php

    $form = isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["observations"]);
    $dblock = 0;

    if($form){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $descr = $_POST["observations"];
        insertSQL("INSERT INTO contacts (name,phone,email,observations) VALUES ('$name','$phone','$email','$descr')");
        $dblock = 1;
    }

    require_once("templates/header_template.php");
    require_once("views/criar_view.php");
    require_once("templates/footer_template.php");

?>