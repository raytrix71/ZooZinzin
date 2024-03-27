<?php 
session_start(); 
include '/var/www/html/ERP/NavBar/navbar.php'; 
include '/var/www/html/autoload.php';
$sql1="SELECT COUNT(*) FROM BILLETENTREE WHERE DateValidatiteEntree=CURDATE()";
$sql2="SELECT COUNT(*) FROM ESPECE";
$sql3="SELECT COUNT(*) as total FROM ANIMAL UNION SELECT COUNT(*) as total FROM GROUPE";
$db=DB::connexionDB();
$nbEntree=$db->query($sql1)->fetchColumn();
$nbEspece=$db->query($sql2)->fetchColumn();
$nbAnimaux=$db->query($sql3)->fetchColumn();
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body style="background: rgb(197,241,190);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-sm-flex d-lg-flex d-xl-flex justify-content-sm-center justify-content-lg-center justify-content-xl-center">
                <h1 style="text-align: center;width: fit-content;margin-top: 4px;border-radius: 20px;border-style: solid;border-color: var(--bs-emphasis-color);background: var(--bs-body-bg);">Bienvenue sur ZooZinZin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-start">Bonjour<?php echo " "."<strong>".$_SESSION['prenom']."</strong>" ?>&nbsp;</h1>
            </div>
            <div class="col">
                <h1 class="text-end"><?php echo date("d-m-Y"); ?></h1>
            </div>
        </div>
        <div class="row" style="justify-content: space-between;margin-top: 100px;">
            <div class="col-md-4" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);">
                <div class="row">
                    <div class="col">
                        <h1 style="text-decoration:  underline;">NB entrées</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center"><?php echo $nbEntree ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);">
                <div class="row">
                    <div class="col">
                        <h1 style="text-decoration:  underline;">NB especes</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center"><?php echo $nbEspece ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;background: var(--bs-body-bg);margin-left: 0px;">
                <div class="row">
                    <div class="col">
                        <h1 style="text-decoration:  underline;">NB animaux</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h1 class="text-center"><?php echo $nbAnimaux ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>