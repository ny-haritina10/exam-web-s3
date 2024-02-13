<?php
    session_start();
    header("Content-Type: application/json");
    require_once("../model/Cueillette.php");

    $dt = $_POST['date-prevision'];
    $prevision = Cueillette::prevision($dt);

    // Formattez les données en JSON
    $response = array(
        "success" => true,
        "parcelles" => $prevision
    );

    echo json_encode($response);
    exit();
?>