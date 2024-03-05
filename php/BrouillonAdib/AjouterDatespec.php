<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CréneauSpectacle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4-news.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="Ajout_datespec.php" class="custom-form">
                <h1>Date du spectacle</h1>

                <!-- Insérer IDTYpeSpectacle dans une case  du formulaire  -->

                <div class="row form-group">
    <div class="col-sm-4 label-column"><label class="col-form-label" for="idTypeSpectacle">Type Spectacle N°</label></div>
    <div class="col-sm-6 input-column"><input class="form-control" type="number" min="0" max="1000" id="IDTypeSpectacle" name="IDTypeSpectacle" value="<?php echo htmlspecialchars($IDTypeSpectacle); ?>" readonly></div>
</div>


                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Date</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="date" name="DateSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Heure</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="time" name="HeureSpectacle"></div>
                </div><button class="btn btn-light submit-button" type="submit">Enregistrer</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>