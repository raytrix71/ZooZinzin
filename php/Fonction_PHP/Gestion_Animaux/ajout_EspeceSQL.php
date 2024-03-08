
<?php
include('/var/www/html/Fonction_PHP/Erreur.php');
include('/var/www/html/Fonction_PHP/connexionDB.php');
$nom_espece = $_POST['nom_espece'];
$esperance = $_POST['esperance'];
$taille = $_POST['taille'];
$poids = $_POST['poids'];
$gestation = $_POST['gestation'];
$description = $_POST['description'];
$individuel=$_POST['individuel'];
$protege=$_POST['protege'];
$zone=$_POST['zone'];
$TempMax=$_POST['TempMax'];
$TempMin=$_POST['TempMin'];
$PHMax=$_POST['PHMax'];
$PHMin=$_POST['PHMin'];
$TxHumMax=$_POST['TxHumMax'];
$TxHumMin=$_POST['TxHumMin'];
$effectif=0;
if(!isset($PHMin) || !isset($PHMax) || $PHMax === '' || $PHMin === ''){
    $PHMin=NULL;
    $PHMax=NULL;
}

if(!isset($TxHumMax) || !isset($TxHumMin) || $TxHumMax === '' || $TxHumMin === ''){
    $TxHumMax=NULL;
    $TxHumMin=NULL;
}

if($TempMax<=$TempMin || $TempMin>=$TempMax || !isset($TempMax) || !isset($TempMin)){
    $msgerreur="Erreur dans les températures, attention a ce que la température minimale soit inférieure à la température maximale";
    erreur($msgerreur);
}

    else{
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
                    $newWidth = 500;
                    $newHeight = round(($originalHeight / $originalWidth) * $newWidth);
            
            
                    // Créez une nouvelle image avec les nouvelles dimensions
                    $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
                    // Redimensionnez l'image originale et copiez-la dans la nouvelle image
                    imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
            
                    // Enregistrez la nouvelle image sur le disque
                    $filePath = '/var/www/html/Image/Espece/';
                    $fileName = $nom_espece . ".jpg";
            
            
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

    $connDB = connexionDB();
    $sql = "INSERT INTO ESPECE (NomEspece, Esperance, TailleMoyenne, PoidsMoyen, DescriptionEspece, TempsGestation, Effectif, TempMax, TempMin, PHMax, PHMin, TxHumMax, TxHumMin, protege, individuel, IDZone) VALUES (:nom_espece, :esperance, :taille, :poids, :description, :gestation, :effectif, :TempMax, :TempMin, :PHMax, :PHMin, :TxHumMax, :TxHumMin, :protege, :individuel, :zone)";
    $req=$connDB->prepare($sql);
    $req->execute(['nom_espece'=>$nom_espece, 'esperance'=>$esperance, 'taille'=>$taille,  'poids'=>$poids,'description'=>$description, 'gestation'=>$gestation,'effectif'=>$effectif,'TempMax'=>$TempMax,'TempMin'=>$TempMin,'PHMax'=>$PHMax,'PHMin'=>$PHMin,'TxHumMax'=>$TxHumMax,'TxHumMin'=>$TxHumMin,'protege'=>$protege,'individuel'=>$individuel,'zone'=>$zone]);            
            
}
    


?>

