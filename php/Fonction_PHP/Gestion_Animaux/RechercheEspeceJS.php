<?php
$nom_espece = $_GET['NomEspece'];

$stmt = $conn->prepare("SELECT * FROM ESPECE WHERE NomEspece = ?");
if ($stmt) {
    $stmt->bindParam(1, $nom_espece, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Rest of the code...
} else {
    // Handle prepare error...
}

if ($result->num_rows > 0) {
    echo "exists";
} else {
    echo "not_exists";
}