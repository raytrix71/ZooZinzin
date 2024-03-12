<?php

class Zone
{
    private $IDZone;
    private $NomCategorieEspece;
    private $NOMZONE;
    static $listZone = [];

    public function getIDZone()
    {
        return $this->IDZone;
    }

    public function setIDZone($IDZone)
    {
        $this->IDZone = $IDZone;
    }

    public function getNomCategorieEspece()
    {
        return $this->NomCategorieEspece;
    }

    public function setNomCategorieEspece($NomCategorieEspece)
    {
        $this->NomCategorieEspece = $NomCategorieEspece;
    }

    public function getNOMZONE()
    {
        return $this->NOMZONE;
    }

    public function setNOMZONE($NOMZONE)
    {
        $this->NOMZONE = $NOMZONE;
    }

    public static function fetchListZoneFromDatabase()
    {
        
        $bdd = DB::connexionDB();
        $query = "SELECT * FROM ZONE";
        $statement = $bdd->prepare($query);
        $statement->execute();
        $liste = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($liste as $zone) {
            $zoneObject = new Zone();
            $zoneObject->setIDZone($zone['IDZone']);
            $zoneObject->setNomCategorieEspece($zone['NomCategorieEspece']);
            $zoneObject->setNOMZONE($zone['NOMZONE']);
            array_push(self::$listZone, $zoneObject);
        }
        return self::$listZone;
    }

    public function addToDatabase()
    {
        $bdd = connexionDB();
        $query = "INSERT INTO ZONE (IDZone, NomCategorieEspece, NOMZONE) VALUES (:IDZone, :NomCategorieEspece, :NOMZONE)";
        $statement = $bdd->prepare($query);
        $statement->bindParam(':IDZone', $this->IDZone);
        $statement->bindParam(':NomCategorieEspece', $this->NomCategorieEspece);
        $statement->bindParam(':NOMZONE', $this->NOMZONE);
        $statement->execute();
    }

    public function updateInDatabase()
    {
        $bdd = connexionDB();
        $query = "UPDATE ZONE SET NomCategorieEspece = :NomCategorieEspece, NOMZONE = :NOMZONE WHERE IDZone = :IDZone";
        $statement = $bdd->prepare($query);
        $statement->bindParam(':IDZone', $this->IDZone);
        $statement->bindParam(':NomCategorieEspece', $this->NomCategorieEspece);
        $statement->bindParam(':NOMZONE', $this->NOMZONE);
        $statement->execute();
    }

    
}