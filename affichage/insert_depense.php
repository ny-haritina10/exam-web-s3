<?php
    require_once("../php/model/BaseModel.php");
    $depenses  = BaseModel::get_all("CategorieDepense");
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
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
                <h4 class="card-title">Insertion Depense</h4>
                <p class="card-description">  </p>
                <form class="forms-sample" id="depense-form">

                  <div class="form-group">
                    <label for="input-variete">Date</label>
                    <input type="date" class="form-control" name="Date" placeholder="Date">
                  </div>

                  <div class="form-group">
                    <label for="occupation">Depense</label>
                    <select name="depense" class="form-control" id="">
                    <?php
                        foreach ($depenses as $depense) { ?>
                          <option value="<?php echo $depense['id']; ?>"><?php echo $depense['type_depense']; ?></option>
                      <?php } ?>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="rendement">Montant</label>
                    <input type="number" class="form-control" name="montant" placeholder="Montant">
                  </div>
                  
                  <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
    </div>
    <?php include("./partials/_footer.php"); ?>
</div>

<script src="../js/insert-depense.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>