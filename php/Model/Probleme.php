<?php
class Probleme {
    private $IDProbleme;
    private $IDAnimal;
    private $IDGroupe;
    private $IDEmploye;
    private $DescriptionPB;
    private $DatePB;
    private $SoinsRealiseAvantIntervention;
    private $StatutProblene;

    public function __construct($IDProbleme, $IDAnimal, $IDGroupe, $IDEmploye, $DescriptionPB, $DatePB, $SoinsRealiseAvantIntervention, $StatutProblene) {
        $this->IDProbleme = $IDProbleme;
        $this->IDAnimal = $IDAnimal;
        $this->IDGroupe = $IDGroupe;
        $this->IDEmploye = $IDEmploye;
        $this->DescriptionPB = $DescriptionPB;
        $this->DatePB = $DatePB;
        $this->SoinsRealiseAvantIntervention = $SoinsRealiseAvantIntervention;
        $this->StatutProblene = $StatutProblene;
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

    public function getStatutProblene() {
        return $this->StatutProblene;
    }

}