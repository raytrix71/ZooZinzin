<?php include '../../../Model/Animal.php';?>
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

<body style="border-radius: 25px;background: rgb(217,217,217);">

<?php
$listeanimal = Animal::fetchListAnimalFromDatabase();?>
<?php foreach ($liste as $animal): ?>
    <?php if($animal->getNomEspece() == $_GET['nomespece']):  ?>
        <div class="card d-table" style="margin-top: 4px;border: 2px solid var(--bs-emphasis-color);padding-right: 0px;margin-left: 15px;margin-right: 15px;margin-bottom: 15px;"><img class="card-img-top w-100 d-block" alt="Photography of Gray and Black Monkey" width="200" height="100" style="padding-bottom: 0px;padding-right: 0px;margin-bottom: 2px;border-radius: 20px;margin-top: 0px;" src="assets/img/pexels-photo-733998.jpeg">
            <div class="card-body d-table" style="margin-right: 164px;padding-right: 0px;">
                <h3 class="d-table card-title"><?php echo $animal->getNomAnimal()?></h3>
                <?php
                $birthDate = new DateTime($animal->getDateNaissance());
                $today = new DateTime();
                $age = $birthDate->diff($today)->y;
                ?>
                <p class="card-text">AGE : <?php echo $age; ?> ans</p>
                <p class="card-text">POIDS : <?php echo $animal->getPoids() ?></p>
                <p class="card-text">TAILLE :<?php echo $animal->getTaille() ?></p>
                <p class="card-text">SEXE :<?php echo $animal->getSexe() ?></p><a class="btn btn-primary" role="button" href="index-1.html" style="background: RGB(54,123,34);">Ouvrir</a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>