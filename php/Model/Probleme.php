<?php
class Probleme {
    private $IDProbleme;
    private $IDAnimal;
    private $IDGroupe;
    private $IDEmploye;
    private $DescriptionPB;
    private $DatePB;
    private $SoinsRealiseAvantIntervention;
    private $StatutProbleme;

    public function __construct($IDProbleme, $IDAnimal, $IDGroupe, $IDEmploye, $DescriptionPB, $DatePB, $SoinsRealiseAvantIntervention, $StatutProbleme) {
        $this->IDProbleme = $IDProbleme;
        $this->IDAnimal = $IDAnimal;
        $this->IDGroupe = $IDGroupe;
        $this->IDEmploye = $IDEmploye;
        $this->DescriptionPB = $DescriptionPB;
        $this->DatePB = $DatePB;
        $this->SoinsRealiseAvantIntervention = $SoinsRealiseAvantIntervention;
        $this->StatutProbleme = $StatutProbleme;
    }

    public function getIDProbleme() {
        return $this->IDProbleme;
    }

    public function getIDAnimal() {
        return $this->IDAnimal;
    }

    public function getIDGroupe() {
        return $this->IDGroupe;
    }

    public function getIDEmploye() {
        return $this->IDEmploye;
    }

    public function getDescriptionPB() {
        return $this->DescriptionPB;
    }

    public function getDatePB() {
        return $this->DatePB;
    }

    public function getSoinsRealiseAvantIntervention() {
        return $this->SoinsRealiseAvantIntervention;
    }

    public function getStatutProbleme() {
        return $this->StatutProbleme;
    }

    public function setIDProbleme($IDProbleme) {
        $this->IDProbleme = $IDProbleme;
    }

    public function setIDAnimal($IDAnimal) {
        $this->IDAnimal = $IDAnimal;
    }

    public function setIDGroupe($IDGroupe) {
        $this->IDGroupe = $IDGroupe;
    }

    public function setIDEmploye($IDEmploye) {
        $this->IDEmploye = $IDEmploye;
    }

    public function setDescriptionPB($DescriptionPB) {
        $this->DescriptionPB = $DescriptionPB;
    }

    public function setDatePB($DatePB) {
        $this->DatePB = $DatePB;
    }

    public function setSoinsRealiseAvantIntervention($SoinsRealiseAvantIntervention) {
        $this->SoinsRealiseAvantIntervention = $SoinsRealiseAvantIntervention;
    }

    public function setStatutProblene($StatutProbleme) {
        $this->StatutProbleme = $StatutProbleme;
    }

    public function ajoutDBAnimal(){
        $conn = DB::connexionDB();
        $sql = "INSERT INTO PROBLEME (IDAnimal, IDEmploye, DescriptionPB, DatePB, SoinsRealiseAvantIntervention, StatutProbleme) VALUES (:IDAnimal, :IDEmploye, :DescriptionPB, :DatePB, :SoinsRealiseAvantIntervention, :StatutProbleme)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':IDAnimal', $this->IDAnimal);
        $stmt->bindParam(':IDEmploye', $this->IDEmploye);
        $stmt->bindParam(':DescriptionPB', $this->DescriptionPB);
        $stmt->bindParam(':DatePB', $this->DatePB);
        $stmt->bindParam(':SoinsRealiseAvantIntervention', $this->SoinsRealiseAvantIntervention);
        $stmt->bindParam(':StatutProbleme', $this->StatutProbleme);
        $stmt->execute();
    }

    public function ajoutDBGroupe(){
        $conn = DB::connexionDB();
        $sql = "INSERT INTO PROBLEME (IDGroupe, IDEmploye, DescriptionPB, DatePB, SoinsRealiseAvantIntervention, StatutProbleme) VALUES (:IDGroupe, :IDEmploye, :DescriptionPB, :DatePB, :SoinsRealiseAvantIntervention, :StatutProbleme)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':IDGroupe', $this->IDGroupe);
        $stmt->bindParam(':IDEmploye', $this->IDEmploye);
        $stmt->bindParam(':DescriptionPB', $this->DescriptionPB);
        $stmt->bindParam(':DatePB', $this->DatePB);
        $stmt->bindParam(':SoinsRealiseAvantIntervention', $this->SoinsRealiseAvantIntervention);
        $stmt->bindParam(':StatutProbleme', $this->StatutProbleme);
        $stmt->execute();
    }
    
}