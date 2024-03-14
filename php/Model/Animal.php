<?php
include 'DB.php';
class Animal
{
    static $listeAnimal = array();
    private $IDAnimal;
    private $IDParcelle;
    private $NomEspece;
    private $NomAnimal;
    private $DateNaissance;
    private $Poids;
    private $Taille;
    private $Sexe;
    private $Description;

    public function __construct($IDAnimal, $IDParcelle, $NomEspece, $NomAnimal, $DateNaissance, $Poids, $Taille, $Sexe, $Description)
    {
        $this->IDAnimal = $IDAnimal;
        $this->IDParcelle = $IDParcelle;
        $this->NomEspece = $NomEspece;
        $this->NomAnimal = $NomAnimal;
        $this->DateNaissance = $DateNaissance;
        $this->Poids = $Poids;
        $this->Taille = $Taille;
        $this->Sexe = $Sexe;
        $this->Description = $Description;
    }

    public function getIDAnimal()
    {
        return $this->IDAnimal;
    }

    public function setIDAnimal($IDAnimal)
    {
        $this->IDAnimal = $IDAnimal;
    }

    public function getIDParcelle()
    {
        return $this->IDParcelle;
    }

    public function setIDParcelle($IDParcelle)
    {
        $this->IDParcelle = $IDParcelle;
    }

    public function getNomEspece()
    {
        return $this->NomEspece;
    }

    public function setNomEspece($NomEspece)
    {
        $this->NomEspece = $NomEspece;
    }

    public function getNomAnimal()
    {
        return $this->NomAnimal;
    }

    public function setNomAnimal($NomAnimal)
    {
        $this->NomAnimal = $NomAnimal;
    }

    public function getDateNaissance()
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance($DateNaissance)
    {
        $this->DateNaissance = $DateNaissance;
    }

    public function getPoids()
    {
        return $this->Poids;
    }

    public function setPoids($Poids)
    {
        $this->Poids = $Poids;
    }

    public function getTaille()
    {
        return $this->Taille;
    }

    public function setTaille($Taille)
    {
        $this->Taille = $Taille;
    }

    public function getSexe()
    {
        return $this->Sexe;
    }

    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    public function ajoutDatabase()
    {
        $conn = DB::connexionDB(); 

        $query = "INSERT INTO ANIMAL (IDAnimal, IDParcelle, NomEspece, NomAnimal, DateNaissance, Poids, Taille, Sexe, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam("iisssdsss", $this->IDAnimal, $this->IDParcelle, $this->NomEspece, $this->NomAnimal, $this->DateNaissance, $this->Poids, $this->Taille, $this->Sexe, $this->Description);

        
    }

    public static function fetchListAnimalFromDatabase(){
    $conn = DB::connexionDB();
    $query = "SELECT * FROM ANIMAL";
    $result = $conn->prepare($query);
    $result->execute();
    $listeAnimal = [];
    foreach ($result as $row) {
        $animal = new Animal($row['IDAnimal'], $row['IDParcelle'], $row['NomEspece'], $row['NomAnimal'], $row['DateNaissance'], $row['Poids'], $row['Taille'], $row['Sexe'], $row['Description']);
        array_push($listeAnimal, $animal); 
    }
    return $listeAnimal;
}

public function saveToDatabase()
{
    $conn = DB::connexionDB();
    $query = "INSERT INTO ANIMAL (IDAnimal, IDParcelle, NomEspece, NomAnimal, DateNaissance, Poids, Taille, Sexe, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam("oui", $this->IDAnimal, $this->IDParcelle, $this->NomEspece, $this->NomAnimal, $this->DateNaissance, $this->Poids, $this->Taille, $this->Sexe, $this->Description);
    $stmt->execute();}


    public function deleteFromDatabase()
    {
        $conn = DB::connexionDB();
        $query = "DELETE FROM ANIMAL WHERE IDAnimal = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam("i", $this->IDAnimal);
        $stmt->execute();
    }

    public function updateInDatabase()
    {
        $conn = DB::connexionDB();
        $query = "UPDATE ANIMAL SET IDParcelle = ?, NomEspece = ?, NomAnimal = ?, DateNaissance = ?, Poids = ?, Taille = ?, Sexe = ?, Description = ? WHERE IDAnimal = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $this->IDParcelle);
        $stmt->bindParam(2, $this->NomEspece);
        $stmt->bindParam(3, $this->NomAnimal);
        $stmt->bindParam(4, $this->DateNaissance);
        $stmt->bindParam(5, $this->Poids);
        $stmt->bindParam(6, $this->Taille);
        $stmt->bindParam(7, $this->Sexe);
        $stmt->bindParam(8, $this->Description);
        $stmt->bindParam(9, $this->IDAnimal);
        $stmt->execute();
    }

} //fin classe