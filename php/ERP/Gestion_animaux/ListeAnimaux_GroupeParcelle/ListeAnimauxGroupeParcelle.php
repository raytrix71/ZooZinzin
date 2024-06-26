<?php 
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$idparcelle=$_GET['idparcelle'];
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ParcelleV2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">
    <div style="margin-left: 10px;display: flex;">
    <?php $listeanimal = Animal::fetchListAnimalFromDatabase();?>
        <?php foreach ($listeanimal as $animal): ?>
            <?php if($animal->getIDParcelle() == $idparcelle):  ?>


        <div class="card" style="width: 300px;max-width: 300px;min-width: 300px;margin-top: 5px;margin-right: 10px;margin-bottom: 5px;height: 400px;min-height: 400px;max-height: 400px;border: 2px solid var(--bs-emphasis-color) ;"><img src="/Image/Animal/<?php echo $animal->getNomEspece().$animal->getNomAnimal() ?>.jpg" class="card-img-top w-100 d-block" width="298" height="80">
            <div class="card-body">
            <h4 class="card-title"><?php echo $animal->getNomAnimal() ?></h4>
                <hr>
                <div>
                <?php
                        $birthDate = new DateTime($animal->getDateNaissance());
                        $today = new DateTime();
                        $age = $today->diff($birthDate)->y;
                    ?>
                        <h5>Espece:<?php echo " ".$animal->getNomEspece() ?></h5>
                        <h5>Poids:<?php echo $animal->getPoids() ?> kg</h5>
                        <h5>Taille:<?php echo $animal->getTaille() ?> m</h5>
                        <h5>Sexe:<?php echo $animal->getSexe() ?></h5>
                </div>
                <div class="dropdown" style="margin-top: 50px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: RGB(54,123,34);">Gérer&nbsp;</button>
                    <div class="dropdown-menu">
                        <?php if($_SESSION['role']!="soignant"): ?>
                        <a class="dropdown-item" href="/ERP/Gestion_animaux/ChangementParcelle/affectationEnclos.php?nomEspece=<?php echo $animal->getNomEspece() ?>&IDAnimal=<?php echo $animal->getIDAnimal() ?>&IDGroupe=null">Changer de parcelle</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="/ERP/Gestion_animaux/FicheAnimal/FicheAnimal.php?idAnimal=<?php echo $animal->getIDAnimal() ?>">Fiche animal</a>
                        <a class="dropdown-item" href="/ERP/GestionSoinsRepas/Declarer_pbm/DeclarerPbm.php?idAnimal=<?php echo $animal->getIDAnimal() ?>&idGroupe=no">Déclarer un problème</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>  
        <?php $listegroupe = Groupe::fetchListGroupeFromDatabase();?>
    <?php foreach ($listegroupe as $groupe): ?>
        <?php if($groupe->getIDParcelle() == $idparcelle):  ?>
    
        <div class="card" style="width: 300px;max-width: 300px;min-width: 300px;margin-top: 5px;margin-right: 10px;margin-bottom: 5px;height: 400px;min-height: 400px;max-height: 400px;border: 2px solid var(--bs-emphasis-color) ;"><img src="/Image/Espece/<?php echo $groupe->getNomEspece() ?>.jpg" class="card-img-top w-100 d-block" width="298" height="80">
            <div class="card-body">
            <h4 class="card-title">ID Groupe:<?php echo " ".$groupe->getIDGroupe() ?>&nbsp;</h4>
                <hr>
                <div>
                            <h5>Espece:<?php echo " ".$groupe->getNomEspece() ?></h5>
                            <h5>Effectif:<?php echo " ".$groupe->getEffectifGroupe()?></h5>
                            <h5>&nbsp</h5>
                            <h5>&nbsp</h5>
                </div>
                <div class="dropdown" style="margin-top: 50px;"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: RGB(54,123,34);">Gérer&nbsp;</button>
                    <div class="dropdown-menu">
                        <?php if($_SESSION['role']!="soignant"): ?>
                        <a class="dropdown-item" href="/ERP/Gestion_animaux/ChangementParcelle/affectationEnclos.php?nomEspece=<?php echo $groupe->getNomEspece() ?>&IDGroupe=<?php echo $groupe->getIDGroupe() ?>&IDAnimal=null">Changer de parcelle</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="/ERP/Gestion_animaux/FicheGroupe/FicheGroupe.php?idGroupe=<?php echo $groupe->getIDGroupe() ?>">Fiche groupe</a>
                        <a class="dropdown-item" href="/ERP/GestionSoinsRepas/Declarer_pbm/DeclarerPbm.php?idGroupe=<?php echo $groupe->getIDGroupe() ?>&idAnimal=no">Déclarer un problème</a>
                    </div>
                </div>
            </div>
        </div>
    
        <?php endif; ?>
    <?php endforeach; ?>


<?php if(empty($listeanimal)&& empty($listegroupe)): ?>
<script>
    alert("Il n'y a pas d'animaux ou de groupes dans cette parcelle");
    window.location.href = "/ERP/Gestion_animaux/ListeParcelle/ListeParcelle.php";
</script>
<?php endif;?>



    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>