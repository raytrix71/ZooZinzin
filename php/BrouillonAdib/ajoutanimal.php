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
            <form method="POST" action="FonctionajtAnimal.php" class="custom-form">
                <h1>Formulaire Ajout Animal</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Espèce</label></div>
                    <div class="col-sm-6 input-column">  
                        <select class="form-control" name="NomEspece" id="espece">
                     <?php foreach ($especes as $espece): ?>
                     <option value="<?= htmlspecialchars($espece['NomEspece']) ?>"></option>
                     <?php endforeach; ?>
                         </select>

                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Nom Animal</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="NomAnimal"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Date Naissance</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="date" name="DateNaissance"></div>
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

                    <select class="form-select" name="Sexe">
                        <option value="M">M</option>
                        <option value="F">F</option>
                    </select>

                </div>

                <br>
                <br>
                <br>
                
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Description</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="Description"></div>
                </div>
               
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Parcelle</label></div>
                    <div class="col-sm-4 input-column">

                        <select class="form-select" name="Parcelle">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>

                    </div>
                </div><button class="btn btn-light submit-button" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>