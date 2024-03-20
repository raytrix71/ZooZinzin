<?php include '/var/www/html/autoload.php';
$typebilletEntree=TypeBilletEntree::fetchListTypeBilletEntreeFromDatabase();
$i=0;
$j=0;
$date=$_GET['date'];
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>acheter billet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>
       
<body class="text-start" style="padding-right: 0px;background: var(--bs-success-border-subtle);">
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

    <?php foreach ($typebilletEntree as $billet): ?>
        <?php $i++; ?>
    <div class="container" style="margin-top: 30px;">
        <h2 class="d-lg-flex justify-content-lg-start"><?php echo $billet->getCategorieTarifEntree()?></h2>
        <div class="row">
            <div class="col-md-3 d-md-flex justify-content-md-center"><img alt="brown lion lying on gray concrete wall during daytime" style="max-width: 119px;height: 80px;margin-right: 0px;margin-bottom: 0px;padding-right: 0px;" src="assets/img/photo-1612024783425-d67b2e9e0040-2.jpg"></div>
            <div class="col-md-2">
                <h1 name="prixunit<?php echo $i?>" class="d-md-flex justify-content-md-center align-items-md-end"><?php echo $billet->getTarifEntree()?>$</h1>
            </div>
            <div class="col-md-4" style="margin-left: 8px;">
                <div class="row d-md-flex">
                    <div class="col d-sm-flex justify-content-sm-end" style="padding-right: 0px;margin-right: 1px;"><button class="btn btn-success" type="button" onclick="ajout(-1,<?php echo $i?>)">-</button></div>
                    <div class="col d-sm-flex justify-content-sm-center" style="margin: 0px;padding: 0px;width: 40px;max-width: 40px;"><input id="<?php echo $i?>" type="number" max="10" step="1" style="text-align: right;margin: 0px;padding: 0px;width: 40px;" readonly="" value="0" min="1"></div>
                    <div class="col d-sm-flex justify-content-sm-start" style="padding-left: 0px;"><button class="btn btn-success" type="button" onclick="ajout(1,<?php echo $i?>)">+</button></div>
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
            call(total());
            
        }
    </script>
    
    <div style="background: var(--bs-green);border-radius: 25px;margin-left: 5px;margin-right: 5px;">
        <hr>
        <h1 style="color: var(--bs-body-bg);">Spectacles et Activités</h1>
        <hr>
    </div>
<?php $listespectacle=Spectacle::fetchListSpectacleFromDatabase();
$listetypespectacle=TypeSpectacle::fetchListSpectacleFromDatabase()?>
<?php foreach($listetypespectacle as $typespectacle) : ?>
    <?php foreach($listespectacle as $spectacle): ?>
        <?php if($spectacle->getIDTypeSpectacle()==$typespectacle->getIDTypeSpectacle() && $spectacle->getDateSpectacle()==$date) : ?>
        <?php $j++; ?>   
    <div class="container" style="margin-top: 30px;">
        <h2 class="d-lg-flex justify-content-lg-start"><?php echo $typespectacle->getNomSpectacle()." à ".$spectacle->getHeureSpectacle()." h"?></h2>
        <div class="row">
            <div class="col-md-3 d-md-flex justify-content-md-center"><img alt="brown lion lying on gray concrete wall during daytime" style="max-width: 119px;height: 80px;margin-right: 0px;margin-bottom: 0px;padding-right: 0px;" src="assets/img/photo-1612024783425-d67b2e9e0040-2.jpg"></div>
            <div class="col-md-2">
                <h1 name="prixunitSpec<?php echo $j?>" class="d-md-flex justify-content-md-center align-items-md-end"><?php echo $typespectacle->getTarifSpectacle() ?>$</h1>
            </div>
            <div class="col-md-4" style="margin-left: 8px;">
                <div class="row d-md-flex">
                    <div class="col d-sm-flex justify-content-sm-end" style="padding-right: 0px;margin-right: 1px;"><button class="btn btn-success" type="button" onclick="ajoutspectacle(-1,<?php echo $j?>)" >-</button></div>
                    <div class="col d-sm-flex justify-content-sm-center" style="margin: 0px;padding: 0px;width: 40px;max-width: 40px;"><input id="spec<?php echo $j?>" type="number" max="10" step="1" style="text-align: right;margin: 0px;padding: 0px;width: 40px;" readonly="" value="0" min="1"></div>
                    <div class="col d-sm-flex justify-content-sm-start" style="padding-left: 0px;"><button class="btn btn-success" type="button" onclick="ajoutspectacle(1,<?php echo $j?>)">+</button></div>
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
            call(total());
            
        }

        

    </script>
    <script>
    function total(){
        var total=0;
        for(var i=1;i<=<?php echo $i?>;i++){
            total=total+parseInt(document.getElementsByName("totalEntree"+i)[0].innerHTML);
        }
        for(var j=1;j<=<?php echo $j?>;j++){
            total=total+parseInt(document.getElementsByName("totalSpec"+j)[0].innerHTML);
        }
        
        document.getElementById("totalfinal").value=total + "$";
        
    }
    

</script> 
    <hr>
    <div class="col text-end"><label class="col-form-label text-start" style="font-weight: bold;font-size: 25px;margin-left: 0px;margin-right: 135px;"><input id="totalfinal" type="text" style="max-width: 100px;margin-right: -284px;" readonly="">Total à payer:</label></div>
    <div class="col text-end" style="margin-right: 20px;margin-top: 10px;"><input type="checkbox"><label class="form-label">J'ai lu et j'accepte la politique de confidentialité</label></div>
    <div class="col"><label class="col-form-label d-flex d-lg-flex justify-content-end justify-content-lg-end" style="margin-top: 34px;font-weight: bold;margin-right: 10px;font-size: 30px;">Moyen de paiement</label></div>
    <div class="btn-group-vertical border rounded-pill d-flex float-end d-lg-flex justify-content-lg-center" role="group" style="max-width: 397px;text-align: right;"><button class="btn btn-success" type="button">PayPal</button><button class="btn btn-success" type="button" style="margin-top: 7px;">Carte Bancaire</button><button class="btn btn-success" type="button" style="margin-top: 7px;">Transfert Bancaire&nbsp;</button><button class="btn btn-success" type="button" style="margin-top: 7px;">ApplePay/GooglePay</button></div>
    <div class="btn-group" role="group"></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <button onclick="total()">TOTAL I=<?php echo $i?>J=<?php echo $j?></button>
</body>

</html>