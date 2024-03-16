<?php

class Espece
{
    private $NomEspece;
    private $Esperance;
    private $TailleMoyenne;
    private $PoidsMoyen;
    private $DescriptionEspece;
    private $TempsGestation;
    private $Effectif;
    private $TempMax;
    private $TempMin;
    private $PHMAX;
    private $PHMin;
    private $TxHumMax;
    private $TxHumMin;
    private $Protege;
    private $Individuel;
    private $IDZone;
    private $Alim1;
    private $Qte1;
    private $Alim2;
    private $Qte2;
    private $Alim3;
    private $Qte3;
    static $listEspece = [];

    public function __construct($NomEspece, $Esperance, $TailleMoyenne, $PoidsMoyen, $DescriptionEspece, $TempsGestation, $Effectif, $TempMax, $TempMin, $PHMAX, $PHMin, $TxHumMax, $TxHumMin, $Protege, $Individuel, $IDZone, $Alim1, $Qte1, $Alim2, $Qte2, $Alim3, $Qte3)
    {
        $this->NomEspece = $NomEspece;
        $this->Esperance = $Esperance;
        $this->TailleMoyenne = $TailleMoyenne;
        $this->PoidsMoyen = $PoidsMoyen;
        $this->DescriptionEspece = $DescriptionEspece;
        $this->TempsGestation = $TempsGestation;
        $this->Effectif = $Effectif;
        $this->TempMax = $TempMax;
        $this->TempMin = $TempMin;
        $this->PHMAX = $PHMAX;
        $this->PHMin = $PHMin;
        $this->TxHumMax = $TxHumMax;
        $this->TxHumMin = $TxHumMin;
        $this->Protege = $Protege;
        $this->Individuel = $Individuel;
        $this->IDZone = $IDZone;
        $this->Alim1 = $Alim1;
        $this->Qte1 = $Qte1;
        $this->Alim2 = $Alim2;
        $this->Qte2 = $Qte2;
        $this->Alim3 = $Alim3;
        $this->Qte3 = $Qte3;
    }

    // Add getters and setters for each property
    public function getNomEspece()
    {
        return $this->NomEspece;
    }

    public function setNomEspece($NomEspece)
    {
        $this->NomEspece = $NomEspece;
    }

    public function getEsperance()
    {
        return $this->Esperance;
    }

    public function setEsperance($Esperance)
    {
        $this->Esperance = $Esperance;
    }

    public function getTailleMoyenne()
    {
        return $this->TailleMoyenne;
    }

    public function setTailleMoyenne($TailleMoyenne)
    {
        $this->TailleMoyenne = $TailleMoyenne;
    }

    public function getPoidsMoyen()
    {
        return $this->PoidsMoyen;
    }

    public function setPoidsMoyen($PoidsMoyen)
    {
        $this->PoidsMoyen = $PoidsMoyen;
    }

    public function getDescriptionEspece()
    {
        return $this->DescriptionEspece;
    }

    public function setDescriptionEspece($DescriptionEspece)
    {
        $this->DescriptionEspece = $DescriptionEspece;
    }

    public function getTempsGestation()
    {
        return $this->TempsGestation;
    }

    public function setTempsGestation($TempsGestation)
    {
        $this->TempsGestation = $TempsGestation;
    }

    public function getEffectif()
    {
        return $this->Effectif;
    }

    public function setEffectif($Effectif)
    {
        $this->Effectif = $Effectif;
    }

    public function getTempMax()
    {
        return $this->TempMax;
    }

    public function setTempMax($TempMax)
    {
        $this->TempMax = $TempMax;
    }

    public function getTempMin()
    {
        return $this->TempMin;
    }

    public function setTempMin($TempMin)
    {
        $this->TempMin = $TempMin;
    }

    public function getPHMAX()
    {
        return $this->PHMAX;
    }

    public function setPHMAX($PHMAX)
    {
        $this->PHMAX = $PHMAX;
    }

    public function getPHMin()
    {
        return $this->PHMin;
    }

    public function setPHMin($PHMin)
    {
        $this->PHMin = $PHMin;
    }

    public function getTxHumMax()
    {
        return $this->TxHumMax;
    }

    public function setTxHumMax($TxHumMax)
    {
        $this->TxHumMax = $TxHumMax;
    }

    public function getTxHumMin()
    {
        return $this->TxHumMin;
    }

    public function setTxHumMin($TxHumMin)
    {
        $this->TxHumMin = $TxHumMin;
    }

    public function getProtege()
    {
        return $this->Protege;
    }

    public function setProtege($Protege)
    {
        $this->Protege = $Protege;
    }

    public function getIndividuel()
    {
        return $this->Individuel;
    }

