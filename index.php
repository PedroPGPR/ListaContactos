<?php

    //Importacoes
    require_once("required.php");

    //Rotas
    $rotas = $_SERVER["REQUEST_URI"];
    $rotas = str_replace("/ListaContactos/", "", $rotas);
    $rotas = explode("/", $rotas);

    if(str_contains($rotas[count($rotas)-1], "?")){
        $parametros = str_replace("?", "", $rotas[count($rotas)-1]);
        $parametros = explode("&", $parametros);
        $_GET = [];
        foreach($parametros as $p){
            $p = explode("=", $p);
            $_GET[$p[0]] = $p[1];
        }
        //var_dump($_GET);
        $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0];
    }

    switch($rotas[0]){
        
        case "":
            require_once("models/home_model.php");
            break;
        case "home":
            require_once("models/home_model.php");
            break;
        case "ver":
            require_once("models/ver_model.php");
            break;
        case "editar":
            require_once("models/editar_model.php");
            break;
        default:
            require_once("models/404_model.php");
            break;
    }
    
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contactos</title>
</head>
<body>
    
</body>
</html>