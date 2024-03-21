<?php

class Activite
{
    private $IDActivite;
    private $IDTypeActivite;
    private $DateActivite;
    private $HeureActivite;

    public function __construct($IDActivite,$IDTypeActivite, $DateActivite, $HeureActivite)
    {   
        $this->IDActivite = $IDActivite;
        $this->IDTypeActivite = $IDTypeActivite;
        $this->DateActivite = $DateActivite;
        $this->HeureActivite = $HeureActivite;
    }

    // Getters and Setters

    public function getIDActivite()
    {
        return $this->IDActivite;
    }

    public function setIDActivite($IDActivite)
    {
        $this->IDActivite = $IDActivite;
    }

    public function getIDTypeActivite()
    {
        return $this->IDTypeActivite;
    }

    public function setIDTypeActivite($IDTypeActivite)
    {
        $this->IDTypeActivite = $IDTypeActivite;
    }

    public function getDateActivite()
    {
        return $this->DateActivite;
    }

    public function setDateActivite($DateActivite)
    {
        $this->DateActivite = $DateActivite;
    }

    public function getHeureActivite()
    {
        return $this->HeureActivite;
    }

    public function setHeureActivite($HeureActivite)
    {
        $this->HeureActivite = $HeureActivite;
    }

    
    public static function fetchListActivite(){
        $connexion = DB::connexionDB();
        $SQL = "SELECT * FROM ACTIVITE";
        $requete = $connexion->prepare($SQL);
        $requete->execute();
        $resultat = $requete->fetchAll();
        $listeObjetActivite = array();
        foreach ($resultat as $row) {
            $activite = new Activite($row['IDActivite'],$row['IDTypeActivite'], $row['DateActivite'], $row['HeureActivite']);
            array_push($listeObjetActivite, $activite);
        }

        return $listeObjetActivite;
    
    }


}

// SQL query to create the ACTIVITE table
$createTableQuery = "
CREATE TABLE ACTIVITE (
    IDActivite     SMALLINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    IDTypeActivite SMALLINT UNSIGNED NULL,
    DateActivite   DATE NULL,
    HeureActivite  TIME NULL,
    CONSTRAINT ACTIVITE_TYPEACTIVITE_IDTypeActivite_fk
        FOREIGN KEY (IDTypeActivite) REFERENCES TYPEACTIVITE (IDTypeActivite)
);
";


?>