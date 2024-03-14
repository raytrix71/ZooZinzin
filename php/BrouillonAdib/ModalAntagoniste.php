<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<?php  include '../Model/Antagoniste.php'; include '../Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php'?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Antagoniste</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Antagoniste</h2>
                            <h5 class="text-center mb-4">Prédateurs</h5>
                            <form method="post">
                            
                                <div class="mb-3"></div>
                                <?php 
                                  $especes = afficherEspece2();

                                foreach ($especes as $espece) {
                                echo '<div class="form-check">';
                                echo '<input class="form-check-input" type="checkbox" id="formCheck-' . $espece['NomEspece'] . '">';
                                echo '<label class="form-check-label" for="formCheck-' . $espece['NomEspece'] . '" style="margin-left: 10px;">' . $espece['NomEspece'] . '</label>';
                                echo '</div>';  }
                                ?>
  
                                <div class="form-check"><input id="formCheck-2" class="form-check-input" type="checkbox" /><label class="form-check-label" for="formCheck-2" style="margin-left: 10px;">Singe</label></div>
                                <div class="mb-3"></div>
                                <div class="mb-3" style="margin-bottom: 13px;"></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"></div>
                                <hr><input class="form-control" type="hidden" name="protege" value="0"><input class="form-control" type="hidden" name="individuel" value="0">
                                <h5 class="text-center mb-4">Proie</h5>

                                <div class="mb-3"></div>
                                <?php 
                                  $especes = afficherEspece2();

                                foreach ($especes as $espece) {
                                echo '<div class="form-check">';
                                echo '<input class="form-check-input" type="checkbox" id="formCheck-' . $espece['NomEspece'] . '">';
                                echo '<label class="form-check-label" for="formCheck-' . $espece['NomEspece'] . '" style="margin-left: 10px;">' . $espece['NomEspece'] . '</label>';
                                echo '</div>';  }
                                ?>
                                <hr>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Ajouter l'espèce</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>