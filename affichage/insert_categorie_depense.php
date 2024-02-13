<?php
    // Inclure le fichier du modèle CategorieDepense
    require_once("../php/model/CategorieDepense.php");

    // Vérifier si un ID de catégorie de dépense est passé dans l'URL
    if(isset($_GET['id'])) {
        // Récupérer les informations de la catégorie de dépense à partir de l'ID
        $cat = CategorieDepense::get_by_id($_GET['id']);
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
                                <h4 class="card-title">Insertion catégorie dépense</h4>
                                <p class="card-description">  </p>

                                <?php if (isset($cat)) { ?>
                                    <form class="forms-sample" id="categorie-depense-form">
                                        <input type="text" hidden name="update" value="<?php echo $_GET['id']; ?>">

                                        <div class="form-group">
                                            <label for="input-variete">Type dépense</label>
                                            <!-- Utiliser les informations récupérées pour pré-remplir le champ du formulaire -->
                                            <input type="text" class="form-control" name="type" placeholder="Type Dépense" value="<?php echo $cat->getTypeDepense(); ?>" >
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>

                                <?php } else { ?>
                                    <form class="forms-sample" id="categorie-depense-form">
                                        <div class="form-group">
                                            <label for="input-variete">Type dépense</label>
                                            <input type="text" class="form-control" name="type" placeholder="Type Dépense">
                                        </div>
                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("./partials/_footer.php"); ?>

<script src="../js/insert-categorie-depense.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>