<?php
session_start();
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';



$liste=Espece::fetchListEspeceFromDatabase();

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeEspece</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
</head>

<body style="background: rgb(217,217,217);">
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php foreach($liste as $espece): ?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;margin-bottom: 0px;margin-top: 15px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo $espece->getNomEspece(); ?></h4>
                                <h6 class="text-muted mb-2">Zone:<?php echo " ".$espece->getIDZONE(); ?>&nbsp;</h6>
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="background: RGB(54,123,34);">Gérer&nbsp;</button>
                                    <?php if($espece->getIndividuel()==1):?>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="/ERP/Gestion_animaux/ListeAnimaux/ListeAnimaux.php?nomespece=<?php echo $espece->getNomEspece() ?>">Afficher liste animaux</a>
                                        <a class="dropdown-item" href="/ERP/Gestion_animaux/Ajout_Animal/AjoutAnimal.php?nomEspece=<?php echo $espece->getNomEspece() ?>">Ajouter un animal</a><a class="dropdown-item" href="/ERP/Gestion_animaux/ListeAntagonistes/ListeAntagonistes.php?nomespece=<?php echo $espece->getNomEspece()  ?>">Gestion Antagonistes</a></div>
                                    <?php else:?>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="/ERP/Gestion_animaux/ListeGroupe/ListeGroupe.php?nomespece=<?php echo $espece->getNomEspece() ?>">Afficher liste groupe</a>
                                        <a class="dropdown-item" href="/ERP/Gestion_animaux/Ajout_Groupe/AjoutGroupe.php">Ajouter un groupe</a><a class="dropdown-item" href="/ERP/Gestion_animaux/ListeAntagonistes/ListeAntagonistes.php?nomespece=<?php echo $espece->getNomEspece()  ?>">Gestion Antagonistes</a></div>
                                    <?php endif;?>    
                                </div>
                            </div>
                            <div class="col-md-6"><img  src="/Image/Espece/<?php echo$espece->getNomEspece()?>.jpg" width="200" height="100" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 13px;margin-left: 0px;"></div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>   

</body>

</html>