<?php 
session_start();
if(!isset($_SESSION['logStatut']) || $_SESSION['logStatut']=="loggedout"){
    header("Location: /ERP/Login/Login.php");
};
include '/var/www/html/ERP/NavBar/navbar.php';
include_once '/var/www/html/autoload.php';
$typebilletEntree=TypeBilletEntree::fetchListTypeBilletEntreeFromDatabase();
$i=0;
$j=0;
$k=0;
$date = date("Y-m-d");
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>acheter billet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
       
<body onload="total()" class="text-start" style="padding-right: 0px;background: rgb(217,217,217);">

    <div class="container text-center" style="background: var(--bs-green);border-radius: 15px;margin-top: 10px;margin-bottom: 26px;">
        <div class="row" style="border-radius: 25px;">
            <div class="col-md-3" style="background: var(--bs-green);border-radius: 25px;">
                <h1 class="text-center">Produit</h1>
            </div>
            <div class="col-md-2">
                <h1 class="d-md-flex justify-content-md-center">Prix</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                <h1 class="d-md-flex justify-content-md-center">Quantité</h1>
            </div>
            <div class="col-md-3 col-lg-3">
                <h1 class="d-md-flex justify-content-md-center">Total</h1>
            </div>
        </div>
    </div>
    <div style="background: var(--bs-green);border-radius: 25px;margin-left: 5px;margin-right: 5px;">
        <hr>
        <h1 style="color: var(--bs-body-bg);">Entrées</h1>
        <hr>
    </div>
