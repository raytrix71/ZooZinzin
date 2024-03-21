<?php

class TypeActivite
{
    private $IDTypeActivite;
    private $NomActivite;
    private $LieuActivite;
    private $DescriptionActivite;
    private $TarifActivite;
    private $CapaciteMaxActivite;

    public function __construct($IDTypeActivite, $NomActivite, $LieuActivite, $DescriptionActivite, $TarifActivite, $CapaciteMaxActivite)
    {
        $this->IDTypeActivite = $IDTypeActivite;
        $this->NomActivite = $NomActivite;
        $this->LieuActivite = $LieuActivite;
        $this->DescriptionActivite = $DescriptionActivite;
        $this->TarifActivite = $TarifActivite;
        $this->CapaciteMaxActivite = $CapaciteMaxActivite;
    }

    // Getters and Setters

    public function getIDTypeActivite()
    {
        return $this->IDTypeActivite;
    }

    public function setIDTypeActivite($IDTypeActivite)
    {
        $this->IDTypeActivite = $IDTypeActivite;
    }

    public function getNomActivite()
    {
        return $this->NomActivite;
    }

    public function setNomActivite($NomActivite)
    {
        $this->NomActivite = $NomActivite;
    }

    public function getLieuActivite()
    {
        return $this->LieuActivite;
    }

    public function setLieuActivite($LieuActivite)
    {
        $this->LieuActivite = $LieuActivite;
    }

    public function getDescriptionActivite()
    {
        return $this->DescriptionActivite;
    }

    public function setDescriptionActivite($DescriptionActivite)
    {
        $this->DescriptionActivite = $DescriptionActivite;
    }

    public function getTarifActivite()
    {
        return $this->TarifActivite;
    }

    public function setTarifActivite($TarifActivite)
    {
        $this->TarifActivite = $TarifActivite;
    }

    public function getCapaciteMaxActivite()
    {
        return $this->CapaciteMaxActivite;
    }

    public function setCapaciteMaxActivite($CapaciteMaxActivite)
    {
        $this->CapaciteMaxActivite = $CapaciteMaxActivite;
    }


    public static function fetchListTypeActiviteFromDatabase()
    {
        $connexion = DB::connexionDB();
        $SQL = "SELECT * FROM TYPEACTIVITE";
        $requete = $connexion->prepare($SQL);
        $requete->execute();
        $resultat = $requete->fetchAll();
        $listeObjetTypeActivite = array();
        foreach ($resultat as $row) {
            $activite = new TypeActivite($row['IDTypeActivite'], $row['NomActivite'], $row['LieuActivite'], $row['DescriptionActivite'], $row['TarifActivite'], $row['CapaciteMaxActivite']);
            array_push($listeObjetTypeActivite, $activite);
        }

        return $listeObjetTypeActivite;
    }
}