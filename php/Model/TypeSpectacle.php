<? 

class TypeSpectacle {
    private $IDTypeSpectacle;
    private $NomSpectacle;
    private $LieuSpectacle;
    private $DescriptionSpectacle;
    private $TarifSpectacle;
    private $CapaciteMaxSpectacle;

    public function __construct($IDTypeSpectacle, $NomSpectacle, $LieuSpectacle, $DescriptionSpectacle, $TarifSpectacle, $CapaciteMaxSpectacle) {
        $this->IDTypeSpectacle = $IDTypeSpectacle;
        $this->NomSpectacle = $NomSpectacle;
        $this->LieuSpectacle = $LieuSpectacle;
        $this->DescriptionSpectacle = $DescriptionSpectacle;
        $this->TarifSpectacle = $TarifSpectacle;
        $this->CapaciteMaxSpectacle = $CapaciteMaxSpectacle;
    }

    public function getIDTypeSpectacle() {
        return $this->IDTypeSpectacle;
    }

    public function getNomSpectacle() {
        return $this->NomSpectacle;
    }

    public function getLieuSpectacle() {
        return $this->LieuSpectacle;
    }

    public function getDescriptionSpectacle() {
        return $this->DescriptionSpectacle;
    }

    public function getTarifSpectacle() {
        return $this->TarifSpectacle;
    }

    public function getCapaciteMaxSpectacle() {
        return $this->CapaciteMaxSpectacle;
    }

    public function setIDTypeSpectacle($IDTypeSpectacle) {
        $this->IDTypeSpectacle = $IDTypeSpectacle;
    }

    public function setNomSpectacle($NomSpectacle) {
        $this->NomSpectacle = $NomSpectacle;
    }

    public function setLieuSpectacle($LieuSpectacle) {
        $this->LieuSpectacle = $LieuSpectacle;
    }

    public function setDescriptionSpectacle($DescriptionSpectacle) {
        $this->DescriptionSpectacle = $DescriptionSpectacle;
    }

    public function setTarifSpectacle($TarifSpectacle) {
        $this->TarifSpectacle = $TarifSpectacle;
    }

    public function setCapaciteMaxSpectacle($CapaciteMaxSpectacle) {
        $this->CapaciteMaxSpectacle = $CapaciteMaxSpectacle;
    }

    public static function fetchListSpectacleFromDatabase(){
        $conn = DB::connexionDB();
        $query = "SELECT * FROM TYPESPECTACLE";
        $result = $conn->prepare($query);
        $result->execute();
        $listeSpectacle = [];
        foreach ($result as $row) {
            $typespectacle = new TypeSpectacle ($row['IDTypeSpectacle'], $row['NomSpectacle'], $row['LieuSpectacle'], $row['DescriptionSpectacle'], $row['TarifSpectacle'], $row['CapaciteMaxSpectacle']);
            array_push($listeSpectacle, $typespectacle); 
        }
        return $listeSpectacle;
}

public static function fetchByID($IDTypeSpectacle) {
    try {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM TYPESPECTACLE WHERE IDTypeSpectacle = :IDTypeSpectacle";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':IDTypeSpectacle', $IDTypeSpectacle, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new TypeSpectacle($row['IDTypeSpectacle'], $row['NomSpectacle'], $row['LieuSpectacle'], $row['DescriptionSpectacle'], $row['TarifSpectacle'], $row['CapaciteMaxSpectacle']);
        } else {
            // Retourner null ou gérer d'une autre manière si aucun type de spectacle n'est trouvé
            return null;
        }
    } catch (Exception $e) {
        // Gérer ou logger l'erreur
        error_log("Une erreur est survenue lors de la récupération du type de spectacle : " . $e->getMessage());
        return null;
    }
}

    }


