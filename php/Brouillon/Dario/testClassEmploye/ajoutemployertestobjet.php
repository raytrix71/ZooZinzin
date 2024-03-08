<?php
    include('../Model/Employe.php');
    $nom_employe = $_POST['Nom'];
    $prenom_employe = $_POST['Prenom'];
    $num_tel = $_POST['Ntelephone'];
    $adresse_email = $_POST['AdresseEmail'];
    $adresse_postale = $_POST['AdressePostale'];
    $code_postal = $_POST['CodePostal'];
    $motdepasse = $_POST['MDPEmploye'];
    $role = $_POST['role'];
    $idEmploye=null;

    if ($role == "Soignant" || $role == "Veterinaire") {
        $zone = $_POST['zone'];
    $employe=new Employe($idEmploye,$prenom_employe,$nom_employe, $adresse_postale, $code_postal, $adresse_email, $motdepasse,$num_tel, $role,$zone);
    } else {
        $zone=null;
        $employe=new Employe($idEmploye,$prenom_employe,$nom_employe, $adresse_postale, $code_postal, $adresse_email, $motdepasse,$num_tel, $role,$zone);
    }

    $employe->ajoutEmployeDB();

?>