<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/Cueillette.php");

    $date = $_POST['Date'];
    $cueilleur = $_POST['Cueilleur'];
    $parcelle = $_POST['Parcelle'];
    $poids = $_POST['Poids_Cueillette'];

    $cueillette = new Cueillette($date,$cueilleur, $parcelle, $poids);   
    $cueillette->insert();

    $response = true;
    echo json_encode($response);
    exit();
?>