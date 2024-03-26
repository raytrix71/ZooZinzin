<?php 

class Activite {
    private $IDActivite;
    private $IDTypeActivite;
    private $DateActivite;
    private $HeureActivite;

    public function __construct($IDActivite, $IDTypeActivite, $DateActivite, $HeureActivite) {
        $this->IDActivite = $IDActivite;
        $this->IDTypeActivite = $IDTypeActivite;
        $this->DateActivite = $DateActivite;
        $this->HeureActivite = $HeureActivite;
    }

    // Getters
    public function getIDActivite() {
        return $this->IDActivite;
    }

    public function getIDTypeActivite() {
        return $this->IDTypeActivite;
    }

    public function getDateActivite() {
        return $this->DateActivite;
    }

    public function getHeureActivite() {
        return $this->HeureActivite;
    }

    // Setters
    public function setIDActivite($IDActivite) {
        $this->IDActivite = $IDActivite;
    }

    public function setIDTypeActivite($IDTypeActivite) {
        $this->IDTypeActivite = $IDTypeActivite;
    }

    public function setDateActivite($DateActivite) {
        $this->DateActivite = $DateActivite;
    }

    public function setHeureActivite($HeureActivite) {
        $this->HeureActivite = $HeureActivite;
    }

    // Fetch all activities from the database
    public static function fetchListActiviteFromDatabase() {
        $connexion = DB::connexionDB();
        $SQL = "SELECT * FROM ACTIVITE";
        $requete = $connexion->prepare($SQL);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        $listeObjetActivite = [];
        foreach ($resultat as $row) {
            $activite = new Activite($row['IDActivite'], $row['IDTypeActivite'], $row['DateActivite'], $row['HeureActivite']);
            array_push($listeObjetActivite, $activite);
        }
        return $listeObjetActivite;
    }

    // Fetch a single activity by its ID
    public static function fetchByActiviteID($IDActivite) {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM ACTIVITE WHERE IDActivite = :IDActivite";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDActivite', $IDActivite, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Activite($row['IDActivite'], $row['IDTypeActivite'], $row['DateActivite'], $row['HeureActivite']);
        } else {
            return null;
        }
    }

    // Update an activity in the database
    public function updateActivite() {
        $conn = DB::connexionDB();
        $query = "UPDATE ACTIVITE SET IDTypeActivite = :IDTypeActivite, DateActivite = :DateActivite, HeureActivite = :HeureActivite WHERE IDActivite = :IDActivite";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDActivite', $this->IDActivite, PDO::PARAM_INT);
        $stmt->bindParam(':IDTypeActivite', $this->IDTypeActivite, PDO::PARAM_INT);
        $stmt->bindParam(':DateActivite', $this->DateActivite);
        $stmt->bindParam(':HeureActivite', $this->HeureActivite);
        $stmt->execute();
    }

    // Save a new activity to the database
    public function saveToDatabase() {
        $conn = DB::connexionDB();
        $query = "INSERT INTO ACTIVITE (IDTypeActivite, DateActivite, HeureActivite) VALUES (:IDTypeActivite, :DateActivite, :HeureActivite)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeActivite', $this->IDTypeActivite, PDO::PARAM_INT);
        $stmt->bindParam(':DateActivite', $this->DateActivite);
        $stmt->bindParam(':HeureActivite', $this->HeureActivite);
        $stmt->execute();
        $this->IDActivite = $conn->lastInsertId(); // Assigne l'ID de l'activité insérée à l'objet
    }

    // Fetch activities by type ID
    public static function fetchActivitesByTypeID($IDTypeActivite) {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM ACTIVITE WHERE IDTypeActivite = :IDTypeActivite";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeActivite', $IDTypeActivite, PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $listeObjetActivite = [];
        foreach ($resultat as $row) {
            $activite = new Activite($row['IDActivite'], $row['IDTypeActivite'], $row['DateActivite'], $row['HeureActivite']);
            array_push($listeObjetActivite, $activite);
        }
        return $listeObjetActivite;
    }
}



