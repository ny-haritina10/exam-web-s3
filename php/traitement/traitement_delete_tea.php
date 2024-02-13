<?php
    require_once("../model/Tea.php");

    $id = $_GET['id'];
    Tea::delete($id);

    header("Location: ../../affichage/liste_tea.php");
?>