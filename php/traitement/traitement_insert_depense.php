<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/Depense.php");

    $Date = $_POST['Date'];
    $depense = $_POST['depense'];
    $montant = $_POST['montant'];

    $depense = new Depense($depense,$Date, $montant); 
    $depense->insert();

    $response = true;
    echo json_encode($response);
    exit();
?>