    public function setIndividuel($Individuel)
    {
        $this->Individuel = $Individuel;
    }

    public function getIDZone()
    {
        return $this->IDZone;
    }

    public function setIDZone($IDZone)
    {
        $this->IDZone = $IDZone;
    }

    public function getAlim1()
    {
        return $this->Alim1;
    }

    public function setAlim1($Alim1)
    {
        $this->Alim1 = $Alim1;
    }

    public function getQte1()
    {
        return $this->Qte1;
    }

    public function setQte1($Qte1)
    {
        $this->Qte1 = $Qte1;
    }

    public function getAlim2()
    {
        return $this->Alim2;
    }

    public function setAlim2($Alim2)
    {
        $this->Alim2 = $Alim2;
    }

    public function getQte2()
    {
        return $this->Qte2;
    }

    public function setQte2($Qte2)
    {
        $this->Qte2 = $Qte2;
    }

    public function getAlim3()
    {
        return $this->Alim3;
    }

    public function setAlim3($Alim3)
    {
        $this->Alim3 = $Alim3;
    }

    public function getQte3()
    {
        return $this->Qte3;
    }

    public function setQte3($Qte3)
    {
        $this->Qte3 = $Qte3;
    }

    public static function fetchListEspeceFromDatabase()
    {
        $db = DB::connexionDB();
        $query = "SELECT * FROM ESPECE ORDER BY IDZone";
        $result = $db->prepare($query);
        $result->execute();
        $listEspece = [];
        foreach ($result as $row) {
            $espece = new Espece($row['NomEspece'], $row['Esperance'], $row['TailleMoyenne'], $row['PoidsMoyen'], $row['DescriptionEspece'], $row['TempsGestation'], $row['Effectif'], $row['TempMax'], $row['TempMin'], $row['PHMAX'], $row['PHMin'], $row['TxHumMax'], $row['TxHumMin'], $row['Protege'], $row['Individuel'], $row['IDZone'], $row['Alim1'], $row['Qte1'], $row['Alim2'], $row['Qte2'], $row['Alim3'], $row['Qte3']);
            array_push($listEspece, $espece);
        }
        return $listEspece;
    }

    public function saveToDatabase()
    {
        $db = DB::connexionDB();
        $query = "INSERT INTO ESPECE (NomEspece, Esperance, TailleMoyenne, PoidsMoyen, DescriptionEspece, TempsGestation, Effectif, TempMax, TempMin, PHMAX, PHMin, TxHumMax, TxHumMin, Protege, Individuel, IDZone, Alim1, Qte1, Alim2, Qte2, Alim3, Qte3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bindParam("sssssssssssssssssssss", $this->NomEspece, $this->Esperance, $this->TailleMoyenne, $this->PoidsMoyen, $this->DescriptionEspece, $this->TempsGestation, $this->Effectif, $this->TempMax, $this->TempMin, $this->PHMAX, $this->PHMin, $this->TxHumMax, $this->TxHumMin, $this->Protege, $this->Individuel, $this->IDZone, $this->Alim1, $this->Qte1, $this->Alim2, $this->Qte2, $this->Alim3, $this->Qte3);
        $stmt->execute();
        
    }

    public function deleteFromDatabase()
    {
        $db = DB::connexionDB();
        $query = "DELETE FROM ESPECE WHERE NomEspece = ?";
        $stmt = $db->prepare($query);
        $stmt->bindParam("s", $this->NomEspece);
        $stmt->execute();
    }

    public function updateInDatabase()
    {
        $db = DB::connexionDB();
        $query = "UPDATE ESPECE SET Esperance = ?, TailleMoyenne = ?, PoidsMoyen = ?, DescriptionEspece = ?, TempsGestation = ?, Effectif = ?, TempMax = ?, TempMin = ?, PHMAX = ?, PHMin = ?, TxHumMax = ?, TxHumMin = ?, Protege = ?, Individuel = ?, IDZone = ?, Alim1 = ?, Qte1 = ?, Alim2 = ?, Qte2 = ?, Alim3 = ?, Qte3 = ? WHERE NomEspece = ?";
        $stmt = $db->prepare($query);
        $stmt->bindParam("ssssssssssssssssssssss", $this->Esperance, $this->TailleMoyenne, $this->PoidsMoyen, $this->DescriptionEspece, $this->TempsGestation, $this->Effectif, $this->TempMax, $this->TempMin, $this->PHMAX, $this->PHMin, $this->TxHumMax, $this->TxHumMin, $this->Protege, $this->Individuel, $this->IDZone, $this->Alim1, $this->Qte1, $this->Alim2, $this->Qte2, $this->Alim3, $this->Qte3, $this->NomEspece);
        $stmt->execute();
    }
}