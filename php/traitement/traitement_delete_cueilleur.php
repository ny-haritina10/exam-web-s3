<?php
    require_once("../model/Cueilleur.php");

    $id = $_GET['id'];
    Cueilleur::delete($id);

    header("Location: ../../affichage/liste_cueilleur.php");
?>