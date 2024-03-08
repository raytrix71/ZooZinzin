<?php 
include('/var/www/html/Fonction_PHP/connexionDB.php');
class Espece{
    static $listEspece;
    private $nom_espece;

    public function __construct($nom_espece){
        $this->nom_espece = $nom_espece;
    }

    public function getNomEspece(){
        return $this->nom_espece;
    }

    public static function getListEspece(){
        if(!isset(self::$listEspece)){
            self::fetchListEspeceFromDatabase();
        }
        return self::$listEspece;
    }

    public static function fetchListEspeceFromDatabase(){
        
        $db = connexionDB();
        $query = "SELECT NomEspece FROM ESPECE";
        $result = $db->query($query);

        foreach($result as $row){
            $espece = new Espece($row['NomEspece']);
            array_push(self::$listEspece,$espece);

        }

        $listEspece = []; // Declare the variable $listEspece
        self::$listEspece = $listEspece;
    }


}

?>