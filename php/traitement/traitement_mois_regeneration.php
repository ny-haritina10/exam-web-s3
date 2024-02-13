<?php
    require_once("../model/Cueillette.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['mois'])) {
            $moisSelectionnes = $_POST['mois'];
            Cueillette::regeneration_mois($moisSelectionnes);

            header("Location: ../../affichage/insert_tea.php");
        } 
    } 
?>