<?php

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

    public static function getLastReservationForClient($IDClient){
        $db = DB::connexionDB();

        // Perform the query to retrieve the last reservation for the given IDClient
        $query = "SELECT * FROM RESERVATION WHERE IDClient = :IDClient ORDER BY DateReservation DESC LIMIT 1";
        $result = $db->prepare($query);
        $result->bindParam(':IDClient', $IDClient);
        $result->execute(); // Execute the prepared statement
        $row = $result->fetch(); // Fetch the first row from the result set

        if ($row) {
            $reservation = new Reservation($row['IDReservation'], $row['IDClient'], $row['IDEmploye'], $row['DateReservation']);
            return $reservation; // Return the Reservation object
        } else {
            return null; // Return null if no reservation found
        }
    }


    public static function getLastReservationForEmploye($IDEmploye){
        $db = DB::connexionDB();

        // Perform the query to retrieve the last reservation for the given IDClient
        $query = "SELECT * FROM RESERVATION WHERE IDEmploye = :IDEmploye ORDER BY DateReservation DESC LIMIT 1";
        $result = $db->prepare($query);
        $result->bindParam(':IDEmploye', $IDEmploye);
        $result->execute(); // Execute the prepared statement
        $row = $result->fetch(); // Fetch the first row from the result set

        if ($row) {
            $reservation = new Reservation($row['IDReservation'], $row['IDClient'], $row['IDEmploye'], $row['DateReservation']);
            return $reservation; // Return the Reservation object
        } else {
            return null; // Return null if no reservation found
        }
    }
    
    public function saveReservation()
    {
        $db = DB::connexionDB();

        // Prepare the query to insert a new reservation
        $query = "INSERT INTO RESERVATION (IDClient, IDEmploye) VALUES (:IDClient, :IDEmploye)";
        $result = $db->prepare($query);
        $result->bindParam(':IDClient', $this->IDClient);
        $result->bindParam(':IDEmploye', $this->IDEmploye);
        $result->execute(); // Execute the prepared statement

       
    }
}    
    
