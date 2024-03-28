<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>header page d'accueil</title>
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/css/Header---Apple.css">
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/css/header-Footer-Clean.css">
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/css/header-Navigation-Clean1.css">
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/css/header.css">
    <link rel="stylesheet" href="/SiteWebZoo/listeresa/assets/css/Pretty-Header-.css">
</head>

<body>
    <nav class="navbar navbar-expand-md custom-header navbar-light" style="background: var(--bs-form-valid-border-color);">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="#" style="margin-left: 10px;backdrop-filter: opacity(0);color: var(--bs-success-text-emphasis);background: var(--bs-form-valid-border-color);">ZooZinZin</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbar-collapse"><span class="visually-hidden">Toggle navigation</span><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav links">
                    <li class="nav-item"><a class="nav-link" href="/SiteWebZoo/Center.php" style="margin-left: 182px;">Accueil</a></li>
                    <li class="nav-item"></li>
                    <?php if(isset($_SESSION['connecte'])): ?>
                    <li class="nav-item"><a class="nav-link" href="/SiteWebZoo/listeresa/ListeResa.php" style="margin-left: 70px;">Réservations</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link custom-navbar" href="/SiteWebZoo/Calendrier.php" style="padding-left: 12px;margin-left: 70px;color: var(--bs-success-text-emphasis);">Billeterie</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="background: var(--bs-form-valid-border-color);"> </a>
                        <div class="dropdown-menu dropdown-menu-end">
                        <?php if(!isset($_SESSION['connecte'])): ?>
                            <a class="dropdown-item" href="/SiteWebZoo/Log.php">Se connecter </a>
                        <?php else: ?>    
                            <a class="dropdown-item" href="/Fonction_PHP/SiteWeb/decoSiteweb.php">Logout </a></div>
                            <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="/SiteWebZoo/listeresa/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>