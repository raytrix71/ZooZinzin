<?php

include '../../Model/Animal.php';
include '../../Model/DB.php';
include 'FonctionFomulaireSelect.php';


$nom_espece = $_POST['NomEspece'];
$nom_animal = $_POST['NomAnimal'];
$date_naissance = $_POST['DateNaissance'];
$poids = $_POST['Poids'];
$taille = $_POST['Taille'];
$sexe = $_POST['Sexe'];
$description = $_POST['Description'];
$parcelle = $_POST['IDParcelle'];

$animal = new Animal(null, $parcelle, $nom_espece, $nom_animal, $date_naissance, $poids, $taille, $sexe, $description);

$animal->ajoutDatabase();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']['tmp_name']) && $_FILES['image']['error'] == 0) {
    // Vérifiez si le fichier est une image
    $imageInfo = getimagesize($_FILES['image']['tmp_name']);
        if ($imageInfo !== false) {
            // Chargez l'image
            $image = imagecreatefromstring(file_get_contents($_FILES['image']['tmp_name']));
    
            // Obtenez les dimensions originales de l'image
            $originalWidth = imagesx($image);
            $originalHeight = imagesy($image);
    
            // Définissez les nouvelles dimensions de l'image
            $newWidth = 200;
            $newHeight = 100;
    
    
            // Créez une nouvelle image avec les nouvelles dimensions
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
    
            // Redimensionnez l'image originale et copiez-la dans la nouvelle image
            imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
    
            // Enregistrez la nouvelle image sur le disque
            $filePath = '/var/www/html/Image/Animal/';
            $fileName = $nom_espece.$nom_animal.".jpg";
    
    
            imagejpeg($newImage, $filePath . $fileName);
            
            // Libérez la mémoire
            imagedestroy($image);
            imagedestroy($newImage);
    
            echo "L'image a été redimensionnée et enregistrée avec succès.";
        } 
        
        else {
            echo "Le fichier téléchargé n'est pas une image.";
        }
} 

else {
    echo "Aucun fichier n'a été téléchargé.";
}
?> 

<script>
        alert("Ajout réalisé avec succès");
        window.location.href = '/ERP/Gestion_animaux/ListeEspece/ListeEspece.php';
</script>



