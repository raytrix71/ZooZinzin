<html data-bs-theme="light" lang="en" style>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>CréerSpectacle</title>
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="Ajout_Employe.php" class="custom-form">
                <h1 style="margin-bottom: 34px;margin-top: 2px;">Formulaire Ajout Spectacle</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom du spectacle</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomActivite" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Lieu</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="LieuSpectacle" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Descriptif</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="DescriptionSpectacle" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Tarification</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="TarifSpectacle" /></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Capacité maximale</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="CapaciteMaxSpectacle" /></div>
                </div><button class="btn btn-primary" type="submit">Enregisrer</button>
            </form>
        </div>
    </div>
</body>
<script>function AttribuerZone()
{var selectrole=document.getElementById("role")
if(selectrole.value=="Soignant" || selectrole.value=="Veterinaire"){document.getElementById("zone").style.display="flex"}
else{document.getElementById("zone").style.display="none"}}</script>

</html>