<?php
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$espece=$_GET['nomEspece'];
$idGroupe=$_GET['IDGroupe'];
$idAnimal=$_GET['IDAnimal'];
$liste=Parcelle::getEnclosComptatible($espece);
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AffectationEnclos</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: RGB(217,217,217);">
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Affecter un enclos</h2>
                            <hr>
                            <form method="post" action="/Fonction_PHP/Gestion_Animaux/UpdateEnclos.php">
                                <h6>Espece</h6>
                                <div class="mb-3"><input value="<?php echo $espece ?>" class="form-control" type="text" id="NomEspece" name="NomEspece" placeholder="Nom Espece" required="" readonly=""></div>
                                <?php if($idGroupe=='null'): ?>
                                    <h6>ID Animal</h6>
                                    <input type="hidden" value="NULL" name="IDGroupe">
                                <div class="mb-3"><input value="<?php echo $idAnimal ?>" class="form-control" type="text" id="IDAnimal" name="IDAnimal" placeholder="ID Animal"  readonly=""></div>
                                <?php else: ?>
                                    <h6>ID Groupe</h6>
                                    <input type="hidden" value="NULL" name="IDAnimal">
                                <div class="mb-3"><input value="<?php echo $idGroupe ?>" class="form-control" type="text" id="IDGroupe" name="IDGroupe" placeholder="ID Groupe"  readonly=""></div>
                                <?php endif; ?>
                                <h6>Enclos</h6>
                                <select name="IDParcelle" class="form-select" required="">   
                                    <?php foreach($liste as $parcelle): ?>
                                        <?php echo '<option value="'.$parcelle->getIDParcelle().'">'.$parcelle->getIDParcelle().'</option>' ?>
                                    <?php endforeach; ?>
                                </select>
                                <hr>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Affecter</button></div>
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