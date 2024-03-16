<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<?php  include '/var/www/html/autoload.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';
 ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ajout groupe animal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="POST" action="FonctionajtGroupe.php" class="custom-form">
                <h1>Formulaire Ajout groupe Animal</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Parcelle</label></div>
                    <div class="col-sm-6 input-column">  

                        <select class="form-control" name="IDParcelle" id="parcelle" style="color:black">

                            <?php $Parcelles = afficherParcelle(); 
                    
                            foreach ($Parcelles as $parcelle): ?>

                            <option value="<?= htmlspecialchars($parcelle['IDParcelle']) ?>"><?= htmlspecialchars($parcelle['IDParcelle']) ?></option>
                            <?php endforeach; ?>
                        
                        </select>

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Espece</label></div>
                    <div class="col-sm-6 input-column">

                    <select class="form-control" name="NomEspece" id="espece" style="color:black">
                        <?php 
                        $especes = afficherEspeceIndividuelle(); 
                        var_dump($especes);// Appel function affch espece
                        
                        foreach ($especes as $espece): ?>
                        <?php
                        if($espece['Individuel'] == 0){ // Si l'espece est pas individuelle ?>
                                <option value="<?= htmlspecialchars($espece['NomEspece']) ?>"><?= htmlspecialchars($espece['NomEspece']) ?></option>
                        <?php } endforeach; ?>
                     </select>

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Effectif groupe</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="EffectifGroupe"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Poids total du groupe</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="PoidsTotalGroupe"></div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Description</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="CommentaireGroupe"></div>
                </div>
                </div><button class="btn btn-light submit-button" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>