<?php
class Parcelle
{
    private $IDParcelle;
    private $IDZone;
    private $Dimension;

    public function __construct($IDParcelle,$IDZone,$Dimension)
    {
        $this->IDParcelle=$IDParcelle;
        $this->IDZone=$IDZone;
        $this->Dimension=$Dimension;
    }

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
        $sql='SELECT * FROM PARCELLE';
        $query=$bdd->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();
        $listefinale = []; 
        foreach($result as $row){
            $p=new Parcelle($row['IDParcelle'],$row['IDZone'],$row['Dimension']);
            array_push($listefinale,$p);
        }
        return $listefinale;

    }

    public function ajoutParcelle(){
        $bdd=DB::connexionDB();
        $sql='INSERT INTO PARCELLE(IDParcelle,IDZone,Dimension) VALUES(:IDParcelle,:IDZone,:Dimension)';
        $query=$bdd->prepare($sql);
        $query->execute(array(
            'IDParcelle'=>$this->IDParcelle,
            'IDZone'=>$this->IDZone,
            'Dimension'=>$this->Dimension
        ));
    }
    
    

}
?>