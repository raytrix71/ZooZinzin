<?php
class TourneeRepas
{
    private $IDRepas;
    private $IDAnimal;
    private $IDGroupe;
    private $ValidationRepas;
    private $DateRepas;
    private $QteDonnee;
    private $IDAliment;

    public function __construct($IDRepas, $IDAnimal, $IDGroupe, $ValidationRepas, $DateRepas, $QteDonnee, $IDAliment)
    {
        $this->IDRepas = $IDRepas;
        $this->IDAnimal = $IDAnimal;
        $this->IDGroupe = $IDGroupe;
        $this->ValidationRepas = $ValidationRepas;
        $this->DateRepas = $DateRepas;
        $this->QteDonnee = $QteDonnee;
        $this->IDAliment = $IDAliment;
    }

    public function getIDRepas()
    {
        return $this->IDRepas;
    }

    public function setIDRepas($IDRepas)
    {
        $this->IDRepas = $IDRepas;
    }

    public function getIDAnimal()
    {
        return $this->IDAnimal;
    }

    public function setIDAnimal($IDAnimal)
    {
        $this->IDAnimal = $IDAnimal;
    }

    public function getIDGroupe()
    {
        return $this->IDGroupe;
    }

    public function setIDGroupe($IDGroupe)
    {
        $this->IDGroupe = $IDGroupe;
    }

    public function getValidationRepas()
    {
        return $this->ValidationRepas;
    }

    public function setValidationRepas($ValidationRepas)
    {
        $this->ValidationRepas = $ValidationRepas;
    }

    public function getDateRepas()
    {
        return $this->DateRepas;
    }

    public function setDateRepas($DateRepas)
    {
        $this->DateRepas = $DateRepas;
    }

    public function getQteDonnee()
    {
        return $this->QteDonnee;
    }

    public function setQteDonnee($QteDonnee)
    {
        $this->QteDonnee = $QteDonnee;
    }

    public function getIDAliment()
    {
        return $this->IDAliment;
    }

    public function setIDAliment($IDAliment)
    {
        $this->IDAliment = $IDAliment;
    }

    public static function fetchlistRepasNow(){
        $conn=DB::connexionDB();
        $sql="SELECT * FROM TOURNEEREPAS WHERE DateRepas = CURDATE() AND ValidationRepas = 0";
        $query=$conn->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();
        foreach($result as $row){
            $listRepasNow[]=new TourneeRepas($row['IDRepas'],$row['IDAnimal'],$row['IDGroupe'],$row['ValidationRepas'],$row['DateRepas'],$row['QteDonnee'],$row['IDAliment']);
        }
        if (empty($listRepasNow)) {
            return null;
        }
        return $listRepasNow;
    }

    public function validerRepas(){
        $conn=DB::connexionDB();
        $sql="UPDATE TOURNEEREPAS SET ValidationRepas = 1 WHERE IDRepas = :IDRepas";
        $query=$conn->prepare($sql);
        $query->execute(array('IDRepas'=>$this->IDRepas));
    }
    

}///////fin class
?>