<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<?php  include '../Model/Animal.php'; include '../Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php'?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ajoutanimalv2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Ajout Animal</h2>
                            <form method="post" action="FonctionajtAnimal">
                                <div class="mb-3">

                                    <select class="form-control" id="Espece" name="nomEspece" required="">Nom Espèce
                                        <?php $especes=afficherEspeceIndividuelle(); ?>
                                        <?php echo $especes; ?>

                                    </select>
                                </div>

                                <div class="mb-3"><input class="form-control" type="text" id="Esperance" name="NomAnimal" placeholder="Nom animal" required=""></div>
                                <div class="mb-3"><input class="form-control" id="taille" name="DateNaissance" placeholder="Date de naissance" required="" style="margin-top: 0px;" type="date"></div>
                                <div class="mb-3" style="margin-bottom: 13px;"><input class="form-control" type="number" id="poids" name="poids" placeholder="Poids (KG)" required="" min="0" max="10 000" step="0,1"></div>
                                <div class="mb-3"><input class="form-control" type="number" id="gestation" name="Taille" placeholder="Taille (cm)" required="" min="0" max="10000" step="0,1"></div>
                                <div class="mb-3"><select class="form-select" name="Sexe">
                                        <option value="">M</option>
                                        <option value="">F</option>
                                    </select><input class="form-control" type="text" id="descriptiom-2" name="description" placeholder="Description" required="" style="margin-top: 15px;">

                            


                                
                                </div><input class="form-control" type="hidden" name="protege" value="0"><input class="form-control" type="hidden" name="individuel" value="0">
                                <div class="mb-3">

                                        <select class="form-control" id="Espece" name="nomEspece" required="">Nom Espèce
                                                <?php $parcelle=afficherParcelle(); ?>
                                                <?php echo $parcelle; ?>

                                        </select>
                                </div>

                                <hr>

                                <div class="mb-3">
                                    <p>Image</p><input class="form-control" type="file" id="image" name="image" placeholder="Image" accept="image/*">
                                </div>
                                <hr>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Ajouter l'animal</button></div>
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