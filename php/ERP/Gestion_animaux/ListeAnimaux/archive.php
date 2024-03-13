<?php
include '../../../Model/Animal.php';

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Liste des animaux</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/card-image-zoom-on-hover.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css/bs-theme-overrides.css">
    <link rel="stylesheet" href="assets/css/css/Pretty-Registration-Form-.css">
</head>

<body>


<?php
$listeanimal = Animal::fetchListAnimalFromDatabase();?>
<?php foreach ($liste as $animal): ?>
    <?php if($animal->getNomEspece() == $_GET['nomespece']):  ?>
    <div class="row" style="margin-right: 112px;">
    <div class="col-6" style="margin-right: -1px;">
        <div class="card d-table" style="padding-right: 0px;margin-right: 571px;margin-left: 11px;">
            <div class="card-body d-table" style="margin-right: 164px;padding-right: 0px;">
                <h3 class="d-table card-title"><?= htmlspecialchars($animal->nomAnimal) ?></h3>
                <p class="card-text">Espèce : <?php $animal->getNomEspece() ?></p>
                <p class="card-text">Nom : <?php $animal->getNomAnimal() ?></p>
                <p class="card-text">Date de naissance : <?php echo $animal->getDateNaissance ?> </p>
                <p class="card-text">Poids : <?php echo $animal->getPoids() ?> </p>
                <p class="card-text">Taille : <?php echo $animal->getTaille() ?> </p>
                <p class="card-text">Sexe : <?php echo $animal->getSexe() ?> </p>
                <p class="card-text">Description : <?php echo $animal->getDescription() ?> </p>
                <a class="btn btn-primary" role="button" href="FicheAnimal.php? id=<?= $animal->idAnimal ?>">Ouvrir</a>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php endforeach; ?>
</div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>