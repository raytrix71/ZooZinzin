<?php
include '/var/www/html/ERP/NavBar/navbar.php';
include '/var/www/html/Fonction_PHP/connexionDB.php';
$bdd=connexionDB();
$query = "SELECT NomEspece FROM ESPECE";
$statement = $bdd->prepare($query);
$statement->execute();
$liste = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ListeEspece</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body style="background: rgb(217,217,217);">

<?php foreach($liste as $espece): ?>
    <div class="row">
        <div class="col">
            <div class="card" style="background: rgb(217,217,217);">
                <div class="card-body" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);padding-right: 0px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "$espece[NomEspece]"?></h4>
                                <h6 class="text-muted mb-2">Zone:&nbsp;</h6><button class="btn btn-primary" type="button">Afficher liste animaux</button>
                            </div>
                            <div class="col-md-6"><img alt="a painting of pink and white flowers on a gray background" src="/Image/Espece/<?php echo"$espece[NomEspece]"?>.jpg" width="200" height="100" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;margin-top: 13px;margin-left: 0px;"></div>
                        </div>
                    </div>
                    <h1 style="margin-right: 0px;"></h1>
                </div>
            </div>
        </div>
    </div>
    <br
<?php endforeach;?>   

</body>

</html>