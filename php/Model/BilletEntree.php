<?php

class BilletEntree
{
    private $IDBilletEntree;
    private $IDReservation;
    private $DateValidatiteEntree;
    private $ValidationEntree;
    private $IDTypeEntree;

    // Constructor, getters and setters here...
    // Constructor
    public function __construct($IDBilletEntree, $IDReservation, $DateValidatiteEntree, $ValidationEntree, $IDTypeEntree)
    {
        $this->IDBilletEntree = $IDBilletEntree;
        $this->IDReservation = $IDReservation;
        $this->DateValidatiteEntree = $DateValidatiteEntree;
        $this->ValidationEntree = $ValidationEntree;
        $this->IDTypeEntree = $IDTypeEntree;
    }

    // Getters
    public function getIDBilletEntree()
    {
        return $this->IDBilletEntree;
    }

    public function getIDReservation()
    {
        return $this->IDReservation;
    }

    public function getDateValidatiteEntree()
    {
        return $this->DateValidatiteEntree;
    }

    public function getValidationEntree()
    {
        return $this->ValidationEntree;
    }

    public function getIDTypeEntree()
    {
        return $this->IDTypeEntree;
    }

    // Setters
    public function setIDBilletEntree($IDBilletEntree)
    {
        $this->IDBilletEntree = $IDBilletEntree;
    }

    public function setIDReservation($IDReservation)
    {
        $this->IDReservation = $IDReservation;
    }

    public function setDateValidatiteEntree($DateValidatiteEntree)
    {
        $this->DateValidatiteEntree = $DateValidatiteEntree;
    }

    public function setValidationEntree($ValidationEntree)
    {
        $this->ValidationEntree = $ValidationEntree;
    }

    public function setIDTypeEntree($IDTypeEntree)
    {
        $this->IDTypeEntree = $IDTypeEntree;
    }

    //Methods

    public static function getAllBilletsEntree()
    {
        $db = DB::connexionDB();
        $billetsEntree = $db->query('SELECT * FROM BilletEntree');
        while ($row = $billetsEntree->fetchAll(PDO::FETCH_ASSOC)) {
            $billetEntree = new BilletEntree($row['IDBilletEntree'], $row['IDReservation'], $row['DateValidatiteEntree'], $row['ValidationEntree'], $row['IDTypeEntree']);
            array_push($result, $billetEntree);
        }
        
        return $result;
    }


    
    public function addToDB()
    {
        $db = DB::connexionDB();
        $stmt = $db->prepare('INSERT INTO BILLETENTREE (IDReservation, DateValidatiteEntree, ValidationEntree, IDTypeEntree) VALUES (?, ?, ?, ?)');
        $stmt->execute([$this->IDReservation, $this->DateValidatiteEntree, $this->ValidationEntree, $this->IDTypeEntree]);
    }

    public function updateInDB()
    {
        $db = DB::connexionDB();
        $stmt = $db->prepare('UPDATE BILLETENTREE SET IDReservation = ?, DateValidatiteEntree = ?, ValidationEntree = ?, IDTypeEntree = ? WHERE IDBilletEntree = ?');
        $stmt->execute([$this->IDReservation, $this->DateValidatiteEntree, $this->ValidationEntree, $this->IDTypeEntree, $this->IDBilletEntree]);
    }

    public static function getBilletID($id){
        $db = DB::connexionDB();
        $req = $db->prepare('SELECT * FROM BILLETENTREE WHERE IDReservation = ?');
        $req->execute([$id]);
        $listebillet = $req->fetchAll();
        foreach($listebillet as $row){
            $billetEntree = new BilletEntree($row['IDBilletEntree'], $row['IDReservation'], $row['DateValidatiteEntree'], $row['ValidationEntree'], $row['IDTypeEntree']);
            array_push($result, $billetEntree);
        }
        return $result;
        
    }


}

?>
