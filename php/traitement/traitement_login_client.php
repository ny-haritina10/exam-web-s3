<?php
    require_once("../model/Client.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $bool = Client::authentification($email, $password);

    if ($bool) {
        header("Location: ../../affichage/index_front_office.php");
    }

    else {
        header("Location: ../../affichage/index.php?error=e");
    }
?>