<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/CategorieDepense.php");

    $type = $_POST['type'];

    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        $categorieDepense = new CategorieDepense($type); 
        CategorieDepense::update($categorieDepense, $id);     
    }

    else {
        $categorieDepense = new CategorieDepense($type); 
        $categorieDepense->insert();
    }

    $response = true;
    echo json_encode($response);
    exit();
?>