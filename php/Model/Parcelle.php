<?php
include ('connexionDB.php');
class Parcelle
{
    private $IDParcelle;
    private $IDZone;
    private $Dimension;

    public function getIDParcelle()
    {
        return $this->IDParcelle;
    }

    public function setIDParcelle($IDParcelle)
    {
        $this->IDParcelle = $IDParcelle;
    }

    public function getIDZone()
    {
        return $this->IDZone;
    }

    public function setIDZone($IDZone)
    {
        $this->IDZone = $IDZone;
    }

    public function getDimension()
    {
        return $this->Dimension;
    }

    public function setDimension($Dimension)
    {
        $this->Dimension = $Dimension;
    }

    public static function fetchParcelleFromDB(){
        $bdd=DB::connexionDB();
        $sql='SELECT * FROM Parcelle';
        $query=$bdd->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();
        foreach($result as $row){
            $p=new Parcelle($row['IDParcelle'],$row['IDZone'],$row['Dimension']);
            array_push($listefinale,$p);
        }
        return $listefinale;

    }

    public function ajoutParcelle(){
        $bdd=DB::connexionDB();
        $sql='INSERT INTO Parcelle(IDParcelle,IDZone,Dimension) VALUES(:IDParcelle,:IDZone,:Dimension)';
        $query=$bdd->prepare($sql);
        $query->execute(array(
            'IDParcelle'=>$this->IDParcelle,
            'IDZone'=>$this->IDZone,
            'Dimension'=>$this->Dimension
        ));
    }
    
    

}
?>