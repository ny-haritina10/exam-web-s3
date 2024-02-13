<?php
    require_once("../model/CategorieDepense.php");

    $id = $_GET['id'];
    CategorieDepense::delete($id);

    header("Location: ../../affichage/liste_categorie_depense.php");
?>