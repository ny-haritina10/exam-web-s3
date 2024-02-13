<?php
    require_once("../php/model/Cueilleur.php");
    $all_cueilleur = Cueilleur::get_all("Cueilleur");

    // Vérifiez si l'ID du cueilleur pour le salaire à mettre à jour est passé dans l'URL
    if(isset($_GET['id'])) {
        require_once("../php/model/SalaireCueilleur.php");
        // Récupérez les informations du cueilleur pour le salaire à mettre à jour
        $salaire_cueilleur = SalaireCueilleur::get_by_id($_GET['id']);
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
                          <h4 class="card-title">Insertion salaire-cueilleur</h4>
                          <p class="card-description">  </p>
                          
                          <form class="forms-sample" id="salaire-cueilleur-form">
                            <input type="hidden" name="update" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

                            <div class="form-group">
                              <label for="input-variete">Cueilleur</label>

                              <select name="id-cueilleur" class="form-control">
                                  <?php for ($i = 0; $i < count($all_cueilleur); $i++) { ?>
                                      <option class="form-control" value="<?php echo ($all_cueilleur[$i]["id"]); ?>"><?php echo ($all_cueilleur[$i]["nom"]); ?></option>
                                  <?php } ?>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="occupation">Salaire cueilleur</label>
                              <!-- Utilisez les informations récupérées pour pré-remplir les champs -->
                              <input type="number" class="form-control" name="salaire" placeholder="Salaire" value="<?php echo isset($salaire_cueilleur) ? $salaire_cueilleur->getSalaire() : ''; ?>">
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

<script src="../js/insert-salaire-cueilleur.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>