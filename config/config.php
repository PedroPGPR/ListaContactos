<?php

    // Url Base
    $url_base = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

    // Ligar DataBase
    $host = "localhost";
    $dbname = "lista_contactos";
    $user = "root";
    $pass = "";

    try{

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //Ativar modo erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        //Erro na Conexão
        $error = $e->getMessage();
        echo "Erro : $error";
    }

?>