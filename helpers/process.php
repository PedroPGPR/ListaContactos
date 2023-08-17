<?php

    require_once("required.php");

    function selectSQL($sql){
        global $conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function selectSQLUnico($sql){
        global $conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertSQL($sql){
        global $conn;
        $conn->query($sql);
    }

    function deleteSQL($sql){
        global $conn;
        $conn->query($sql);
    }

    function updateSQL($sql){
        global $conn;
        $conn->query($sql);
    }
    
?>