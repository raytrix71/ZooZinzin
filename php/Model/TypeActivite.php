<?php 

class TypeActivite {
    private $IDTypeActivite;
    private $NomActivite;
    private $LieuActivite;
    private $DescriptionActivite;
    private $TarifActivite;
    private $CapaciteMaxActivite;

    public function __construct($IDTypeActivite, $NomActivite, $LieuActivite, $DescriptionActivite, $TarifActivite, $CapaciteMaxActivite) {
        $this->IDTypeActivite = $IDTypeActivite;
        $this->NomActivite = $NomActivite;
        $this->LieuActivite = $LieuActivite;
        $this->DescriptionActivite = $DescriptionActivite;
        $this->TarifActivite = $TarifActivite;
        $this->CapaciteMaxActivite = $CapaciteMaxActivite;
    }

    // Getters
    public function getIDTypeActivite() {
        return $this->IDTypeActivite;
    }

    public function getNomActivite() {
        return $this->NomActivite;
    }

    public function getLieuActivite() {
        return $this->LieuActivite;
    }

    public function getDescriptionActivite() {
        return $this->DescriptionActivite;
    }

    public function getTarifActivite() {
        return $this->TarifActivite;
    }

    public function getCapaciteMaxActivite() {
        return $this->CapaciteMaxActivite;
    }

    // Setters
    public function setIDTypeActivite($IDTypeActivite) {
        $this->IDTypeActivite = $IDTypeActivite;
    }

    public function setNomActivite($NomActivite) {
        $this->NomActivite = $NomActivite;
    }

    public function setLieuActivite($LieuActivite) {
        $this->LieuActivite = $LieuActivite;
    }

    public function setDescriptionActivite($DescriptionActivite) {
        $this->DescriptionActivite = $DescriptionActivite;
    }

    public function setTarifActivite($TarifActivite) {
        $this->TarifActivite = $TarifActivite;
    }

    public function setCapaciteMaxActivite($CapaciteMaxActivite) {
        $this->CapaciteMaxActivite = $CapaciteMaxActivite;
    }

    // Fetch all activity types from the database
    public static function fetchListActiviteFromDatabase() {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM TYPEACTIVITE";
        $result = $conn->prepare($query);
        $result->execute();
        $TB = $result->fetchAll(PDO::FETCH_ASSOC);
        $listeActivite = [];
        foreach ($TB as $row) {
            $typeActivite = new TypeActivite($row['IDTypeActivite'], $row['NomActivite'], $row['LieuActivite'], $row['DescriptionActivite'], $row['TarifActivite'], $row['CapaciteMaxActivite']);
            array_push($listeActivite, $typeActivite); 
        }
        return $listeActivite;
    }

    // Fetch all activity types from the database
    public static function fetchListTypeActiviteFromDatabase() {
        $conn = DB::connexionDB();
        $query = "SELECT * FROM TYPEACTIVITE";
        $result = $conn->prepare($query);
        $result->execute();
        $TB = $result->fetchAll(PDO::FETCH_ASSOC);
        $listeActivite = [];
        foreach ($TB as $row) {
            $typeActivite = new TypeActivite($row['IDTypeActivite'], $row['NomActivite'], $row['LieuActivite'], $row['DescriptionActivite'], $row['TarifActivite'], $row['CapaciteMaxActivite']);
            array_push($listeActivite, $typeActivite); 
        }
        return $listeActivite;
    }

    // Fetch a single activity type by its ID
    public static function fetchByID($IDTypeActivite) {
        try {
            $conn = DB::connexionDB();
            $query = "SELECT * FROM TYPEACTIVITE WHERE IDTypeActivite = :IDTypeActivite";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':IDTypeActivite', $IDTypeActivite, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new TypeActivite($row['IDTypeActivite'], $row['NomActivite'], $row['LieuActivite'], $row['DescriptionActivite'], $row['TarifActivite'], $row['CapaciteMaxActivite']);
            } else {
                // Return null or handle otherwise if no activity type is found
                return null;
            }
        } catch (Exception $e) {
            // Handle or log the error
            error_log("An error occurred while fetching the activity type: " . $e->getMessage());
            return null;
        }
    }
}


