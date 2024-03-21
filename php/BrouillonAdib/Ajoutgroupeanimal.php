<?php  include '/var/www/html/autoload.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';
 ?>
 
 <!DOCTYPE html>
 <html data-bs-theme="light" lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>ajout groupe animal</title>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
 </head>
 
 <body>
     <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
         <div class="container position-relative">
             <div class="row d-flex justify-content-center">
                 <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                     <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                         <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                             <h2 class="text-center mb-4">Ajout groupe Animal</h2>
                             <form method="POST" action=".php">
                                 <div class="mb-3">
                                     <label for="parcelle" class="form-label">Numéro Parcelle</label>
                                     <select class="form-select" name="IDParcelle" id="IDparcelle" placeholder="Numéro Parcelle">
                                         <?php $Parcelles = afficherParcelle(); 
                                         foreach ($Parcelles as $parcelle): ?>
                                             <option value="<?= htmlspecialchars($parcelle['IDParcelle']) ?>"><?= htmlspecialchars($parcelle['IDParcelle']) ?></option>
                                         <?php endforeach; ?>
                                     </select>
                                 </div>
 
                                 <div class="mb-3">
                                     <label for="espece" class="form-label">Nom Espèce</label>
                                     <select class="form-select" name="NomEspece" id="espece">
                                         <?php $especes = afficherEspeceGroupe();
                                         foreach ($especes as $espece):
                                             if($espece['Individuel'] == 0): ?>
                                                 <option value="<?= htmlspecialchars($espece['NomEspece']) ?>"><?= htmlspecialchars($espece['NomEspece']) ?></option>
                                             <?php endif; 
                                         endforeach; ?>
                                     </select>
                                 </div>
 
                                 <div class="mb-3">
                                     <label for="EffectifGroupe" class="form-label"></label>
                                     <input class="form-control" type="number" id="EffectifGroupe" name="EffectifGroupe" placeholder="Effectif groupe">
                                 </div>
 
                                 <div class="mb-3">
                                     <label for="PoidsTotalGroupe" class="form-label"></label>
                                     <input class="form-control" type="number" id="PoidsTotalGroupe" name="PoidsTotalGroupe" placeholder="Poids total du groupe">
                                 </div>
 
                                 <div class="mb-3">
                                     <label for="CommentaireGroupe" class="form-label"></label>
                                     <input class="form-control" type="text" id="CommentaireGroupe" name="CommentaireGroupe" placeholder="Description">
                                 </div>

                                 <hr>
                                <div class="mb-3">
                                    <p>Image</p><input class="form-control" type="file" id="image" name="image" placeholder="Image" accept="image/*">
                                </div>
                                <hr>
 
                                 <button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);">Ajouter</button>
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
 