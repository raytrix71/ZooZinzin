<?php 
session_start();
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$id=$_GET['idGroupe'];
$listegroupe=Groupe::fetchListGroupeFromDatabase();
foreach($listegroupe as $groupe){
    if($groupe->getIDGroupe()==$id){
        $resultat=$groupe;
    }
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FicheGroupe</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body class="text-center" style="background: rgb(217,217,217);">
    <div class="row" style="border-color: var(--bs-body-bg);background: var(--bs-body-bg);">
        <div class="col justify-content-center" style="border: 2px solid var(--bs-emphasis-color) ;">
            <h1>Fiche Groupe</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 4px;"><img style="border-radius: 25px;border: 2px solid var(--bs-emphasis-color);margin-bottom: 20px;margin-top: 20px;" width="250" height="150" src="/Image/espece/<?php echo $groupe->getNomEspece() ?>.jpg">
                <div style="background: var(--bs-body-bg);border: 2px solid var(--bs-emphasis-color);border-radius: 25px;">
                    <h1 style="text-align: center;">ID groupe:&nbsp;&nbsp;</h1>
                    <h1 style="text-align: left;">Enclos:<?php echo " ".$groupe->getIDParcelle() ?></h1>
                    <h1 style="text-align: left;">Espece:<?php echo " ".$groupe->getNomEspece() ?></h1>
                    <h1 style="text-align: left;">Effectif:<?php echo " ".$groupe->getEffectifGroupe() ?></h1>
                    <h1 style="text-align: left;">Poids Total:<?php echo " ".$groupe->getPoidsTotalGroupe() ?></h1>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 4px;">
                <div style="background: var(--bs-body-bg);border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 5px;">
                    <h1 style="margin-top: 10px;">Commentaire</h1>
                    <p><?php echo $groupe->getCommentaireGroupe() ?></p>
                    <hr>
                </div><button class="btn btn-primary" type="button" style="margin-left: 25px;background: rgb(54,123,34);margin-top: 15px;" data-bs-target="#modal-1" data-bs-toggle="modal">Modifier effectif</button><button class="btn btn-primary" type="button" style="margin-left: 25px;background: rgb(54,123,34);margin-top: 15px;" data-bs-target="#modal-2" data-bs-toggle="modal">Modifier commentaire</button>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modification Groupe</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post" action="/Fonction_PHP/Gestion_Animaux/UpdateEffectifGroupe.php">
                <input type="hidden" name="idGroupe" value="<?php echo $groupe->getIDGroupe() ?>">
                    <div class="modal-body"><input class="form-control" type="number" name="effectif" placeholder="Nombre d'animaux à ajouter" required="" min="1"></div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal" data-bs-target="#modal-1" data-bs-toggle="modal">Fermer</button><button class="btn btn-primary" type="submit" style="background: rgb(54,123,34);">Enregistrer</button></div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modification Commentaire</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post" action="/Fonction_PHP/Gestion_Animaux/UpdateCommentaireGroupe.php">
                    <input type="hidden" name="idGroupe" value="<?php echo $groupe->getIDGroupe() ?>">
                    <div class="modal-body"><input class="form-control" type="text" name="commentaire" placeholder="Commentaire" min="1" required="" value="<?php echo $groupe->getCommentaireGroupe() ?>"></div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal" data-bs-target="#modal-2" data-bs-toggle="modal">Fermer</button><button class="btn btn-primary" type="submit" style="background: rgb(54,123,34);">Enregistrer</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>