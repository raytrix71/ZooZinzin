<?php
    session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Créer Spectacle</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Ajout Spectacle</h2>
                            <form id="mainForm" method="POST" action="../../../Fonction_PHP/Gestion_Spectacle/Ajout_spectacle.php">
                            <div class="mb-3">
                                    <label for="NomSpectacle" class="form-label"></label>
                                    <input type="text" class="form-control" id="NomSpectacle" name="NomSpectacle" placeholder="Nom du spectacle" required>
                                </div>
                                <div class="mb-3">
                                    <label for="LieuSpectacle" class="form-label"></label>
                                    <input type="text" class="form-control" id="LieuSpectacle" name="LieuSpectacle" placeholder="Lieu"required>
                                </div>
                                <div class="mb-3">
                                    <label for="DescriptionSpectacle" class="form-label"></label>
                                    <input type="text" class="form-control" id="DescriptionSpectacle" name="DescriptionSpectacle" placeholder="Descriptif" required>
                                </div>
                                <div class="mb-3">
                                    <label for="TarifSpectacle" class="form-label"></label>
                                    <input type="number" class="form-control" id="TarifSpectacle" name="TarifSpectacle" min="0" max="100" placeholder="Tarification" required>
                                </div>
                                <div class="mb-3">
                                    <label for="CapaciteMaxSpectacle" class="form-label"></label>
                                    <input type="number" class="form-control" id="CapaciteMaxSpectacle" name="CapaciteMaxSpectacle"placeholder="Capacité maximale" required>
                                </div>

                                <hr>
                                <div class="mb-3">
                                    <p>Image</p><input class="form-control" type="file" id="image" name="image" placeholder="Image" accept="image/*">
                                </div>
                                <hr>

                                <button class="btn btn btn-success d-block w-100" type="button" data-bs-toggle="modal" data-bs-target="#modal-2">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   <!-- Modal -->
   <div class="modal fade" id="modal-2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmer les détails du spectacle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous réserver une plage horaire pour le spectacle maintenant ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reservation" id="oui" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reservation" id="non" value="non" checked>
                        <label class="form-check-label" for="non">Non</label>
                    </div>

                    <div id="additionalContent" style="display: none;">
                        <div class="mt-3">
                            <label for="DateSpectacle" class="form-label">Date du spectacle</label>
                            <input class="form-control" type="date" id="DateSpectacle" name="DateSpectacle" form="mainForm">
                        </div>
                        <div class="mt-3">
                            <label for="HeureSpectacle" class="form-label">Heure du spectacle</label>
                            <input class="form-control" type="time" id="HeureSpectacle" name="HeureSpectacle" form="mainForm">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" form="mainForm">Confirmer</button>
                </div>
            </div>
        </div>
    </div>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>

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
