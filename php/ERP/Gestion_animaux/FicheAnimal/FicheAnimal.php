<?php 
session_start();
include '/var/www/html/autoload.php';
include '/var/www/html/ERP/NavBar/navbar.php';
$id=$_GET['idAnimal'];
$listeanimal=Animal::fetchListAnimalFromDatabase();
foreach($listeanimal as $animal){
    if($animal->getIDAnimal()==$id){
        $resultat=$animal;
    }
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FicheAnimal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body class="text-center" style="background: rgb(217,217,217);">
    <div class="row" style="border-color: var(--bs-body-bg);background: var(--bs-body-bg);">
        <div class="col justify-content-center" style="border: 2px solid var(--bs-emphasis-color) ;">
            <h1>Fiche animal</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 4px;"><img style="border-radius: 25px;border: 2px solid var(--bs-emphasis-color);margin-bottom: 20px;margin-top: 20px;" width="250" height="150" src="/Image/Animal/<?php echo $animal->getNomEspece().$animal->getNomAnimal()?>.jpg">
                <div style="background: var(--bs-body-bg);border: 2px solid var(--bs-emphasis-color);border-radius: 25px;">
                    <h1 style="text-align: center;"><?php echo $resultat->getNomAnimal(); ?>&nbsp;</h1>
                    <h1 style="text-align: left;">ID: <?php echo" ".$resultat->getIDAnimal(); ?></h1>
                    <h1 style="text-align: left;">Enclos:<?php echo " ".$resultat->getIDParcelle(); ?></h1>
                    <h1 style="text-align: left;">Espece:<?php echo " ".$resultat->getNomEspece(); ?></h1>
                    <h1 style="text-align: left;">Née le:<?php echo " ".$resultat->getDateNaissance(); ?></h1>
                    <?php
                        $birthDate = new DateTime($resultat->getDateNaissance());
                        $today = new DateTime();
                        $age = $today->diff($birthDate)->y;
                    ?>
                    <h1 style="text-align: left;">Age:<?php echo " ".$age?></h1>
                    <h1 style="text-align: left;">Poids:<?php echo " ".$resultat->getPoids(); ?></h1>
                    <h1 style="text-align: left;">Taille:<?php echo " ".$resultat->getTaille(); ?></h1>
                    <h1 style="text-align: left;">Sexe:<?php echo " ".$resultat->getSexe(); ?></h1>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 4px;">
                <div style="background: var(--bs-body-bg);border-width: 2px;border-style: solid;border-radius: 25px;">
                    <h1>collier connecté</h1>
                    <div class="row">
                        <div class="col"><i class="far fa-heart" style="width: 16px;height: 16px;"></i></div>
                        <div class="col">
                            <h6 style="width: 120px;height: 20px;">123 BPM</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-thermometer-sun" style="width: 16px;height: 16px;">
                                <path d="M5 12.5a1.5 1.5 0 1 1-2-1.415V2.5a.5.5 0 0 1 1 0v8.585A1.5 1.5 0 0 1 5 12.5"></path>
                                <path d="M1 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0zM3.5 1A1.5 1.5 0 0 0 2 2.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0L5 10.486V2.5A1.5 1.5 0 0 0 3.5 1m5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5m4.243 1.757a.5.5 0 0 1 0 .707l-.707.708a.5.5 0 1 1-.708-.708l.708-.707a.5.5 0 0 1 .707 0M8 5.5a.5.5 0 0 1 .5-.5 3 3 0 1 1 0 6 .5.5 0 0 1 0-1 2 2 0 0 0 0-4 .5.5 0 0 1-.5-.5M12.5 8a.5.5 0 0 1 .5-.5h1a.5.5 0 1 1 0 1h-1a.5.5 0 0 1-.5-.5m-1.172 2.828a.5.5 0 0 1 .708 0l.707.708a.5.5 0 0 1-.707.707l-.708-.707a.5.5 0 0 1 0-.708M8.5 12a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5"></path>
                            </svg></div>
                        <div class="col">
                            <h6 style="width: 120px;height: 20px;">12 °C</h6>
                        </div>
                    </div>
                </div>
                <div style="background: var(--bs-body-bg);border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 5px;">
                    <h1 style="margin-top: 10px;">Description</h1>
                    <p><?php echo $resultat->getDescription() ?></p>
                    <hr>
                </div><button class="btn btn-primary" type="button" style="margin-left: 25px;background: rgb(54,123,34);margin-top:10px;" data-bs-target="#modal-1" data-bs-toggle="modal">Modifier</button>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modification Animal</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <form onsubmit="return validateForm()" name="animalForm" method="post" action="/Fonction_PHP/Gestion_Animaux/MAJInfosAnimal.php">
                    <div class="modal-body"><input class="form-control" type="hidden" name="idAnimal" value="<?php echo $resultat->getIDAnimal(); ?>">
                    <input class="form-control" type="hidden" name="poids" value="null"><input class="form-control" type="hidden" name="taille" value="null"><input class="form-control" type="number" name="poids" placeholder="Poids"><input class="form-control" id="taille" type="number" name="taille" placeholder="Taille" style="margin-top: 5px;"><input class="form-control" type="text" name="description" placeholder="Description" style="margin-top: 5px;" value="<?php echo $resultat->getDescription(); ?>"></div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal" data-bs-target="#modal-1" data-bs-toggle="modal">Close</button><button class="btn btn-primary" type="submit" style="background: rgb(54,123,34);">Enregister</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function validateForm() {
            var poids = document.forms["animalForm"]["poids"].value;
            var taille = document.getElementById("taille").value;
            
            // Check if taille is empty
            if (taille === "") {
                return true;
            } else {
                var existingTaille = <?php echo $resultat->getTaille(); ?>;
                // Check if taille is greater than existingTaille
                if (parseFloat(taille) <= parseFloat(existingTaille)) {
                    alert("La taille doit être supérieure à " + existingTaille);
                    return false;
                }
            }
            
            return true;
        }
    </script>

</body>

</html>

