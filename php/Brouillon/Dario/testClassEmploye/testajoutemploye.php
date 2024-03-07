<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ajouter Nvl employé</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form-Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Responsive-Form.css">
</head>

<body>
    <div class="container">
        <div></div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="ajoutemployertestobjet.php"class="custom-form" style="margin-top: 13px;padding-right: 1px;padding-left: 0px;padding-bottom: 0px;">
                <h1 style="margin-bottom: 24px;margin-left: 28px;">Ajouter un nouvel employé</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Nom" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Prénom</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Prenom" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">N°Téléphone</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Ntelephone" /></div>
                </div>
                <div class="row form-group" style="padding-bottom: 0px;">
                    <div class="col-sm-4 label-column"><label class="form-label" for="repeat-pawssword-input-field" style="margin-bottom: 11px;margin-top: 13px;">Adresse E-mail</label><label class="form-label" for="repeat-pawssword-input-field" style="margin-bottom: 3px;margin-top: 27px;">Adresse (Rue, Ville)  </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="AdresseEmail" /><input class="form-control" type="text" style="margin-top: 14px;" name="AdressePostale" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Code Postal</label></div>
                    <div class="col-sm-6 col-lg-2 input-column"><input class="form-control" type="text" name="CodePostal" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Mot de passe</label></div>
                    <div class="col-sm-6 col-lg-2 input-column"><input class="form-control" type="password" name="MDPEmploye" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Rôle</label></div>
                    <div class="col-sm-4 input-column"><select onchange="AttribuerZone()"id="role" class="form-select" name="role">
                            <option value="Crewmember" selected>Crew member</option>
                            <option value="Soignant">Soignant</option>
                            <option value="Admin">Administrateur</option>
                            <option value="Veterinaire">Vétérinaire</option>
                        </select></div>
                </div>
                <div class="row form-group" id="zone" style="display:none">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Zone</label></div>
                    <div class="col-sm-4 input-column"><select class="form-select" name="zone">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></div>
                </div>
                <div class="form-check"><input id="formCheck-1" class="form-check-input" type="checkbox" /><label class="form-check-label" for="formCheck-1">J&#39;ai lu et j&#39;accepte les conditions générales.</label></div>

                <button class="btn btn-light submit-button" type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
</body>
<script>function AttribuerZone()
{var selectrole=document.getElementById("role")
if(selectrole.value=="Soignant" || selectrole.value=="Veterinaire"){document.getElementById("zone").style.display="flex"}
else{document.getElementById("zone").style.display="none"}}</script>

</html>