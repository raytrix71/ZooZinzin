<?php
session_start();
if(isset($_SESSION['connecte'])){
    header('Location: /SiteWebZoo/listeresa/ListeResa.php');
}
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>création compte client</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: url(&quot;assets/img/photo-1524272332618-3a94122bb0c1-1.jpg&quot;), RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Création compte</h2>
                            <form method="post" action="/Fonction_PHP/SiteWeb/InscriptionClient.php">
                                <div class="mb-3"><label class="form-label"></label><input class="form-control" type="text" id="NomClient" name="NomClient" required="" style="margin-left: 0px;margin-right: -212px;padding-right: 229px;" placeholder="Nom "></div><input class="form-control" type="text" id="Esperance-1" name="PrenomClient" placeholder="Prénom" required="" style="margin-left: 0px;">
                                <div class="mb-3"></div><input class="form-control" type="email" id="EmailClient" name="EmailClient" placeholder="Email" required="" style="margin-left: 0px;">
                                <div class="mb-3"></div>
                                <div class="mb-3" style="margin-bottom: 13px;"><input class="form-control" type="password" id="poids" name="MDPClient" placeholder="Mot de passe" required="" minlength="8"></div>
                                <div class="mb-3"><input class="form-control" type="password" id="gestation" name="MDPClient" placeholder="Répéter mot de passe" required="" minlength="8"></div><input class="form-control" type="tel" id="gestation-1" name="TelClient" placeholder="Téléphone" required="" style="margin-bottom: 16px;"><input class="form-control" type="text" id="gestation-3" name="AdresseClient" placeholder="Adresse" required="" style="margin-bottom: 14px;"><input class="form-control" type="text" id="gestation-2" name="CPClient" placeholder="Code Postal" required="" minlength="5" maxlength="5" inputmode="numeric">
                                <div class="mb-3"></div>
                                <div class="mb-3">
                                    <h2></h2>
                                </div><input class="form-control" type="hidden" name="protege" value="0"><input class="form-control" type="hidden" name="individuel" value="0">
                                <div class="mb-3"></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"></div>
                                <h2 class="text-center"></h2>
                                <div></div>
                                <div></div>
                                <button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Créer&nbsp;</button>
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