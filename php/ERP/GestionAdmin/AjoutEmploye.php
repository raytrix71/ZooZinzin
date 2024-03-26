<?php
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout" || $_SESSION['role']!="admin"){
    header("Location: /ERP/Login/Login.php");
};?>
                            
                            
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ajouter Nouvel Employé</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid; border-color: var(--bs-emphasis-color); border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg); border-radius: 25px; border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Ajouter un Nouvel Employé</h2>
                            <hr><form method="post" action="../../Fonction_PHP/Gestion_employe/Ajout_employe.php">
                                <div class="mb-3"><input class="form-control" type="text" id="NomEmploye" name="NomEmploye" placeholder="Nom" required=""></div>
                                <div class="mb-3"><input class="form-control" type="text" id="PrenomEmploye" name="PrenomEmploye" placeholder="Prénom" required=""></div>
                                <div class="mb-3"></div>
                                <div class="mb-3" style="margin-bottom: 13px;"><input class="form-control" type="text" id="AdresseEmploye" name="AdresseEmploye" placeholder="Adresse" required="" min="0" max="10 000" step="0,1"></div>
                                <div class="mb-3"><input class="form-control" type="text" id="CPEmploye" name="CPEmploye" placeholder="Code Postal" required="" min="0" step="1"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="MailEmploye" placeholder="Adresse e-mail">
                                <input class="form-control" type="password" id="descriptiom-2" name="MDPEmploye" placeholder="Mot de passe" required="" style="margin-top: 15px;">
                                <input class="form-control" type="text" id="TelEmploye" name="TelEmploye" placeholder="N°Téléphone" required="" style="margin-top: 15px;"></div>
                                <select onchange="AttribuerZone()" class="form-select" id="role" name="role">
                                    <optgroup label="Sélectionner le rôle">
                                    <option value="Crewmember" >Crew member</option>
                                    <option value="Soignant" selected>Soignant</option>
                                    <option value="Admin">Administrateur</option>
                                    <option value="Veterinaire">Vétérinaire</option>
                                    </optgroup>
                                </select>
                                <div class="mb-3"></div>

                                <select onchange="AttribuerZone()" class="form-select" id="zone" name="zone">
                                    <optgroup label="Sélectionner la zone">
                                    <option value="1" selected>Zone 1</option>
                                    <option value="2">Zone 2</option>
                                    <option value="3">Zone 3</option>
                                    <option value="4">Zone 4</option>
                                    </optgroup>
                                </select>
                                
                                <hr>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="--bs-primary: RGB(54,123,34);--bs-primary-rgb: 54,123,34;background: rgb(54,123,34);margin-top: 14px;">Ajouter</button></div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function AttribuerZone() {
            var selectrole = document.getElementById("role");
            if (selectrole.value == "Soignant" || selectrole.value == "Veterinaire") {
                document.getElementById("zone").style.display = "flex";
            } else {
                document.getElementById("zone").style.display = "none";
            }
        }
    </script>
</body>

</html>
