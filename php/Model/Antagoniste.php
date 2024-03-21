<?php


class Antagoniste
{
    private $IDAntagoniste;
    private $NomEspecePredateur;
    private $NomEspeceProie;

    public function __construct($IDAntagoniste, $NomEspecePredateur, $NomEspeceProie)
    {
        $this->IDAntagoniste = $IDAntagoniste;
        $this->NomEspecePredateur = $NomEspecePredateur;
        $this->NomEspeceProie = $NomEspeceProie;
    }

    public function getIDAntagoniste()
    {
        return $this->IDAntagoniste;
    }

    public function setIDAntagoniste($IDAntagoniste)
    {
        $this->IDAntagoniste = $IDAntagoniste;
    }

    public function getNomEspecePredateur()
    {
        return $this->NomEspecePredateur;
    }

    public function setNomEspecePredateur($NomEspecePredateur)
    {
        $this->NomEspecePredateur = $NomEspecePredateur;
    }

    public function getNomEspeceProie()
    {
        return $this->NomEspeceProie;
    }

    public function setNomEspeceProie($NomEspeceProie)
    {
        $this->NomEspeceProie = $NomEspeceProie;
    }


    public static function fetchAntagonisteFromDB(){
        $conn= DB::connexionDB();
        $sql = "SELECT * FROM ANTAGONISTE";
        $result = $conn->query($sql);
        $listAntagoniste = array();
        $listAntagoniste= $result->fetchAll();
        $final=array();
        foreach($listAntagoniste as $antagoniste){
            $antago = new Antagoniste($antagoniste[0],$antagoniste[1],$antagoniste[2]);
            array_push($final,$antago);

        }
        return $final;
    }

public function ajoutAntagonisteToDB(){
    $conn= DB::connexionDB();
    $sql = "INSERT INTO ANTAGONISTE (NomEspecePredateur, NomEspeceProie) VALUES (:NomEspecePredateur, :NomEspeceProie)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NomEspecePredateur', $this->NomEspecePredateur);
    $stmt->bindParam(':NomEspeceProie', $this->NomEspeceProie);
    $stmt->execute();
}

public function suppressionAntagonisteFromDB(){
    $conn= DB::connexionDB();
    $sql = "DELETE FROM ANTAGONISTE WHERE IDAntagoniste = :IDAntagoniste";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':IDAntagoniste', $this->IDAntagoniste);
    $stmt->execute();

}///fin class
}
?>