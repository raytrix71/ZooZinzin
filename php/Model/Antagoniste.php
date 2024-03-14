<?php 
    include 'DB.php';
    class Antagoniste {
        private $idAntagoniste;
        private $nomEspecePredateur;
        private $nomEspeceProie;

        public function __construct($idAntagoniste, $nomEspecePredateur, $nomEspeceProie) {
            $this->idAntagoniste = $idAntagoniste;
            $this->nomEspecePredateur = $nomEspecePredateur;
            $this->nomEspeceProie = $nomEspeceProie;
        }

        public function getIdAntagoniste() {
            return $this->idAntagoniste;
        }

        public function getNomEspecePredateur() {
            return $this->nomEspecePredateur;
        }

        public function getNomEspeceProie() {
            return $this->nomEspeceProie;
        }

        public function setIdAntagoniste($idAntagoniste) {
            $this->idAntagoniste = $idAntagoniste;
        }

        public function setNomEspecePredateur($nomEspecePredateur) {
            $this->nomEspecePredateur = $nomEspecePredateur;
        }

        public function setNomEspeceProie($nomEspeceProie) {
            $this->nomEspeceProie = $nomEspeceProie;
        }

        public function ajoutDB(){
            $bdd = DB::connexionDB();
            $sql = "INSERT INTO ANTAGONISTE (NomEspecePredateur, NomEspeceProie) VALUES (:NomEspecePredateur, :NomEspeceProie)";
            $stmt = $bdd->prepare($sql);
            $stmt->bindParam(':NomEspecePredateur', $this->nomEspecePredateur);
            $stmt->bindParam(':NomEspeceProie', $this->nomEspeceProie);
            $stmt->execute();

        }

        
    }
