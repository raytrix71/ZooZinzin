<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ajout animal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-.css">
</head>

<body>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form">
                <h1>Formulaire Ajout Animal</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Espèce</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomEspece"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Animal</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomAnimal"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Date Naissance</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" name="DateNaissance"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Poids</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="Poids"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Taille</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="Taille"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Sexe</label></div>
                    <div class="col-sm-4 input-column">
                        <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">sélectionner</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">M</a><a class="dropdown-item" href="#">F</a></div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Description</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="Description"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Parcelle</label></div>
                    <div class="col-sm-4 input-column">
                        <div class="dropdown"><button class="btn btn-light dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">Sélectionner</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">1</a><a class="dropdown-item">2</a><a class="dropdown-item" href="#">3</a></div>
                        </div>
                    </div>
                </div><button class="btn btn-light submit-button" type="button">Ajouter</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>