<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Créer Activité</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5" style="background: RGB(217,217,217);">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5" style="border-style: solid;border-color: var(--bs-emphasis-color);border-radius: 25px;">
                        <div class="card-body p-sm-5" style="background: var(--bs-body-bg);border-radius: 25px;border-color: var(--bs-emphasis-color);">
                            <h2 class="text-center mb-4">Ajout Activité</h2>
                            <form id="mainForm" method="POST" action="../../../Fonction_PHP/Gestion_Activite/Ajout_activite.php">
                                <div class="mb-3">
                                    <label for="NomActivite" class="form-label">Nom de l'activité</label>
                                    <input type="text" class="form-control" id="NomActivite" name="NomActivite" placeholder="Nom de l'activité" required>
                                </div>
                                <div class="mb-3">
                                    <label for="LieuActivite" class="form-label">Lieu</label>
                                    <input type="text" class="form-control" id="LieuActivite" name="LieuActivite" placeholder="Lieu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="DescriptionActivite" class="form-label">Descriptif</label>
                                    <textarea class="form-control" id="DescriptionActivite" name="DescriptionActivite" placeholder="Descriptif" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="TarifActivite" class="form-label">Tarification</label>
                                    <input type="number" class="form-control" id="TarifActivite" name="TarifActivite" min="0" placeholder="Tarification" required>
                                </div>
                                <div class="mb-3">
                                    <label for="CapaciteMaxActivite" class="form-label">Capacité maximale</label>
                                    <input type="number" class="form-control" id="CapaciteMaxActivite" name="CapaciteMaxActivite" placeholder="Capacité maximale" required>
                                </div>

                                <hr>
                                <div class="mb-3">
                                    <label for="ImageActivite" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="ImageActivite" name="ImageActivite" placeholder="Image" accept="image/*">
                                </div>
                                <hr>

                                <button class="btn btn-success d-block w-100" type="button" data-bs-toggle="modal" data-bs-target="#modal-2">Enregistrer</button>
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
                    <h5 class="modal-title">Confirmer les détails de l'activité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous réserver une plage horaire pour l'activité maintenant ?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="reservation" id="oui" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"
                        name="reservation" id="non" value="non" checked>
                        <label class="form-check-label" for="non">Non</label>
                    </div>

                    <div id="additionalContent" style="display: none;">
                        <div class="mt-3">
                            <label for="DateActivite" class="form-label">Date de l'activité</label>
                            <input class="form-control" type="date" id="DateActivite" name="DateActivite" form="mainForm">
                        </div>
                        <div class="mt-3">
                            <label for="HeureActivite" class="form-label">Heure de l'activité</label>
                            <input class="form-control" type="time" id="HeureActivite" name="HeureActivite" form="mainForm">
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

    ouiRadio.addEventListener('change', () => {
        additionalContent.style.display = ouiRadio.checked ? 'block' : 'none';
    });

    nonRadio.addEventListener('change', () => {
        additionalContent.style.display = nonRadio.checked ? 'none' : 'block';
    });
});
</script>
</body>
</html>
