<?php

include ('DB.php');

class Animal{

    static $listeAnimal=array();

    var $idAnimal;
    var $nomEspece;
    var $nomAnimal;
    var $dateNaissance;
    var $poids;
    var $taille;
    var $sexe;
    var $description;
    var $idParcelle;
    
    function __construct($nomEspece,$nomAnimal,$dateNaissance,$poids,$taille,$sexe,$description,$idParcelle){
        
        $this->nomEspece = $nomEspece;
        $this->nomAnimal = $nomAnimal;
        $this->dateNaissance = $dateNaissance;
        $this->poids = $poids;
        $this->taille = $taille;
        $this->sexe = $sexe;
        $this->description = $description;
        $this->idParcelle = $idParcelle;
    }



static function fetchListAnimalFromDatabase(){
    // Code goes here
    $bdd = DB::connexionDB();
    $sql = "SELECT * FROM ANIMAL";
    $connexion = $bdd->query($sql);
    $resultat = $connexion->fetchAll();

    foreach($resultat as $row){

    $animal= new Animal($row['IDAnimal'],$row['NomEspece'],$row['NomAnimal'],$row['DateNaissance'],$row['Poids'],$row['Taille'],$row['Sexe'],$row['Description'],$row['IDParcelle']);
    array_push(self::$listeAnimal, $animal);
    }
    return self::$listeAnimal;
}

function ajoutAnimalDB(){
    $bdd = DB::connexionDB();
    $sql = "INSERT INTO ANIMAL (IDParcelle, NomEspece, NomAnimal, DateNaissance, Poids, Taille, Sexe, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$this->idParcelle, $this->nomEspece, $this->nomAnimal, $this->dateNaissance, $this->poids, $this->taille, $this->sexe, $this->description]);
}

/* getters and setters */

function getNomEspece(){
    return $this->nomEspece;}

function getNomAnimal(){
    return $this->nomAnimal;}

function getDateNaissance(){
    return $this->dateNaissance;}

function getPoids(){
    return $this->poids;}

function getTaille(){
    return $this->taille;}

function getSexe(){
    return $this->sexe;}

function getDescription(){
    return $this->description;}

function getIdParcelle(){
    return $this->idParcelle;}

function setNomEspece($nomEspece){
    $this->nomEspece = $nomEspece;}

function setNomAnimal($nomAnimal){
    $this->nomAnimal = $nomAnimal;}

function setDateNaissance($dateNaissance){
    $this->dateNaissance = $dateNaissance;}

function setPoids($poids){
    $this->poids = $poids;}

function setTaille($taille){
    $this->taille = $taille;}

function setSexe($sexe){
    $this->sexe = $sexe;}

function setDescription($description){
    $this->description = $description;
}

function setIdParcelle($idParcelle){
    $this->idParcelle = $idParcelle;}

function __toString(){
    return $this->idAnimal;
}

}
