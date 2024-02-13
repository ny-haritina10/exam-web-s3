<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/Parcelle.php");

    $id_tea = $_POST['id-tea'];
    $num_parc = $_POST['num-parcelle'];
    $surface = $_POST['surface'];

    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        $parcelle = new Parcelle($id_tea, $num_parc, $surface);
        Parcelle::update($parcelle, $id);
    } else {
        $parcelle = new Parcelle($id_tea, $num_parc, $surface);
        $parcelle->insert();
    }

    $response = true;
    echo json_encode($response);
    exit();
?>