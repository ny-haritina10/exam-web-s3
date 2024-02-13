<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/Tea.php");

    $name_tea = $_POST['variete'];
    $occupation = $_POST['occupation'];
    $rendement = $_POST['rendement'];
    $prix_vente = $_POST['prix_vente'];

    if (isset($_POST['update']) && !empty($_POST['update'])) {
        $id = $_POST['update'];
        $tea = new Tea($name_tea, $occupation, $rendement, $prix_vente);
        Tea::update($tea, $id);
    } else {
        $tea = new Tea($name_tea, $occupation, $rendement, $prix_vente);
        $tea->insert();
    }

    $response = true;
    echo json_encode($response);
    exit();
?>