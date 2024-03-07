<?php
include('../../Fonction_PHP/connexionDB.php');
include('../Erreur.php');
$nom_espece = $_POST['nom_espece'];
$esperance = $_POST['esperance'];
$taille = $_POST['taille'];
$poids = $_POST['poids'];
$gestation = $_POST['gestation'];
$description = $_POST['description'];
$image = $_POST['image'];
$indivuduel=$_POST['individuel'];
$protege=$_POST['protege'];
$zone=$_POST['zone'];
$TempMax=$_POST['TempMax'];
$TempMin=$_POST['TempMin'];
$PHMax=$_POST['PHMax'];
$PHMin=$_POST['PHMin'];
$TxHumMax=$_POST['TxHumMax'];
$TxHumMin=$_POST['TxHumMin'];
$effectif=0;
if(!isset($PHMin) || !isset($PHMax) ){
    $PHMin="NULL";
    $PHMax="NULL";
}

if(!isset($TxHumMax) || !isset($TxHumMin) ){
    $TxHumMax="NULL";
    $TxHumMin="NULL";
}

if($TempMax<=$TempMin || $TempMin>=$TempMax || !isset($TempMax) || !isset($TempMin)){
    $msgerreur="Erreur dans les températures, attention a ce que la température minimale soit inférieure à la température maximale";
    erreur($msgerreur);
}

    else{
        if(isset($image) && !empty($image)){
            ///Image
            // Récupérer l'image
            $imageData = file_get_contents($image);
            
            // Créer une image à partir des données
            $sourceImage = imagecreatefromstring($imageData);
            
            // Convertir en JPEG
            $jpegImage = imagecreatetruecolor(imagesx($sourceImage), imagesy($sourceImage));
            imagecopy($jpegImage, $sourceImage, 0, 0, 0, 0, imagesx($sourceImage), imagesy($sourceImage));
            
            // Redimensionner l'image
            $width = 500; // Largeur souhaitée
            $height = 500; // Hauteur souhaitée
            $resizedImage = imagecreatetruecolor($width, $height);
            imagecopyresampled($resizedImage, $jpegImage, 0, 0, 0, 0, $width, $height, imagesx($jpegImage), imagesy($jpegImage));
            
            // Enregistrer l'image redimensionnée
            $destination = '/Image/Espece/'.$nom_espece.'.jpg';
            imagejpeg($resizedImage, $destination);
            
            // Libérer la mémoire
            imagedestroy($sourceImage);
            imagedestroy($jpegImage);
            imagedestroy($resizedImage);
            }

            $connDB = connexionDB();
            $sql = "INSERT INTO ESPECE () VALUES ('$nom_espece', '$esperance', '$taille',  '$poids','$description', '$gestation','$effectif','$TempMax','$TempMin','$PHMax','$PHMin','$TxHumMax','$TxHumMin','$indivuduel','$protege','$zone')";
            $connDB->exec($sql);
            
        }
    


?>

