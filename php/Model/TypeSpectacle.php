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
}