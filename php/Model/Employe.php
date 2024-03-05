<?php
include ('../Fonction_PHP/connexionDB.php');
class Employe{

    static $listeEmploye=array();
    private $idEmploye;
    private $nomEmploye;
    private $prenomEmploye;
    private $mailEmploye;
    private $mdpEmploye;
    private $roleEmploye;
    private $adresse;
    private $CP;
    private $tel;
    private $idzone;

    function __construct($idEmploye,$prenomEmploye,$nomEmploye,$adresse,$CP,$mailEmploye,$mdpEmploye,$tel,$idzone,$roleEmploye){
        $this->idEmploye = $idEmploye;
        $this->nomEmploye = $nomEmploye;
        $this->prenomEmploye = $prenomEmploye;
        $this->mailEmploye = $mailEmploye;
        $this->mdpEmploye = $mdpEmploye;
        $this->roleEmploye = $roleEmploye;
        $this->adresse = $adresse;
        $this->CP = $CP;
        $this->tel = $tel;
        $this->idzone = $idzone;

    }


    static function getListeEmploye(){
        if(!isset($listeEmploye)){
            self::queryEmploye();
            }
        return self::$listeEmploye;
        
    }

    static function queryEmploye(){
        // Code goes here
        $bdd = connexionDB();
        $sql = 'SELECT * FROM EMPLOYE';
        $connexion = $bdd->query($sql);
        $resultat = $connexion->fetchAll();
        foreach($resultat as $row){
            $employe = new Employe($row['IDEmploye'],$row['PrenomEmploye'],$row['NomEmploye'],$row['AdresseEmploye'],$row['CPEmploye'],$row['MailEmploye'],$row['MDPEmploye'],$row['TelEmploye'],$row['IDZone'],$row['Role']);
            array_push(self::$listeEmploye,$employe);
        }

    }

    function getEmailEmploye(){
        return $this->mailEmploye;
    }

    function getMdpEmploye(){
        return $this->mdpEmploye;
    }

    function getPrenomEmploye(){
        return $this->prenomEmploye;
    }





}

?>