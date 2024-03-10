<?php 
include ('../Fonction_PHP/connexionDB.php');

class groupe {
    private $IDGroupe;
    private $IDParcelle;
    private $NomEspece;
    private $EffectifGroupe;
    private $PoidsTotalGroupe;
    private $CommentaireGroupe;

    public function __construct($IDParcelle, $NomEspece, $EffectifGroupe, $PoidsTotalGroupe, $CommentaireGroupe){
        $this->IDParcelle = $IDParcelle;
        $this->NomEspece = $NomEspece;
        $this->EffectifGroupe = $EffectifGroupe;
        $this->PoidsTotalGroupe = $PoidsTotalGroupe;
        $this->CommentaireGroupe = $CommentaireGroupe;
    }

    public function getIDGroupe(){
        return $this->IDGroupe;
    }

    public function getIDParcelle(){
        return $this->IDParcelle;
    }

    public function getNomEspece(){
        return $this->NomEspece;
    }

    public function getEffectifGroupe(){
        return $this->EffectifGroupe;
    }

    public function getPoidsTotalGroupe(){
        return $this->PoidsTotalGroupe;
    }

    public function getCommentaireGroupe(){
        return $this->CommentaireGroupe;
    }

    public function setIDGroupe($IDGroupe){
        $this->IDGroupe = $IDGroupe;
    }

    public function setIDParcelle($IDParcelle){
        $this->IDParcelle = $IDParcelle;
    }
    public function setNomEspece($NomEspece){
        $this->NomEspece = $NomEspece;
    }

    public function setEffectifGroupe($EffectifGroupe){
        $this->EffectifGroupe = $EffectifGroupe;
    }

    public function setPoidsTotalGroupe($PoidsTotalGroupe){
        $this->PoidsTotalGroupe = $PoidsTotalGroupe;
    }

    public function setCommentaireGroupe($CommentaireGroupe){
        $this->CommentaireGroupe = $CommentaireGroupe;
    }

    public function __toString(){
        return $this->IDGroupe;
    }
    
    public static function fetchListGroupeFromDatabase(){
        $db = connexionDB();
        $query = "SELECT * FROM GROUPE";
        $result = $db->query($query);
        $listGroupe = [];
        foreach($result as $row){
            $groupe = new groupe($row['IDGroupe'], $row['IDParcelle'], $row['NomEspece'], $row['EffectifGroupe'], $row['PoidsTotalGroupe'], $row['CommentaireGroupe']);
            array_push($listGroupe,$groupe);
        }
        return $listGroupe;
    
    }
function ajoutGroupeDB(){
    $db = connexionDB();
    $query = "INSERT INTO GROUPE (IDParcelle, NomEspece, EffectifGroupe, PoidsTotalGroupe, CommentaireGroupe) VALUES (:IDParcelle, :NomEspece, :EffectifGroupe, :PoidsTotalGroupe, :CommentaireGroupe)";
    $result = $db->prepare($query);
    $result->execute([
        'IDParcelle' => $this->IDParcelle,
        'NomEspece' => $this->NomEspece,
        'EffectifGroupe' => $this->EffectifGroupe,
        'PoidsTotalGroupe' => $this->PoidsTotalGroupe,
        'CommentaireGroupe' => $this->CommentaireGroupe,
    ]);
}



}


    
   