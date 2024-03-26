<?php
include '/var/www/html/autoload.php';
$idresa=$_GET['idresa'];
$listebillet=BilletEntree::getBilletID($idresa);
?>

<?php if(!empty($listebillet)):?>

<?php foreach($listebillet as $billet):?>

    <?php if($billet->getDateValidatiteEntree()==date("Y-m-d") && $billet->getValidationEntree()==0): ?>
       <?php $billet->setValidationEntree(1);
        $billet->updateBillet();?>
    
    <?php else: ?> 
    <script>
    window.alert("date de validite non valide ou billet deja valide");
    header('Location: /ERP/GestionBillets/ScanEntree/scanentree.php');
    </script>
    
    <?php endif; ?>
<?php endforeach;
header('Location: /ERP/GestionBillets/ScanEntree/scanentree.php'); ?>
<?php else: ?>
    <script>
    window.alert("Aucun billet trouvé");
    header('Location: /ERP/GestionBillets/ScanEntree/scanentree.php');
    </script>
<?php endif; ?>