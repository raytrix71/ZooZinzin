
<?php 
include_once 'DB.php';
class Spectacle {
    private $IDSpectacle;
    private $IDTypeSpectacle;
    private $DateSpectacle;
    private $HeureSpectacle;

    public function __construct($IDSpectacle, $IDTypeSpectacle, $DateSpectacle, $HeureSpectacle) {
        $this->IDSpectacle = $IDSpectacle;
        $this->IDTypeSpectacle = $IDTypeSpectacle;
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
}