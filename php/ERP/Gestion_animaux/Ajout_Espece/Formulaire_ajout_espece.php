<?php include('../../NavBar/navbar.php')?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AjoutEspece</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Ajout espèce</h2>
                            <form method="post" action="../../../Fonction_PHP/Gestion_Animaux/ajout_EspeceSQL.php">
                                <div class="mb-3"><input class="form-control" type="text" id="NomEspece" name="nom_espece" placeholder="Nom Espèce" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="Esperance" name="esperance" placeholder="Espérance de vie" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="taille" name="taille" placeholder="Taille moyenne (m)" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="poids" name="poids" placeholder="Poids moyen (KG)" required=""></div>
                                <div class="mb-3"><input class="form-control" type="number" id="gestation" name="gestation" placeholder="Temps gestation (mois)" required=""></div>
                                <div class="mb-3"><input class="form-control" type="text" id="descriptiom" name="description" placeholder="Description" required=""></div>
                                <div class="mb-3">
                                    <p>Image</p><input class="form-control" type="file" id="image" name="image" placeholder="Image" accept="image/*">
                                </div>
                                <div><button class="btn btn-primary d-block w-100" type="submit">Ajouter l'espèce</button></div>
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