<?php
session_start();
include '/var/www/html/autoload.php';
$listeParcelle=Parcelle::fetchParcelleFromDB();
$listeAnimal=Animal::fetchListAnimalFromDatabase();
$listeAliment=Aliment::queryAliment();
$listeRepas=TourneeRepas::fetchlistRepasNow();
$listeGroupe=Groupe::fetchListGroupeFromDatabase();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeRepas</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(217,217,217);">

<?php foreach($listeParcelle as $Parcelle): ?>
    <?php if($Parcelle->getIDZone()==$_SESSION['IDzone']):?>
        <div class="row" style="background: rgb(54,123,34);">
            <div class="col d-flex d-md-flex justify-content-center align-items-center justify-content-md-center">
                <div style="background: var(--bs-body-bg);border-radius: 25px;padding-left: 0px;border-style: solid;border-color: var(--bs-emphasis-color);margin-bottom: 5px;margin-top: 5px;">
                    <h2 style="margin-top: 5px;margin-right: 10px;margin-left: 10px;">Enclos:<?php echo $Parcelle-> getIDParcelle() ?> &nbsp;</h2>
                </div>
            </div>
        </div>
        <?php //boucle pour chaque enclos ?>
        <?php foreach($listeAnimal as $animal):?>
            <?php if($animal->getIDParcelle()==$Parcelle->getIDParcelle()): ?>
                <?php 
                    $repasTrouve = false; // Initialisez la variable repasTrouve
                ?>
                <div class="row">
                    <div class="col">
                        <h1><?php echo $animal->getNomAnimal()." - ".$animal->getNomEspece() ?></h1>
                    </div>
                </div>
                <?php foreach($listeRepas as $repas): ?>
                    <?php if($animal->getIDAnimal()==$repas->getIDAnimal()): ?>
                        <?php 
                            $repasTrouve = true; // Indique qu'un repas a été trouvé pour cet animal
                        ?>
                        <div class="row">
                            <div class="col">
                                <div class="card" style="background: rgb(217,217,217);">
                                    <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php foreach($listeAliment as $aliment):?>
                                                        <?php if($aliment->getIDAliment()==$repas->getIDAliment()): ?>
                                                            <h4><?php echo $aliment->getNomAliment() ?></h4>
                                                        <?php endif; ?>
                                                    <? endforeach; ?>
                                                    <h6 class="text-muted mb-2">Qte: <?php echo " ".$repas->getQteDonnee()." " ?> KG</h6>
                                                </div>
                                                <div class="col-md-6 d-md-flex d-lg-flex justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center"><button onclick="window.location.href='/Fonction_PHP/SoinsRepas/ValidationRepas.php?idRepas=<?php echo $repas->getIDRepas() ?>'" class="btn btn-primary" type="button" style="background: rgb(54,123,34);">Valider</button></div>
                                            </div>
                                        </div>
                                        <h1 style="margin-right: 0px;"></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach;?>
                <?php 
                    if (!$repasTrouve) { // Si aucun repas n'a été trouvé pour cet animal, n'affichez pas l'animal
                        continue;
                    }
                ?>
            <?php endif; ?>
        <?php endforeach;?>
    <?php endif; ?>
<?php endforeach; ?>

   
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>