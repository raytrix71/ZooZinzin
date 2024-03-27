<?php

class Client
{
    private $idClient;
    private $prenomClient;
    private $nomClient;
    private $emailClient;
    private $adresseClient;
    private $cpClient;
    private $telClient;
    private $mdpClient;

    // Constructor
    public function __construct($idClient, $prenomClient, $nomClient, $emailClient, $adresseClient, $cpClient, $telClient, $mdpClient)
    {
        $this->idClient = $idClient;
        $this->prenomClient = $prenomClient;
        $this->nomClient = $nomClient;
        $this->emailClient = $emailClient;
        $this->adresseClient = $adresseClient;
        $this->cpClient = $cpClient;
        $this->telClient = $telClient;
        $this->mdpClient = $mdpClient;
    }

    // Getters
    public function getIdClient()
    {
        return $this->idClient;
    }

    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    public function getNomClient()
    {
        return $this->nomClient;
    }

    public function getEmailClient()
    {
        return $this->emailClient;
    }

    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    public function getCpClient()
    {
        return $this->cpClient;
    }

    public function getTelClient()
    {
        return $this->telClient;
    }

    public function getMdpClient()
    {
        return $this->mdpClient;
    }

    // Setters
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;
    }

    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
    }

    public function setEmailClient($emailClient)
    {
        $this->emailClient = $emailClient;
    }

    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;
    }

    public function setCpClient($cpClient)
    {
        $this->cpClient = $cpClient;
    }

    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;
    }

    public function setMdpClient($mdpClient)
    {
        $this->mdpClient = $mdpClient;
    }

public static function getListeClient(){
    $liste = array();
    $conn=DB::connexionDB();
    $sql = "SELECT * FROM CLIENT";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach($result as $row){
        $client = new Client($row['IDClient'],$row['PrenomClient'],$row['NomClient'],$row['EmailClient'],$row['AdresseClient'],$row['CPClient'],$row['TelClient'],$row['MDPClient']);
        array_push($liste,$client);

    }
    return $liste;
}

public function ajoutDB(){
    $conn = DB::connexionDB();
    $sql = "INSERT INTO CLIENT (PrenomClient, NomClient, EmailClient, AdresseClient, CPClient, TelClient, MDPClient) VALUES (:PrenomClient, :NomClient, :EmailClient, :AdresseClient, :CPClient, :TelClient, :MDPClient)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':PrenomClient', $this->prenomClient);
    $stmt->bindParam(':NomClient', $this->nomClient);
    $stmt->bindParam(':EmailClient', $this->emailClient);
    $stmt->bindParam(':AdresseClient', $this->adresseClient);
    $stmt->bindParam(':CPClient', $this->cpClient);
    $stmt->bindParam(':TelClient', $this->telClient);
    $stmt->bindParam(':MDPClient', $this->mdpClient);
    $stmt->execute();

}
}///fin class
?>