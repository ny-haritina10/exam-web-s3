<?php
    require_once("../php/model/SalaireCueilleur.php");
    require_once("../php/model/Cueilleur.php");
    $all_salaire_cueilleur = SalaireCueilleur::get_all("SalaireCueilleur");
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
            <?php 
                include("./partials/_sidebar.php");
            ?>
            <!-- partial -->
            <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                <div class="card">
                    
                  <div class="card-body">
                    <h4 class="card-title">Liste salaire cueilleur</h4>
                    <p class="card-description">  <code></code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> Cueilleur</th>
                          <th> Salaire </th>
                          <th>DELETE</th>
                          <th>UPDATE</th>
                        </tr>
                      </thead>
                      <tbody>

                          <?php for ($i = 0; $i < count($all_salaire_cueilleur); $i++) { ?>
                              <tr>
                                <td><?php echo (Cueilleur::get_by_id($all_salaire_cueilleur[$i]["id_cueilleur"])->getNom()); ?></td>
                                <td><?php echo ($all_salaire_cueilleur[$i]["salaire"]); ?></td>
                                <td><a href="../php/traitement/traitement_delete_salaire_cueilleur.php?id=<?php echo $all_salaire_cueilleur[$i]['id']; ?>">DELETE</a></td>
                                <td><a href="insert_salaire_cueilleur.php?id=<?php echo $all_salaire_cueilleur[$i]['id']; ?>">UPDATE</a></td>
                              </tr>
                          <?php } ?>   

                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
    </div>

    <?php
      include("./partials/_footer.php"); 
    ?>

    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <script src="./assets/js/file-upload.js"></script>
  </body>
</html>