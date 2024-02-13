<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/SalaireCueilleur.php");

    $id_cueilleur = $_POST['id-cueilleur'];
    $salaire = $_POST['salaire'];

    if (isset($_POST['update'])) {
        $id = $_POST['update'];
        $salaireCueilleur = new SalaireCueilleur($id_cueilleur, $salaire);
        SalaireCueilleur::update($salaireCueilleur, $id);
    } else {
        $salaireCueilleur = new SalaireCueilleur($id_cueilleur, $salaire);
        $salaireCueilleur->insert();
    }

    $response = true;
    echo json_encode($response);
    exit();
?>