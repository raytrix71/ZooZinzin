<?php
class BilletSpectacle
{
    private $IDBilletSpectacle;
    private $IDReservation;
    private $IDSpectacle;
    private $ValidationSpectacle;

    public function __construct($IDBilletSpectacle,$IDReservation, $IDSpectacle, $ValidationSpectacle)
    {   $this->IDBilletSpectacle = $IDBilletSpectacle;
        $this->IDReservation = $IDReservation;
        $this->IDSpectacle = $IDSpectacle;
        $this->ValidationSpectacle = $ValidationSpectacle;
    }

    // Getters and setters for the properties

    

    public function getIDBilletSpectacle()
    {
        return $this->IDBilletSpectacle;
    }

    public function getIDReservation()
    {
        return $this->IDReservation;
    }

    public function setIDReservation($IDReservation)
    {
        $this->IDReservation = $IDReservation;
    }

    public function getIDSpectacle()
    {
        return $this->IDSpectacle;
    }

    public function setIDSpectacle($IDSpectacle)
    {
        $this->IDSpectacle = $IDSpectacle;
    }

    public function getValidationSpectacle()
    {
        return $this->ValidationSpectacle;
    }

    public function setValidationSpectacle($ValidationSpectacle)
    {
        $this->ValidationSpectacle = $ValidationSpectacle;
    }

    public function ajoutDB(){
        $conn=DB::connexionDB();
        $sql="INSERT INTO BILLETSPECTACLE (IDReservation,IDSpectacle,ValidationSpectacle) VALUES ('$this->IDReservation','$this->IDSpectacle','$this->ValidationSpectacle')";
        $req=$conn->prepare($sql);
        $req->execute();
    }

}


?>
