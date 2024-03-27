<?php session_start()?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>page d'accueil millieu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery-baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body style="background: var(--bs-success-border-subtle);">
<?php include 'nvbar.php';?>
    <div data-bss-parallax-bg="true" style="height: 500px;margin-top: 2px;background: url(&quot;assets/img/photo-1463436755683-3f805a9d1192.jpg&quot;) center / cover;">
        <div class="card"></div>
        <div></div>
        <div class="btn-group-vertical d-flex justify-content-center align-items-center align-content-center align-self-center justify-content-md-center align-items-md-center" role="group" style="text-align: center;position: fixed;margin-left: 0px;"></div><input class="d-flex align-content-center align-self-center mx-auto" type="search" style="position: static;margin-top: 434px;margin-left: 508px;text-align: center;display: flex;padding-left: 80px;">
        <div></div>
    </div>
    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" alt="boy standing while reading map" src="assets/img/photo-1504169448388-60f322bebb2c.jpg">
                <button class="btn btn-success" type="button">LA CARTE</button></a></div>

                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" alt="brown elephant" src="assets/img/photo-1562856950-7c3e837980b3.jpg">
                <a class="btn btn-success" role="button" href="FormClient.php">S'inscrire</a></a></div>

                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" alt="two blue-and-yellow Macaws perched on tree" src="assets/img/photo-1540818767417-e2437dc12c3d.jpg">
                <button class="btn btn-success" type="button">Voir la liste des activités&nbsp;</button></a></div>

                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" alt="crocodiles on brown soil" src="assets/img/photo-1522888399947-f4289525d288.jpg">
                <button class="btn btn-success d-xl-flex justify-content-xl-end align-items-xl-center" type="button" style="text-align: center;">ESPECES PROTEGEES</button></a></div>

                <div class="col item"><a href="Log.php"><img class="img-fluid" alt="three dolphin jumps to swimmer" src="assets/img/photo-1532639766504-227d1fd0f2ff-1.jpg">
                <button class="btn btn-success" type="button" href="Log.php">JE RESERVE</button></a></div>
                <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" alt="two giraffe and three zebra on green grass field under trees at daytime" src="assets/img/photo-1534567153574-2b12153a87f0-1.jpg">
                <button class="btn btn-success" type="button">VOIR PLUS</button></a></div>
            </div>
        </div>
    </section>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Lightbox-Gallery-baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>
<?php include 'Footer.php'?>
</html>