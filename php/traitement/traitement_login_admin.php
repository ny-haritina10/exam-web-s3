<?php
    require_once("../model/Admin.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $bool = Admin::authentification($email, $password);

    if ($bool) {
        header("Location: ../../affichage/insert_tea.php");
    }

    else {
        header("Location: ../../affichage/index.php?error=e");
    }
?>