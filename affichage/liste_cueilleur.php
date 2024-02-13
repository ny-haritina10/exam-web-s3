<?php
    require_once("../php/model/Cueilleur.php");
    require_once("../php/model/Tea.php");
    $all_cueilleur = Cueilleur::get_all("Cueilleur");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" />
</head>

<body>

<div class="container-scroller">
    <?php include("./partials/_navbar.php"); ?>

    <div class="container-fluid page-body-wrapper">
        <?php include("./partials/_sidebar.php"); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Liste cueilleur</h4>
                            <p class="card-description">  <code></code></p>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> Numéro cueilleur</th>
                                        <th> Surface en hectare </th>
                                        <th> Variété de thé planté </th>
                                        <th> Poids minimum journalier</th>
                                        <th> Bonus pour poids minimum</th>
                                        <th> Malus pour poids minimum</th>
                                        <th>DELETE</th>
                                        <th>UPDATE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($all_cueilleur as $cueilleur) { ?>
                                        <tr>
                                            <td><?php echo $cueilleur["nom"]; ?></td>
                                            <td><?php echo $cueilleur["genre"]; ?></td>
                                            <td><?php echo $cueilleur["date_naissance"]; ?></td>
                                            <td><?php echo $cueilleur["poids_min_journalier"]; ?></td>
                                            <td><?php echo $cueilleur["bonus"]; ?></td>
                                            <td><?php echo $cueilleur["malus"]; ?></td>
                                            <td><a href="../php/traitement/traitement_delete_cueilleur.php?id=<?php echo $cueilleur['id']; ?>">DELETE</a></td>
                                            <td><a href="insert_cueilleur.php?id=<?php echo $cueilleur['id']; ?>">UPDATE</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("./partials/_footer.php"); ?>

    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/file-upload.js"></script>
</body>
</html>