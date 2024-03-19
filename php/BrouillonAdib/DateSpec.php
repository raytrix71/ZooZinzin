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
            <form method="POST" action="Ajout_spectacle.php" class="custom-form">
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
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" min="0" max="100" name="TarifSpectacle"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Capacité maximale</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="CapaciteMaxSpectacle"></div>
                </div><button class="btn btn-primary" type="button" data-bs-target="#modal-2" data-bs-toggle="modal">Enregisrer</button>
                <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">DATE</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                            </div><div class="modal-body">
    <p>Voulez-vous réserver une plage horaire ?</p>
    <div class="form-check">
        <input id="formCheck-1" class="form-check-input" type="radio" name="reservation" value="oui" />
        <label class="form-check-label" for="formCheck-1">Oui</label>
    </div>
    <div class="form-check">
        <input id="formCheck-2" class="form-check-input" type="radio" name="reservation" value="non" />
        <label class="form-check-label" for="formCheck-2">Non</label>
    </div>
    <!-- Contenu supplémentaire à afficher -->
    <div id="additionalContent" style="display: none;">
        <!-- Formulaire à afficher si la réponse est oui -->
      <form class="custom-form">
    <h1>Date du spectacle</h1>
    <div class="row form-group">
       
    </div>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/untitled.js"></script>
</body>

</html>
<!--Le java script-->
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    const ouiRadio = document.querySelector('input[name="reservation"][value="oui"]');
    const nonRadio = document.querySelector('input[name="reservation"][value="non"]');
    const additionalContent = document.getElementById('additionalContent');

    if (!ouiRadio || !nonRadio || !additionalContent) {
        console.log("Un ou plusieurs éléments n'ont pas été trouvés.");
    } else {
        console.log("Tous les éléments nécessaires sont présents.");
    }

    function toggleAdditionalContent() {
        console.log('Changement détecté.');
        if (ouiRadio.checked) {
            console.log('Oui est sélectionné.');
            additionalContent.style.display = 'block';
        } else if (nonRadio.checked) {
            console.log('Non est sélectionné.');
            additionalContent.style.display = 'none';
        }
    }

    ouiRadio.addEventListener('change', toggleAdditionalContent);
    nonRadio.addEventListener('change', toggleAdditionalContent);
});
</script>