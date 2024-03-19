<?php

class ResultatAntagoniste{
    private $nomEspeceAntagoniste;

    public function __construct($nomEspeceAntagoniste){
        $this->nomEspeceAntagoniste = $nomEspeceAntagoniste;
    }

    public function getNomEspeceAntagoniste(){
        return $this->nomEspeceAntagoniste;
    }

    public function setNomEspeceAntagoniste($nomEspeceAntagoniste){
        $this->nomEspeceAntagoniste = $nomEspeceAntagoniste;
    }

    public static function antagonisteEspeceDB($nomespece){
        $conn= DB::connexionDB();
        $sql = "SELECT NomEspeceProie
        FROM ANTAGONISTE
        WHERE NomEspecePredateur = :nomespece
        UNION
        SELECT NomEspecePredateur
        FROM ANTAGONISTE
        WHERE  NomEspeceProie = :nomespece;";
        $result = $conn->prepare($sql);
        $result->bindParam(':nomespece', $nomespece);
        $result->execute();
        $listAntagoniste= $result->fetchAll();
        $final=array();
        foreach($listAntagoniste as $antagoniste){
            $antago = new ResultatAntagoniste($antagoniste[0]);
            array_push($final,$antago);
        }
        return $final;
    }
}