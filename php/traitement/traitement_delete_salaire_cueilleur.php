<?php
    require_once("../model/SalaireCueilleur.php");

    $id = $_GET['id'];
    SalaireCueilleur::delete($id);

    header("Location: ../../affichage/liste_salaire_cueilleur.php");
?>