<form action="/Fonction_PHP/Gestion_Billet/VenteBillet.php" method="post">
        <?php foreach ($typebilletEntree as $billet): ?>
            <?php $i++; ?>
        <div class="container" style="margin-top: 30px;border-style:solid;border-color:black;border-radius:25px;padding-bottom:10px">
            <h2 class="d-lg-flex justify-content-lg-start"><?php echo $billet->getCategorieTarifEntree()?></h2>
            <div class="row">
                <div class="col-md-3 d-md-flex justify-content-md-center"><img alt="brown lion lying on gray concrete wall during daytime" style="max-width: 119px;height: 80px;margin-right: 0px;margin-bottom: 0px;padding-right: 0px;" src="assets/img/photo-1612024783425-d67b2e9e0040-2.jpg"></div>
                <div class="col-md-2">
                    <h1 name="prixunit<?php echo $i?>" class="d-md-flex justify-content-md-center align-items-md-end"><?php echo $billet->getTarifEntree()?>$</h1>
                </div>
                <div class="col-md-4" style="margin-left: 8px;">
                    <div class="row d-md-flex">
                        <div class="col d-sm-flex justify-content-sm-end" style="padding-right: 0px;margin-right: 1px;"><button class="btn btn-success" type="button" onclick="ajout(-1,<?php echo $i?>)">-</button></div>
                        <div class="col d-sm-flex justify-content-sm-center" style="margin: 0px;padding: 0px;width: 40px;max-width: 40px;"><input name="qteEntree<?php echo $i ?>" id="<?php echo $i?>" type="number" max="10" step="1" style="text-align: right;margin: 0px;padding: 0px;width: 40px;" readonly="" value="0" min="1"></div>
                        <div class="col d-sm-flex justify-content-sm-start" style="padding-left: 0px;"><button class="btn btn-success" type="button" onclick="ajout(1,<?php echo $i?>)">+</button></div>
                        <input type="hidden" value="<?php echo $billet->getIDTypeEntree() ?>" name="IDTypeBilletEntree<?php echo $i ?>">
                    </div>
                </div>
                <div class="col">
                    <h1 name="totalEntree<?php echo $i?>" class="d-md-flex justify-content-center align-items-center align-content-center align-self-center justify-content-md-center">0$</h1>
                </div>
            </div>
        </div>
        
        
        <?php endforeach; ?>
        <script>
            function ajout(val, id) {
                var input = document.getElementById(id);
                var value = parseInt(input.value);
                value += val;
                if (value < 0) {
                    value = 0;
                }
                if (value > 10) {
                    value = 10;
                }
                input.value = value;
                var total=document.getElementsByName("totalEntree"+id);
                var prix = parseInt(document.getElementsByName("prixunit"+id)[0].innerHTML);
                total[0].innerHTML = (value * prix) + "$";
                affichertotal();
                
                
                
            }
        </script>
        
        <div style="background: var(--bs-green);border-radius: 25px;margin-left: 5px;margin-right: 5px;">
            <hr>
            <h1 style="color: var(--bs-body-bg);">Spectacles et Activités</h1>
            <hr>
        </div>
    <?php $listespectacle=Spectacle::fetchListSpectacleFromDatabase();
    $listetypespectacle=TypeSpectacle::fetchListSpectacleFromDatabase();?>
    <?php foreach($listetypespectacle as $typespectacle) : ?>
        <?php foreach($listespectacle as $spectacle): ?>
            <?php if($spectacle->getIDTypeSpectacle()==$typespectacle->getIDTypeSpectacle() && $spectacle->getDateSpectacle()==$date) : ?>
            <?php $j++; ?>   
        <div class="container" style="margin-top: 30px;border-style:solid;border-color:black;border-radius:25px;padding-bottom:10px ">
            <h2 class="d-lg-flex justify-content-lg-start"><?php echo $typespectacle->getNomSpectacle()." à ".$spectacle->getHeureSpectacle()." h"?></h2>
            <div class="row">
                <div class="col-md-3 d-md-flex justify-content-md-center"><img alt="brown lion lying on gray concrete wall during daytime" style="max-width: 119px;height: 80px;margin-right: 0px;margin-bottom: 0px;padding-right: 0px;" src="assets/img/photo-1612024783425-d67b2e9e0040-2.jpg"></div>
                <div class="col-md-2">
                    <h1 name="prixunitSpec<?php echo $j?>" class="d-md-flex justify-content-md-center align-items-md-end"><?php echo $typespectacle->getTarifSpectacle() ?>$</h1>
                </div>
                <div class="col-md-4" style="margin-left: 8px;">
                    <div class="row d-md-flex">
                        <div class="col d-sm-flex justify-content-sm-end" style="padding-right: 0px;margin-right: 1px;"><button class="btn btn-success" type="button" onclick="ajoutspectacle(-1,<?php echo $j?>)" >-</button></div>
                        <div class="col d-sm-flex justify-content-sm-center" style="margin: 0px;padding: 0px;width: 40px;max-width: 40px;"><input name="qteSpec<?php echo $j ?>" id="spec<?php echo $j?>" type="number" max="10" step="1" style="text-align: right;margin: 0px;padding: 0px;width: 40px;" readonly="" value="0" min="1"></div>
                        <div class="col d-sm-flex justify-content-sm-start" style="padding-left: 0px;"><button class="btn btn-success" type="button" onclick="ajoutspectacle(1,<?php echo $j?>)">+</button></div>
                        <input type="hidden" name="IDSpectacle<?php echo $j ?>" value="<?php echo $spectacle->getIDSpectacle() ?>">
                    </div>
                </div>
                <div class="col">
                    <h1 name="totalSpec<?php echo $j?>" class="d-md-flex justify-content-center align-items-center align-content-center align-self-center justify-content-md-center">0$</h1>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
        <script>
            function ajoutspectacle(val, id) {
                var input = document.getElementById("spec"+id);
                var value = parseInt(input.value);
                value += val;
                if (value < 0) {
                    value = 0;
                }
                if (value > 10) {
                    value = 10;
                }
                input.value = value;
                var total=document.getElementsByName("totalSpec"+id);
                var prix = parseInt(document.getElementsByName("prixunitSpec"+id)[0].innerHTML);
                total[0].innerHTML = (value * prix) + "$";
                affichertotal();
                
                
            }
        
    
        </script>
    <?php $listeactivite=Activite::fetchListActivite();
    $listetypeactivite=TypeActivite::fetchListTypeActiviteFromDatabase();?>
    <?php foreach($listetypeactivite as $typeactivite) : ?>
        <?php foreach($listeactivite as $activite): ?>
            <?php if($activite-> getIDTypeActivite()==$typeactivite-> getIDTypeActivite() && $activite->getDateActivite()==$date) : ?>
            <?php $k++; ?>   
        <div class="container" style="margin-top: 30px;border-style:solid;border-color:black;border-radius:25px;padding-bottom:10px">
            <h2 class="d-lg-flex justify-content-lg-start"><?php echo $typeactivite->getNomActivite()." à ".$activite->getHeureActivite()." h"?></h2>
            <div class="row">
                <div class="col-md-3 d-md-flex justify-content-md-center"><img alt="brown lion lying on gray concrete wall during daytime" style="max-width: 119px;height: 80px;margin-right: 0px;margin-bottom: 0px;padding-right: 0px;" src="assets/img/photo-1612024783425-d67b2e9e0040-2.jpg"></div>
                <div class="col-md-2">
                    <h1 name="prixunitAct<?php echo $k?>" class="d-md-flex justify-content-md-center align-items-md-end"><?php echo $typeactivite->getTarifActivite() ?>$</h1>
                </div>
                <div class="col-md-4" style="margin-left: 8px;">
                    <div class="row d-md-flex">
                        <div class="col d-sm-flex justify-content-sm-end" style="padding-right: 0px;margin-right: 1px;"><button class="btn btn-success" type="button" onclick="ajoutactivite(-1,<?php echo $k?>)" >-</button></div>
                        <div class="col d-sm-flex justify-content-sm-center" style="margin: 0px;padding: 0px;width: 40px;max-width: 40px;"><input name="qteAct<?php echo $k ?>" id="act<?php echo $k?>" type="number" max="10" step="1" style="text-align: right;margin: 0px;padding: 0px;width: 40px;" readonly="" value="0" min="1"></div>
                        <div class="col d-sm-flex justify-content-sm-start" style="padding-left: 0px;"><button class="btn btn-success" type="button" onclick="ajoutactivite(1,<?php echo $k?>)">+</button></div>
                        <input type="hidden" name="IDActivite<?php echo $k ?>" value="<?php echo $activite->getIDActivite() ?>">
                    </div>
                </div>
                <div class="col">
                    <h1 name="totalAct<?php echo $k?>" class="d-md-flex justify-content-center align-items-center align-content-center align-self-center justify-content-md-center">0$</h1>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
        <?php endforeach; ?>
        <script>
            function ajoutactivite(val, id) {
                var input = document.getElementById("act"+id);
                var value = parseInt(input.value);
                value += val;
                if (value < 0) {
                    value = 0;
                }
                if (value > 10) {
                    value = 10;
                }
                input.value = value;
                var total=document.getElementsByName("totalAct"+id);
                var prix = parseInt(document.getElementsByName("prixunitAct"+id)[0].innerHTML);
                total[0].innerHTML = (value * prix) + "$";
                affichertotal();
                
                
            }

            function affichertotal(){
            var total=0;
            for(var i=1;i<=<?php echo $i ?>;i++){
                total+=parseInt(document.getElementsByName("totalEntree"+i)[0].innerHTML)
            }
            for(var j=1;j<=<?php echo $j ?>;j++){
                total+=parseInt(document.getElementsByName("totalSpec"+j)[0].innerHTML)
            }
            for(var k=1;k<=<?php echo $k ?>;k++){
                total+=parseInt(document.getElementsByName("totalAct"+k)[0].innerHTML)
            }
            document.getElementById("totalfinal").value=total+"$";

           
        }
        </script>  


        <input type="hidden" name="i" value="<?php echo $i?>">
        <input type="hidden" name="j" value="<?php echo $j?>">
        <input type="hidden" name="k" value="<?php echo $k?>">
        <input type="hidden" name="date" value="<?php echo $date?>">

        <hr>
        <div class="col text-end"><label class="col-form-label text-start" style="font-weight: bold;font-size: 25px;margin-left: 0px;margin-right: 135px;"><input id="totalfinal" type="text" value="0$" style="max-width: 100px;margin-right: -284px;" readonly="">Total à payer:</label></div>
        <div class="col"><label class="col-form-label d-flex d-lg-flex justify-content-end justify-content-lg-end" style="margin-top: 34px;font-weight: bold;margin-right: 10px;font-size: 30px;">Moyen de paiement</label></div>
        <div class="btn-group-vertical border rounded-pill d-flex float-end d-lg-flex justify-content-lg-center" role="group" style="max-width: 397px;text-align: right;">
        <button class="btn btn-success" type="submit" style="margin-top: 7px;">Carte Bancaire</button>
        <button class="btn btn-success" type="submit" style="margin-top: 7px;">Cash&nbsp;</button>
        <div style="margin-bottom:20px"class="btn-group" role="group"></div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </form>
</body>

</html>