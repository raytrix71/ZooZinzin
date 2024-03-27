<?php 
include_once '/var/www/html/autoload.php';
$nomaliment = $_POST['aliment'];
$aliment= new Aliment(null,$nomaliment,null,null);
$aliment->ajoutDB();

?>

<script>
    window.alert("Aliment <?php echo $nomaliment ?> ajouté avec succès");
    window.location.href = "/ERP/GestionStock/AjoutAliment/ajoutAliment.php";
</script>