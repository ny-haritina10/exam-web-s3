<?php
    require_once("../model/Parcelle.php");

    $id = $_GET['id'];
    Parcelle::delete($id);

    header("Location: ../../affichage/liste_parcelle.php");
?>