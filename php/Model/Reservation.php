<?php
include 'DB.php';
class Reservation
{
    private $IDReservation;
    private $IDClient;
    private $IDEmploye;
    private $DateReservation;

    public function __construct($IDReservation, $IDClient, $IDEmploye, $DateReservation)
    {
        $this->IDReservation = $IDReservation;
        $this->IDClient = $IDClient;
        $this->IDEmploye = $IDEmploye;
        $this->DateReservation = $DateReservation;
    }

    // Getters and setters

    public function getIDReservation()
    {
        return $this->IDReservation;
    }

    public function setIDReservation($IDReservation)
    {
        $this->IDReservation = $IDReservation;
    }

    public function getIDClient()
    {
        return $this->IDClient;
    }

    public function setIDClient($IDClient)
    {
        $this->IDClient = $IDClient;
    }

    public function getIDEmploye()
    {
        return $this->IDEmploye;
    }

    public function setIDEmploye($IDEmploye)
    {
        $this->IDEmploye = $IDEmploye;
    }

    public function getDateReservation()
    {
        return $this->DateReservation;
    }

    public function setDateReservation($DateReservation)
    {
        $this->DateReservation = $DateReservation;
    }

    public static function getAllReservations(){
        $db = DB::connexionDB();

        // Perform the query to retrieve all reservations
        $query = "SELECT * FROM RESERVATION";
        $result = $db->prepare($query);
        $result->execute(); // Execute the prepared statement
        $listeresa = $result->fetchAll(); // Fetch all rows from the result set
        $listeobjetresa = array();
        
        foreach ($listeresa as $row) {
            $reservation = new Reservation($row['IDReservation'], $row['IDClient'], $row['IDEmploye'], $row['DateReservation']);
            array_push($listeobjetresa, $reservation); 
        }

        return $listeobjetresa; // Return the array of Reservation objects
    }
    
}    
    
