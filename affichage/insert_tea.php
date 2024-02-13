<?php
    // Inclure le fichier du modèle Tea
    require_once("../php/model/Tea.php");

    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $tea = Tea::get_by_id($_GET['id']);
    }
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
                                <h4 class="card-title">Insertion thé</h4>
                                <p class="card-description">  </p>
                                <form class="forms-sample" id="tea-form">
                                    <input type="hidden" name="update" value="<?php echo isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] : ''; ?>">

                                    <div class="form-group">
                                        <label for="input-variete">Nom de variété de thé</label>
                                        <!-- Utiliser les informations récupérées pour pré-remplir les champs du formulaire -->
                                        <input type="text" class="form-control" name="variete" placeholder="Variété thé" value="<?php echo isset($tea) ? $tea->get_nom_variete() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="occupation">Occupation</label>
                                        <input type="number" class="form-control" name="occupation" placeholder="Occupation" value="<?php echo isset($tea) ? $tea->get_occupation() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="rendement">Rendement par pied</label>
                                        <input type="number" class="form-control" name="rendement" placeholder="Rendement" value="<?php echo isset($tea) ? $tea->get_rendement() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="rendement">Prix de vente</label>
                                        <input type="number" class="form-control" name="prix_vente" placeholder="Prix de vente" value="<?php echo isset($tea) ? $tea->get_prix_vente() : ''; ?>">
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

<script src="../js/insert-tea.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>