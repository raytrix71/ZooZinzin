<?php 

class Spectacle {
    private $IDSpectacle;
    private $IDTypeSpectacle; 
    private $typeSpectacle; // Objet TypeSpectacle
    private $DateSpectacle;
    private $HeureSpectacle;

    public function __construct($IDSpectacle, TypeSpectacle $typeSpectacle, $DateSpectacle, $HeureSpectacle) {
        $this->IDSpectacle = $IDSpectacle;
        $this->typeSpectacle = $typeSpectacle; //objet TypeSpectacle
        $this->DateSpectacle = $DateSpectacle;
        $this->HeureSpectacle = $HeureSpectacle;
    }

    // Méthodes getters et setters...

    public function getTypeSpectacle() {
        return $this->typeSpectacle;}

    public function getIDSpectacle() {
        return $this->IDSpectacle;
    }

    public function getIDTypeSpectacle() {
        return $this->IDTypeSpectacle;
    }

    public function getDateSpectacle() {
        return $this->DateSpectacle;
    }

    public function getHeureSpectacle() {
        return $this->HeureSpectacle;
    }

    public function setIDSpectacle($IDSpectacle) {
        $this->IDSpectacle = $IDSpectacle;
    }

    public function setIDTypeSpectacle($IDTypeSpectacle) {
        $this->IDTypeSpectacle = $IDTypeSpectacle;
    }

    public function setDateSpectacle($DateSpectacle) {
        $this->DateSpectacle = $DateSpectacle;
    }

    public function setHeureSpectacle($HeureSpectacle) {
        $this->HeureSpectacle = $HeureSpectacle;
    }


    public static function fetchListFicheSpectacleFromDatabase() {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM SPECTACLE";
        $result = $conn->prepare($query);
        $result->execute();
        $listeSpectacle = [];
        foreach ($result as $row) {
            // Supposons que vous ayez une méthode pour récupérer l'objet TypeSpectacle associé
            $typeSpectacle = TypeSpectacle::fetchByID($row['IDTypeSpectacle']);
            $spectacle = new Spectacle($row['IDSpectacle'], $typeSpectacle, $row['DateSpectacle'], $row['HeureSpectacle']);
            array_push($listeSpectacle, $spectacle); 
        }
        return $listeSpectacle;
    }
    
    public static function fetchBySpectacleID($IDSpectacle) {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM SPECTACLE WHERE IDSpectacle = :IDSpectacle";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDSpectacle', $IDSpectacle, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            // Supposons que vous avez une méthode pour récupérer l'objet TypeSpectacle associé
            $typeSpectacle = TypeSpectacle::fetchByID($row['IDTypeSpectacle']);
            // Créer et retourner un objet Spectacle basé sur les données récupérées
            return new Spectacle(
                $row['IDSpectacle'], 
                $typeSpectacle, 
                $row['DateSpectacle'], 
                $row['HeureSpectacle']
            );
        } else {
            return null; // Aucun spectacle trouvé avec cet IDSpectacle
        }
    }

    public function updatespectacle(){
        $conn = DB::connexionDB();
        $query = "UPDATE SPECTACLE SET DateSpectacle = ?, HeureSpectacle = ? WHERE IDSpectacle = ?";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(1, $this->DateSpectacle);
        $stmt->bindParam(2, $this->HeureSpectacle);
        $stmt->bindParam(3, $this->IDSpectacle);
        $stmt->execute();
    }
}
