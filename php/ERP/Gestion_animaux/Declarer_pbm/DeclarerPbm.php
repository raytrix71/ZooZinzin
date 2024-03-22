<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Déclarer problème</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Déclarer un problème</h2>
                            <hr>
                            <form method="post" action="../../../../Fonction_PHP/Gestion_Animaux/DeclarerPbm.php">
                                <div class="mb-3">
                                    <label for="IDAnimal" class="form-label">ID Animal (optionnel si groupe)</label>
                                    <input class="form-control" type="text" id="IDAnimal" name="IDAnimal" placeholder="ID ANIMAL (si applicable)">
                                </div>
                                <div class="mb-3">
                                    <label for="IDGroupe" class="form-label">ID Groupe (optionnel si animal)</label>
                                    <input class="form-control" type="text" id="IDGroupe" name="IDGroupe" placeholder="ID GROUPE (si applicable)">
                                </div>
                                <div class="mb-3">
                                    <label for="DatePB" class="form-label">Date du problème</label>
                                    <input class="form-control" id="DatePB" name="DatePB" type="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="DescriptionPB" class="form-label">Description du problème</label>
                                    <input class="form-control" type="text" id="DescriptionPB" name="DescriptionPB" placeholder="Description du problème" required>
                                </div>
                                <div class="mb-3">
                                    <label for="SoinsRealiseAvantIntervention" class="form-label">Soins réalisés avant intervention (optionnel)</label>
                                    <input class="form-control" type="text" id="SoinsRealiseAvantIntervention" name="SoinsRealiseAvantIntervention" placeholder="Soins réalisés avant intervention">
                                </div>
                                <div class="mb-3">
                                    <label for="StatutProblene" class="form-label">Statut du problème</label>
                                    <input class="form-control" type="text" id="StatutProblene" name="StatutProblene" placeholder="Statut du problème" required>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image (optionnel)</label>
                                    <input class="form-control" type="file" id="image" name="image" accept="image/*">
                                </div>
                                <hr>
                                <button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Déclarer</button>
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
