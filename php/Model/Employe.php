<?php
include ('../Fonction_PHP/connexionDB.php');
class Employe{

    static $listeEmploye=array();
    var $idEmploye;
    var $nomEmploye;
    var $prenomEmploye;
    var $mailEmploye;
    var $mdpEmploye;
    var $roleEmploye;
    var $adresse;
    var $CP;
    var $tel;
    var $idzone;

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

   /* function __construct($idEmploye,$prenomEmploye,$nomEmploye,$adresse,$CP,$mailEmploye,$mdpEmploye,$tel,$roleEmploye){
        $this->idEmploye = $idEmploye;
        $this->nomEmploye = $nomEmploye;
        $this->prenomEmploye = $prenomEmploye;
        $this->mailEmploye = $mailEmploye;
        $this->mdpEmploye = $mdpEmploye;
        $this->roleEmploye = $roleEmploye;
        $this->adresse = $adresse;
        $this->CP = $CP;
        $this->tel = $tel;
        $bdd = connexionDB();
        $sql = "INSERT INTO EMPLOYE (IDEmploye, PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, MDPEmploye, TelEmploye, Role) VALUES ('$idEmploye', '$prenomEmploye', '$nomEmploye', '$adresse', '$CP', '$mailEmploye', '$mdpEmploye', '$tel', '$roleEmploye')";
        $bdd->exec($sql);
    } */
    
        
    


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
            if($row['IDZone'] == NULL){
                $row['IDZone'] = 0;
            }
            $employe = new Employe($row['IDEmploye'],$row['PrenomEmploye'],$row['NomEmploye'],$row['AdresseEmploye'],$row['CPEmploye'],$row['MailEmploye'],$row['MDPEmploye'],$row['TelEmploye'],$row['IDZone'],$row['Role']);
            array_push(self::$listeEmploye,$employe);
        }

    }
    
    function ajoutEmployeDB(){
        $bdd = connexionDB();
        $sql = "INSERT INTO EMPLOYE (PrenomEmploye, NomEmploye, AdresseEmploye, CPEmploye, MailEmploye, MDPEmploye, TelEmploye,IDZone, Role ) VALUES ( '$this->prenomEmploye', '$this->nomEmploye', '$this->adresse', '$this->CP', '$this->mailEmploye', '$this->mdpEmploye', '$this->tel', '$this->roleEmploye' ,'$this->idzone')";
        $bdd->exec($sql);
    }

    function get_idEmploye(){
        return $this->idEmploye;
    }

    function get_nomEmploye(){
        return $this->nomEmploye;
    }

    function get_prenomEmploye(){
        return $this->prenomEmploye;
    }

    function get_mailEmploye(){
        return $this->mailEmploye;
    }

    function get_mdpEmploye(){
        return $this->mdpEmploye;
    }

    function get_roleEmploye(){
        return $this->roleEmploye;
    }

    function get_adresseEmploye(){
        return $this->adresse;
    }

    function get_CPEmploye(){
        return $this->CP;
    }

    function get_telEmploye(){
        return $this->tel;
    }

    function get_idzone(){
        return $this->idzone;
    }

    function set_idEmploye($idEmploye){
        $this->idEmploye = $idEmploye;
    }

    function set_nomEmploye($nomEmploye){
        $this->nomEmploye = $nomEmploye;
    }

    function set_prenomEmploye($prenomEmploye){
        $this->prenomEmploye = $prenomEmploye;
    }

    function set_mailEmploye($mailEmploye){
        $this->mailEmploye = $mailEmploye;
    }

    function set_mdpEmploye($mdpEmploye){
        $this->mdpEmploye = $mdpEmploye;
    }

    function set_roleEmploye($roleEmploye){
        $this->roleEmploye = $roleEmploye;
    }

    function set_adresseEmploye($adresse){
        $this->adresse = $adresse;
    }

    function set_CPEmploye($CP){
        $this->CP = $CP;
    }

    function set_telEmploye($tel){
        $this->tel = $tel;
    }

    function set_idzone($idzone){
        $this->idzone = $idzone;
    }

    function __toString(){
        return $this->idEmploye . " " . $this->nomEmploye . " " . $this->prenomEmploye . " " . $this->mailEmploye . " " . $this->mdpEmploye . " " . $this->roleEmploye . " " . $this->adresse . " " . $this->CP . " " . $this->tel . " " . $this->idzone;
    }

}
?>