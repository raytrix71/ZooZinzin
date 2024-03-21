<?php
class BilletActivite
{
    private $IDBilletActivite;
    private $IDReservation;
    private $IDActivite;
    private $ValidationActivite;

    public function __construct($IDBilletActivite, $IDReservation, $IDActivite, $ValidationActivite)
    {
        $this->IDBilletActivite = $IDBilletActivite;
        $this->IDReservation = $IDReservation;
        $this->IDActivite = $IDActivite;
        $this->ValidationActivite = $ValidationActivite;
    }

    public function getIDBilletActivite()
    {
        return $this->IDBilletActivite;
    }

    public function setIDBilletActivite($IDBilletActivite)
    {
        $this->IDBilletActivite = $IDBilletActivite;
    }

    public function getIDReservation()
    {
        return $this->IDReservation;
    }

    public function setIDReservation($IDReservation)
    {
        $this->IDReservation = $IDReservation;
    }

    public function getIDActivite()
    {
        return $this->IDActivite;
    }

    public function setIDActivite($IDActivite)
    {
        $this->IDActivite = $IDActivite;
    }

    public function getValidationActivite()
    {
        return $this->ValidationActivite;
    }

    public function setValidationActivite($ValidationActivite)
    {
        $this->ValidationActivite = $ValidationActivite;
    }

    public function ajoutDB(){
        $conn=DB::connexionDB();
        $sql="INSERT INTO BILLETACTIVITE (IDReservation,IDActivite,ValidationActivite) VALUES ('$this->IDReservation','$this->IDActivite','$this->ValidationActivite')";
        $req=$conn->prepare($sql);
        $req->execute();
    }

}

?>