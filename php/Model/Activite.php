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

    // Méthodes getters et setters...
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
    public static function fetchListFicheActiviteFromDatabase() {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM ACTIVITE";
        $result = $conn->prepare($query);
        $result->execute();
        $listeActivite = [];
        foreach ($result as $row) {
            $typeActivite = TypeActivite::fetchByID($row['IDTypeActivite']);
            $activite = new Activite($row['IDActivite'], $typeActivite, $row['DateActivite'], $row['HeureActivite']);
            array_push($listeActivite, $activite); 
        }
        return $listeActivite;
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
            $typeActivite = TypeActivite::fetchByID($row['IDTypeActivite']);
            return new Activite($row['IDActivite'], $typeActivite, $row['DateActivite'], $row['HeureActivite']);
        } else {
            return null; 
        }
    }

    // Update an activity
    public function updateActivite(){
        $conn = DB::connexionDB();
        $query = "UPDATE ACTIVITE SET DateActivite = ?, HeureActivite = ? WHERE IDActivite = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $this->DateActivite);
        $stmt->bindParam(2, $this->HeureActivite);
        $stmt->bindParam(3, $this->IDActivite);
        $stmt->execute();
    }

    // Save an activity to the database
    public function saveToDatabase() {
        $conn = DB::connexionDB();
        $query = "INSERT INTO ACTIVITE (IDTypeActivite, DateActivite, HeureActivite) VALUES (:IDTypeActivite, :DateActivite, :HeureActivite)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeActivite', $this->IDTypeActivite, PDO::PARAM_INT);
        $stmt->bindParam(':DateActivite', $this->DateActivite, PDO::PARAM_STR);
        $stmt->bindParam(':HeureActivite', $this->HeureActivite, PDO::PARAM_STR);
        $stmt->execute();
    }

    // Fetch all activities by type ID
    public static function fetchActivitesByTypeID($IDTypeActivite) {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM ACTIVITE WHERE IDTypeActivite = :IDTypeActivite";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeActivite', $IDTypeActivite, PDO::PARAM_INT);
        $stmt->execute();
        
        $activites = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $typeActivite = TypeActivite::fetchByID($row['IDTypeActivite']);
            $activite = new Activite(
                $row['IDActivite'], 
                $typeActivite, 
                $row['DateActivite'], 
                $row['HeureActivite']
            );
            $activites[] = $activite;
        }
        return $activites;
    }


    public static function fetchListActivite(){
        $bdd = DB::connexionDB();
        $sql = 'SELECT * FROM ACTIVITE';
        $connexion = $bdd->query($sql);
        $resultat = $connexion->fetchAll();
        foreach($resultat as $row){
            $activite = new Activite($row['IDActivite'], $row['IDTypeActivite'], $row['DateActivite'], $row['HeureActivite']);
            array_push($listeActivite, $activite);
        }
        return $listeActivite;
    }
}

