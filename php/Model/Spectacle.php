
<?php 

class Spectacle {
    private $IDSpectacle;
    private $IDTypeSpectacle; 
    private $DateSpectacle;
    private $HeureSpectacle;

    public function __construct($IDSpectacle,$IDTypeSpectacle, $DateSpectacle, $HeureSpectacle) {
        $this->IDSpectacle = $IDSpectacle;
        $this->IDTypeSpectacle = $IDTypeSpectacle; //objet TypeSpectacle
        $this->DateSpectacle = $DateSpectacle;
        $this->HeureSpectacle = $HeureSpectacle;
    }
   

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
            
            $typeSpectacle = TypeSpectacle::fetchByID($row['IDTypeSpectacle']);
           
            return new Spectacle(
                $row['IDSpectacle'], 
                $typeSpectacle, 
                $row['DateSpectacle'], 
                $row['HeureSpectacle']
            );
        } else {
            return null; 
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

    public function saveToDatabase() {
        $conn = DB::connexionDB();
        $query = "INSERT INTO SPECTACLE (IDTypeSpectacle, DateSpectacle, HeureSpectacle) VALUES (:IDTypeSpectacle, :DateSpectacle, :HeureSpectacle)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeSpectacle', $this->IDTypeSpectacle, PDO::PARAM_INT);
        $stmt->bindParam(':DateSpectacle', $this->DateSpectacle, PDO::PARAM_STR);
        $stmt->bindParam(':HeureSpectacle', $this->HeureSpectacle, PDO::PARAM_STR);
        $stmt->execute();
    }


    public static function fetchListSpectacleFromDatabase() {
        $connexion = DB::connexionDB();
        $SQL = "SELECT * FROM SPECTACLE";
        $requete = $connexion->prepare($SQL);
        $requete->execute();
        $resultat = $requete->fetchAll();
        $listeObjetSpectacle = array();
        foreach ($resultat as $row) {
            $spectacle = new Spectacle($row['IDSpectacle'], $row['IDTypeSpectacle'], $row['DateSpectacle'], $row['HeureSpectacle']);
            array_push($listeObjetSpectacle, $spectacle);
        }

        return $listeObjetSpectacle;
}

  
public static function fetchSpectaclesByTypeID($IDTypeSpectacle) {
    $conn = DB::connexionDB();
    $query = "SELECT * FROM SPECTACLE WHERE IDTypeSpectacle = :IDTypeSpectacle";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':IDTypeSpectacle', $IDTypeSpectacle, PDO::PARAM_INT);
    $stmt->execute();
    
    $spectacles = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Récupération de l'objet TypeSpectacle correspondant à IDTypeSpectacle
        $typeSpectacle = TypeSpectacle::fetchByID($row['IDTypeSpectacle']);
        
        // Création d'un nouvel objet Spectacle avec les informations récupérées
        $spectacle = new Spectacle(
            $row['IDSpectacle'], 
            $typeSpectacle, // Notez que nous passons l'objet TypeSpectacle ici
            $row['DateSpectacle'], 
            $row['HeureSpectacle']
        );
        $spectacles[] = $spectacle;
    }
    return $spectacles;
}

}



