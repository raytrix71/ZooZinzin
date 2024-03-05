<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CréerSpectacle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="Ajout_spectacle.php" class="custom-form">
                <h1 style="margin-bottom: 34px;margin-top: 2px;">Formulaire Ajout Spectacle</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom du spectacle</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Lieu</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="LieuSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Descriptif</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="DescriptionSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Tarification</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" placeholder="1.0" step="0.01" min="0" max="100" name="TarifSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Capacité maximale</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="CapaciteMaxSpectacle"></div>
                </div><button class="btn btn-primary" type="submit">Enregisrer</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>