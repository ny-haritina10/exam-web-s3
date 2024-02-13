<?php
    $months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
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

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Insertion catégorie dépense</h4>
                                <p class="card-description">  </p>

                                <form class="forms-sample" action="../php/traitement/traitement_mois_regeneration.php" method="post">
                                    <div class="form-group">
                                        <label for="checkbox-mois">Mois</label><br>
                                        <?php
                                            foreach($months as $month) {
                                                echo '<div class="form-check form-check-inline">';
                                                echo '<input class="form-check-input" type="checkbox" id="' . strtolower($month) . '" name="mois[]" value="' . $month . '">';
                                                echo '<label class="form-check-label" for="' . strtolower($month) . '">' . $month . '</label>';
                                                echo '</div>';
                                            }
                                        ?>
                                    </div>

                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
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