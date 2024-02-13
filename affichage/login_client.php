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
              <form id="client-form">
                <h4 class="card-title">Login Client</h4>
                <p class="card-description">  </p>
                <form class="forms-sample" id="tea-form">

                  <div class="form-group">
                    <label for="input-variete">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="occupation">Our password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  
                  <button type="submit" class="btn btn-gradient-primary me-2">Se connecter</button>
                </form>
              </div>
            </div>
          </div>
    </div>
    <?php include("./partials/_footer.php"); ?>
</div>

<script src="../js/login.js"></script>

<script src="./assets/vendors/js/vendor.bundle.base.js"></script>
<script src="./assets/js/off-canvas.js"></script>
<script src="./assets/js/hoverable-collapse.js"></script>
<script src="./assets/js/misc.js"></script>
<script src="./assets/js/file-upload.js"></script>
</body>
</html>