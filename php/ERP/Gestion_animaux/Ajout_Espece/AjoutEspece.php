<?php
    session_start();
    include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';
    include '/var/www/html/Fonction_PHP/connexionDB.php';
    include '/var/www/html/Model/Espece.php';
?>    
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AjoutEspece</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script>
        <?php echo 'jason_encode('. Espece::$listEspece->getListEspece .')'?>

    function validateForm() {
    var aliment1 = document.forms["myForm"]["aliment1"].value;
    var aliment2 = document.forms["myForm"]["aliment2"].value;
    var aliment3 = document.forms["myForm"]["aliment3"].value;
    

    if (aliment1 == aliment2 || aliment1 == aliment3 || aliment2 == aliment3) {
        alert("Les aliments doivent être différents.");
        return false;
    }
}
</script>

</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Ajout espèce</h2>
                            <form name="myForm" method="post" action="/Fonction_PHP/Gestion_Animaux/ajout_EspeceSQL.php"  enctype="multipart/form-data" onsubmit="return validateForm()">
                                <div class="mb-3"><input class="form-control" type="text" id="NomEspece" name="nom_espece" placeholder="Nom Espèce" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="Esperance" name="esperance" placeholder="Espérance de vie" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="taille" name="taille" placeholder="Taille moyenne (m)" required="" style="margin-top: 0px;"></div>
                                <div class="mb-3" style="margin-bottom: 13px;"><input class="form-control" type="number" id="poids" name="poids" placeholder="Poids moyen (KG)" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="gestation" name="gestation" placeholder="Temps gestation (mois)" required=""></div>
                                <div class="mb-3"><input class="form-control" type="text" id="descriptiom-1" name="description" placeholder="Description" required=""></div>
                                <div class="mb-3">
                                    <h5>Zone</h5><select class="form-select" name="zone" required="">
                                        <?php afficherZone() ?>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-check"><input class="form-control" type="hidden" name="protege" value="0"><input class="form-check-input" type="checkbox" id="formCheck-1" name="protege" value="1"><label class="form-check-label" for="formCheck-1">Espèce protégé</label></div>
                                <div class="form-check" style="margin-top: 14px;"><input class="form-control" type="hidden" name="individuel" value="0"><input class="form-check-input" type="checkbox" id="formCheck-2" name="individuel" value="1"><label class="form-check-label" for="formCheck-2" style="padding-top: 0px;">Espèce individuelle</label></div>
                                <hr>
                                <div class="mb-3">
                                    <p>Image</p><input class="form-control" type="file" id="image" name="image" placeholder="Image" accept="image/*">
                                </div>
                                <hr>
                                <h3 class="text-center">Régime alimentaire</h3>
                                <div class="mb-3"><select class="form-select" required="" name="aliment1">
                                        <?php afficherAliment() ?>
                                    </select><input class="form-control" type="number" style="margin-right: 0px;margin-top: 9px;" name="qte1" placeholder="Quantité aliment 1 (KG)" required=""></div>
                                <div class="mb-3"><select class="form-select" required="" name="aliment2">
                                        <?php afficherAliment() ?>
                                    </select><input class="form-control" type="number" style="margin-right: 0px;margin-top: 9px;" name="qte2" placeholder="Quantité aliment 2 (KG)" required=""></div>
                                <div class="mb-3"><select class="form-select" required="" name="aliment3" style="margin-bottom: 0px;">
                                        <?php afficherAliment() ?>
                                    </select><input class="form-control" type="number" style="margin-right: 0px;margin-top: 9px;" name="qte3" placeholder="Quantité aliment 3 (KG)" required=""></div>
                                <hr>
                                <h3 class="text-center">Environnement</h3>
                                <div>
                                    <h4 class="text-start">Temperature</h4><input class="form-control" type="number" required="" name="TempMax" min="-10" max="55" placeholder="Température MAX" style="margin-bottom: 8px;"><input class="form-control" type="number" placeholder="Température Min" name="TempMin" required="" min="-10" max="55" style="margin-bottom: 8px;">
                                </div>
                                <div><a class="btn btn-primary" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button" style="background: rgb(127,127,127);">Plus d'options</a>
                                    <div class="collapse" id="collapse-1">
                                        <div>
                                            <h4 class="text-start" style="margin-top: 8px;">PH</h4><input class="form-control" type="number" placeholder="PH Max" min="0" max="14" step="1" name="PHMax" style="margin-bottom: 8px;"><input class="form-control" type="number" name="PHMin" placeholder="PH Min" min="0" max="14" step="1">
                                        </div>
                                        <div>
                                            <h4 class="text-start" style="margin-top: 8px;">Tx d'humidité</h4><input class="form-control" type="number" placeholder="Tx Humidité Max" min="0" max="100" step="1" name="TxHumMax" style="margin-bottom: 8px;"><input class="form-control" type="number" name="TxHumMin" placeholder="Tx Humidité Min" min="0" max="100" step="1">
                                        </div>
                                    </div>
                                </div>
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