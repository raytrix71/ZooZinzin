<?php
include '/var/www/html/autoload.php';
$idresa=$_GET['idresa'];
$listebillet=BilletEntree::getBilletID($idresa);
?>
<?php if(!empty($listebillet)):?>
<?php  foreach($listebillet as $billet):?>

    <?php if($billet->getDateValidatiteEntree()==date("Y-m-d") && $billet->getValidationEntree()==0): ?>
       <?php $billet->setValidationEntree(1);
        $billet->updateInDB();?>
    
    <?php else: ?> 
    <script>

    window.alert("date de validite non valide ou billet deja valide");
    window.location.href = "/ERP/GestionBillets/ScanEntree/ScannerBilletEntree.php";
    </script>
    
    
    <?php endif; ?>
<?php endforeach;?>
 <script>

window.alert("Billet validé");
window.location.href = "/ERP/GestionBillets/ScanEntree/ScannerBilletEntree.php";
</script>



<?php else: ?>
    <script>
    window.alert("Aucun billet trouvé");
    window.location.href = "/ERP/GestionBillets/ScanEntree/ScannerBilletEntree.php";
    </script>
<?php endif; ?>