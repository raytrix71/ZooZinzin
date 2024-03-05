<?php
include ('../Fonction_PHP/connexionDB.php');
class Aliment{
    
    static $listeAlim=array();
    private $idAliment;
    private $nomAliment;
    private $qStock;
    private $seuil;

    function __construct($idAliment,$nomAliment,$qStock,$seuil){
        $this->idAliment = $idAliment;
        $this->nomAliment = $nomAliment;
        $this->qStock = $qStock;
        $this->seuil = $seuil;
        return $this;
        
    }

    static function getListeAlim(){
        if(!isset($listeAlim)){
            self::queryAliment();
            }
        return self::$listeAlim;
        
    }


    static function queryAliment(){
        // Code goes here
    
        $bdd = connexionDB();
        $sql = 'SELECT * FROM ALIMENT';
        $connexion = $bdd->query($sql);
        $resultat = $connexion->fetchAll();
        foreach($resultat as $row){
            $alim = new Aliment($row['IDAliment'],$row['NomAliment'],$row['QteReelle'],$row['QteMoyenneNecessaire']);
            array_push(self::$listeAlim,$alim);
        }

    }

    function ajouterAliment($nomAliment,$qStock,$seuil){
        $bdd = connexionDB();
        $sql = "INSERT INTO ALIMENT (NomAliment, QuantiteStock, Seuil) VALUES ('$nomAliment', '$qStock', '$seuil')";
        $bdd->exec($sql);
    }

    function getIDAliment(){
        return $this->idAliment;
    }

    function getNomAliment(){
        return $this->nomAliment;
    }

    function getQStock(){
        return $this->qStock;
    }

    function getSeuil(){
        return $this->seuil;
    }

    function setIDAliment($idAliment){
        $this->idAliment = $idAliment;
    }

    function setNomAliment($nomAliment){
        $this->nomAliment = $nomAliment;
    }

    function setQStock($qStock){
        $this->qStock = $qStock;
    }

    function setSeuil($seuil){
        $this->seuil = $seuil;
    }

    

}

var_dump(Aliment::getListeAlim());


?>