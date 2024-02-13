<?php
    require_once("../php/model/Tea.php");
    $all_tea = Tea::get_all("Tea");

    // Vérifiez si l'ID de la parcelle à mettre à jour est passé dans l'URL
    if(isset($_GET['id'])) {
        require_once("../php/model/Parcelle.php");
        // Récupérez les informations de la parcelle à mettre à jour
        $parcelle = Parcelle::get_by_id($_GET['id']);
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
                          <h4 class="card-title">Insertion Parcelle</h4>
                          <p class="card-description">  </p>
                          
                          <form class="forms-sample" id="parcelle-form">
                            <input type="hidden" name="update" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

                            <div class="form-group">
                                <label for="input-variete">Thé</label>
                                <select name="id-tea" class="form-control">
                                    <?php for ($i = 0; $i < count($all_tea); $i++) { ?>
                                        <?php $selected = isset($parcelle) && $parcelle->get_id_tea() == $all_tea[$i]["id"] ? 'selected' : ''; ?>
                                        <option class="form-control" value="<?php echo ($all_tea[$i]["id"]); ?>" <?php echo $selected; ?>>
                                            <?php echo ($all_tea[$i]["nom_variete"]); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>


                              <div class="form-group">
                                <label for="occupation">Numero Parcelle</label>
                                <!-- Utilisez les informations récupérées pour pré-remplir les champs -->
                                <input type="number" class="form-control" name="num-parcelle" placeholder="Occupation" value="<?php echo isset($parcelle) ? $parcelle->get_num_parcelle() : ''; ?>">
                              </div>

                              <div class="form-group">
                                <label for="rendement">Surface</label>
                                <!-- Utilisez les informations récupérées pour pré-remplir les champs -->
                                <input type="number" class="form-control" name="surface" placeholder="Rendement" value="<?php echo isset($parcelle) ? $parcelle->get_surface() : ''; ?>">
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

<script src="../js/insert-parcelle.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>