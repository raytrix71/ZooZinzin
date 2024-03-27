<?php  
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/Fonction_PHP/Gestion_Animaux/FonctionFomulaireSelect.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$nomespece=$_GET['nomEspece'];
 ?>
 
 <!DOCTYPE html>
 <html data-bs-theme="light" lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
     <title>ajout  animal</title>
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
                             <form enctype="multipart/form-data" method="POST" action="../../../../Fonction_PHP/Gestion_Animaux/ajout_Animal.php">
                             
 
                                 <div class="mb-3">
                                     <label for="espece" class="form-label">Nom Espèce</label>
                                     <input class="form-control" name="NomEspece" id="espece" type="text" readonly="" value="<?php echo $nomespece ?>">
                                 </div>
                                 <br>
                                 <div class="mb-3"><input class="form-control" type="text" id="Esperance" name="NomAnimal" placeholder="Nom animal" required=""></div>

 
                                 <div class="mb-3">
                                     <label for="DateNaissance" class="form-label">Date de Naissance</label>
                                     <input class="form-control" type="date" id="DateNaissance" name="DateNaissance">
                                 </div>
 
                                 <div class="mb-3">
                                     <label for="PoidsTotalGroupe" class="form-label"></label>
                                     <input class="form-control" type="number" id="Poids" min="0" max = "10000" name="Poids" placeholder="Poids (KG) ">
                                 </div>

                                 <div class="mb-3">
                                     <label for="PoidsTotalGroupe" class="form-label"></label>
                                     <input class="form-control" type="number" id="Taille"  min="0" max = "20000" name="Taille" placeholder="Taille (cm) ">
                                 </div>
                                 <br>
                                 <div class="mb-3">
                                    <select class="form-select" id="sexe" name="Sexe">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>                           
                                </div>
                                <br>
                                 <div class="mb-3">
                                     <input class="form-control" type="text" id="Description" name="Description" placeholder="Description">
                                 </div>
                                 

                                 <div class="mb-3">
                                     <label for="parcelle" class="form-label">Numéro Parcelle</label>
                                     <select class="form-select" name="IDParcelle" id="IDparcelle" placeholder="Numéro Parcelle">
                                         <?php $listeparcelles=Parcelle::getEnclosComptatible($nomespece);
                                         foreach ($listeparcelles as $parcelle): ?>
                                             <option value="<?php echo $parcelle->getIDParcelle() ?>"><?php echo $parcelle->getIDParcelle() ?></option>
                                         <?php endforeach; ?>
                                     </select>
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



 