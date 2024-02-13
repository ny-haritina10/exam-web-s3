<?php
    session_start();
    header("Content-Type: application/json");

    require_once("../model/Cueilleur.php");

    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $dtn = $_POST['dtn'];
    $poids_min = $_POST['poids_min'];
    $bonus = $_POST['bonus'];
    $malus = $_POST['malus'];

    if (isset($_POST['update']) && !empty($_POST['update'])) {
        $id = $_POST['update'];
        $cueilleur = new Cueilleur($nom, $genre, $dtn, $poids_min, $bonus, $malus);
        Cueilleur::update($cueilleur, $id);
    } else {
        $cueilleur = new Cueilleur($nom, $genre, $dtn, $poids_min, $bonus, $malus);
        $cueilleur->insert();
    }

    $response = true;
    echo json_encode($response);
    exit();
?>