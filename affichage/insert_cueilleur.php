<?php
    require_once("../php/model/Tea.php");

    // Vérifiez si l'ID du cueilleur à mettre à jour est passé dans l'URL
    if(isset($_GET['id'])) {
        require_once("../php/model/Cueilleur.php");
        // Récupérez les informations du cueilleur à mettre à jour
        $cueilleur = Cueilleur::get_by_id($_GET['id']);
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
                                <h4 class="card-title">Insertion cueilleur</h4>
                                <p class="card-description">  </p>
                                
                                <form class="forms-sample" id="cueilleur-form">
                                    <input type="hidden" name="update" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <!-- Utilisez les informations récupérées pour pré-remplir les champs -->
                                        <input type="text" class="form-control" name="nom" placeholder="Nom" value="<?php echo isset($cueilleur) ? $cueilleur->getNom() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="genre">Genre</label>
                                        <select name="genre" class="form-control">
                                            <option value="Homme" <?php echo isset($cueilleur) && $cueilleur->getGenre() == 'Homme' ? 'selected' : ''; ?>>Homme</option>
                                            <option value="Femme" <?php echo isset($cueilleur) && $cueilleur->getGenre() == 'Femme' ? 'selected' : ''; ?>>Femme</option>
                                            <option value="Autre" <?php echo isset($cueilleur) && $cueilleur->getGenre() == 'Autre' ? 'selected' : ''; ?>>Autre</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Date Naissance</label>
                                        <input type="date" class="form-control" name="dtn" placeholder="Date Naissance" value="<?php echo isset($cueilleur) ? $cueilleur->getDateNaissance() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Poids minimum journalier</label>
                                        <input type="number" class="form-control" name="poids_min" placeholder="Poids minimum journalier" value="<?php echo isset($cueilleur) ? $cueilleur->getPoidsMinJournalier() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Bonus pour poids minimum</label>
                                        <input type="number" class="form-control" name="bonus" placeholder="Bonus pour poids minimum" value="<?php echo isset($cueilleur) ? $cueilleur->getBonus() : ''; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Malus pour poids minimum</label>
                                        <input type="number" class="form-control" name="malus" placeholder="Malus pour poids minimum" value="<?php echo isset($cueilleur) ? $cueilleur->getMalus() : ''; ?>">
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

<script src="../js/insert-cueilleur.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>