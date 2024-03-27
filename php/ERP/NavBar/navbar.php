<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MenuNav</title>
    <link rel="stylesheet" href="/ERP/NavBar/assets/bootstrap/css/navbar.min.css">
    <link rel="stylesheet" href="/ERP/NavBar/assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="/ERP/NavBar/assets/css/Navbar-Right-Links-icons.css">
    <script src="/ERP/NavBar/assets/bootstrap/js/navbar.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md py-3" style="background: rgb(54,123,34);box-shadow: 0px 0px 20px;">
        <div class="container"><button class="btn btn-primary" type="button" data-bs-target="#offcanvas-menu" data-bs-toggle="offcanvas" style="background: rgb(217,217,217);color: var(--bs-navbar-brand-color);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list" style="width: 30px;height: 20px;">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
                </svg></button></div>
    </nav>
    <div class="offcanvas offcanvas-start bg-body" tabindex="-1" data-bs-backdrop="false" id="offcanvas-menu" style="width: 250px;">
        <div class="offcanvas-header" style="background: rgb(33,81,23);padding-bottom: 20px;margin-bottom: -1px;"><a class="link-body-emphasis d-flex align-items-center me-md-auto mb-3 mb-md-0 text-decoration-none" href="/"><img class="img-fluid" src="/ERP/NavBar/assets/img/Rectangle%2020%20copie%202.png" style="width: 90px;color: var(--bs-body-bg);margin-right: -11px;"><span class="fs-4">ZooZinZin</span></a><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button></div>
        <div class="offcanvas-body d-flex flex-column justify-content-between pt-0" style="background: #D9D9D9;">
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"><a class="nav-link active link-light d-lg-flex align-items-lg-center" href="/ERP/Dashboard/dashboard.php" aria-current="page" style="background: rgb(54,123,34);"><i class="material-icons me-2">dashboard</i> Tableau de bord</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <h1>Gestion animaux</h1>
                    </li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/Gestion_animaux/ListeEspece/ListeEspece.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2 me-2">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"></path>
                            </svg>Liste Especes</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/Gestion_animaux/Ajout_Espece/AjoutEspece.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus me-2">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg>Ajout Espece</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/Gestion_animaux/ListeParcelle/ListeParcelle.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bookshelf me-2">
                                <path d="M2.5 0a.5.5 0 0 1 .5.5V2h10V.5a.5.5 0 0 1 1 0v15a.5.5 0 0 1-1 0V15H3v.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5M3 14h10v-3H3zm0-4h10V7H3zm0-4h10V3H3z"></path>
                            </svg> Gestion enclos</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <h1>Repas/Soins</h1>
                    </li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionSoinsRepas/Repas/ListeRepas.php"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="me-2">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-8-15.03-8-15.03 0h15.03zM1.02 17h15v2h-15z"></path>
                            </svg>Repas</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <h1>Gestion stock</h1>
                    </li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionStock/ListeAliment/ListeAliment.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-list-ul me-2">
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"></path>
                            </svg>Liste des aliments</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionStock/AjoutAliment/ajoutAliment.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-plus me-2">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                            </svg>Ajouter Aliment</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <h1>Gestion Admin</h1>
                    </li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionAdmin/ListeEmploye/ListeEmploye.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person me-2">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                            </svg>Gestion employé</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown"><button class="btn btn-primary dropdown-toggle text-start" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 217px;background: rgb(217,217,217);color: var(--bs-emphasis-color);border-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-sign-intersection me-2">
                                    <path d="M7.25 4v3.25H4v1.5h3.25V12h1.5V8.75H12v-1.5H8.75V4z"></path>
                                    <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435Zm-1.4.7a.495.495 0 0 1 .7 0l6.516 6.515a.495.495 0 0 1 0 .7L8.35 14.866a.495.495 0 0 1-.7 0L1.134 8.35a.495.495 0 0 1 0-.7L7.65 1.134Z"></path>
                                </svg>Gestion Spectacle&nbsp; &nbsp;</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="\ERP\GestionBillets\Spectacle\ListeSpectacle.php">Liste spectacle</a><a class="dropdown-item" href="\ERP\GestionBillets\Spectacle\FormSpectacle.php">Ajouter spectacle</a></div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-item dropdown"><button class="btn btn-primary dropdown-toggle text-start" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 217px;background: rgb(217,217,217);color: var(--bs-emphasis-color);border-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-sign-intersection me-2">
                                    <path d="M7.25 4v3.25H4v1.5h3.25V12h1.5V8.75H12v-1.5H8.75V4z"></path>
                                    <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435Zm-1.4.7a.495.495 0 0 1 .7 0l6.516 6.515a.495.495 0 0 1 0 .7L8.35 14.866a.495.495 0 0 1-.7 0L1.134 8.35a.495.495 0 0 1 0-.7L7.65 1.134Z"></path>
                                </svg>Gestion Activités&nbsp; &nbsp; &nbsp;</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="/ERP/GestionBillets/Activite/ListeActivite.php">Liste activités</a><a class="dropdown-item" href="/ERP/GestionBillets/Activite/FormActivite.php">Ajouter activité</a></div>
                        </div>
                    </li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr class="mt-0">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <h1>Billeterie</h1>
                    </li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionBillets/Spectacle/ListeSpectacle.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2 me-2">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"></path>
                            </svg>Liste Spectacle</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionBillets/Activite/ListeActivite.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-speedometer2 me-2">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"></path>
                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3"></path>
                            </svg>Liste Activités</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown"><button class="btn btn-primary dropdown-toggle text-start" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 217px;background: rgb(217,217,217);color: var(--bs-emphasis-color);border-style: none;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-calendar-plus me-2">
                                    <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7"></path>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                                </svg>Scan Billet&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="/ERP/GestionBillets/ScanEntree/ScannerBilletEntree.php">Billet entrée</a><a class="dropdown-item" href="#">Billet spectacle</a><a class="dropdown-item" href="#">Billet activité</a></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis" href="/ERP/GestionBillets/VenteBille/ventebillet.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-grid me-2">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"></path>
                            </svg>Vente</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
            <div>
                <hr>
                <div class="dropdown"><a class="dropdown-toggle link-body-emphasis d-flex align-items-center text-decoration-none" aria-expanded="false" data-bs-toggle="dropdown" role="button"><strong>NOMEMPLOYE&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></a>
                    <div class="dropdown-menu shadow text-small" data-popper-placement="top-start"><a class="dropdown-item" href="#">Paramètres</a><a class="dropdown-item" href="#">Profile</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="/ERP/Login/logout.php">Deconnexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/ERP/NavBar/assets/bootstrap/js/navbar.min.js"></script>
</body>

</html>