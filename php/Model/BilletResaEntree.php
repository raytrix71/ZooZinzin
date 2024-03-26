<?php
class BilletResaEntree{
    private $compte;
    private $IDTypeEntree;
    private $catTarif;
    private $dateValidite;

    function __construct($compte,$IDTypeEntree,$catTarif,$dateValidite){
        $this->compte = $compte;
        $this->IDTypeEntree = $IDTypeEntree;
        $this->catTarif = $catTarif;
        $this->dateValidite = $dateValidite;
        return $this;
    }

    public function getCompte() {
        return $this->compte;
    }

    public function setCompte($compte) {
        $this->compte = $compte;
    }

    public function getIDTypeEntree() {
        return $this->IDTypeEntree;
    }

    public function setIDTypeEntree($IDTypeEntree) {
        $this->IDTypeEntree = $IDTypeEntree;
    }

    public function getCatTarif() {
        return $this->catTarif;
    }

    public function setCatTarif($catTarif) {
        $this->catTarif = $catTarif;
    }

    public function getDateValidite() {
        return $this->dateValidite;
    }

    public function setDateValidite($dateValidite) {
        $this->dateValidite = $dateValidite;
    }


    public static function getBilletEntreeResa($numResa){
        $bdd=DB::connexionDB();
        $sql = "SELECT COUNT(*) as compte,BILLETENTREE.IDTypeEntree,CategorieTarifEntree,DateValidatiteEntree FROM BILLETENTREE
        INNER JOIN TYPEBILLETENTREE ON BILLETENTREE.IDTypeEntree = TYPEBILLETENTREE.IDTypeEntree
        WHERE IDReservation=? GROUP BY IDTypeEntree,CategorieTarifEntree,DateValidatiteEntree;";
        $connexion = $bdd->prepare($sql);
        $connexion->execute(array($numResa));
        $resultat = $connexion->fetchAll();
        $listeBillet = array();
        foreach($resultat as $row){
            $billet = new BilletResaEntree($row['compte'],$row['IDTypeEntree'],$row['CategorieTarifEntree'],$row['DateValidatiteEntree']);
            array_push($listeBillet,$billet);
        }
        return $listeBillet;

    
    }

    public static function getDateResaBillet($numResa){
        $bdd=DB::connexionDB();
        $sql = "SELECT DISTINCT DateReservation FROM RESERVATION WHERE IDReservation=?";
        $connexion = $bdd->prepare($sql);
        $connexion->execute(array($numResa));
        $resultat = $connexion->fetch();
        return $resultat['DateReservation'];
    }




}
?>