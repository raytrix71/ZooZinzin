<!DOCTYPE html>
<!-- ancien code <html data-bs-theme="light" lang="en"

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

                 Insérer IDTYpeSpectacle dans une case  du formulaire  

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

</html> -->

<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>CréerSpectacle</title>
</head>

<body class="modal-open">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form">
                <h1 style="margin-bottom: 34px;margin-top: 2px;">Formulaire Ajout Spectacle</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom du spectacle</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomSpectacle" /></div>
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
                </div><button class="btn btn-primary" type="button" data-bs-target="#modal-2" data-bs-toggle="modal">Enregisrer</button>
                <div id="modal-2" class="modal fade show" role="dialog" tabindex="-1" style="display: block;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <p>Voulez-vous réserver une plage horaire ?</p>
                                <div class="form-check"><input id="formCheck-1" class="form-check-input" type="radio" name="reservation" value="oui" /><label class="form-check-label" for="formCheck-1">Oui</label></div>
                                <div class="form-check"><input id="formCheck-2" class="form-check-input" type="radio" name="reservation" value="non" /><label class="form-check-label" for="formCheck-2">Non</label></div>
                                <div id="additionalContent" style="display: none;">
                                    <form class="custom-form">
                                        <h1>Date du spectacle</h1>
                                        <div class="row form-group"></div>
                                        <div class="row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Date</label></div>
                                            <div class="col-sm-6 input-column"><input class="form-control" type="date" name="DateSpectacle" /></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Heure</label></div>
                                            <div class="col-sm-6 input-column"><input class="form-control" type="time" name="HeureSpectacle" /></div>
                                        </div><button class="btn btn-light submit-button" type="submit">Enregistrer</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>