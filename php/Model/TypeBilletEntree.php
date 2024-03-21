<?php

class TypeBilletEntree
{
    private $IDTypeEntree;
    private $CategorieTarifEntree;
    private $TarifEntree;

    public function __construct($IDTypeEntree, $CategorieTarifEntree, $TarifEntree)
    {
        $this->IDTypeEntree = $IDTypeEntree;
        $this->CategorieTarifEntree = $CategorieTarifEntree;
        $this->TarifEntree = $TarifEntree;
    }

    public function getIDTypeEntree()
    {
        return $this->IDTypeEntree;
    }

    public function getCategorieTarifEntree()
    {
        return $this->CategorieTarifEntree;
    }

    public function getTarifEntree()
    {
        return $this->TarifEntree;
    }

    public function setIDTypeEntree($IDTypeEntree)
    {
        $this->IDTypeEntree = $IDTypeEntree;
    }

    public function setCategorieTarifEntree($CategorieTarifEntree)
    {
        $this->CategorieTarifEntree = $CategorieTarifEntree;
    }

    public function setTarifEntree($TarifEntree)
    {
        $this->TarifEntree = $TarifEntree;
    }


    public static function fetchListTypeBilletEntreeFromDatabase()
    {
        $connexion = DB::connexionDB();
        $SQL = "SELECT * FROM TYPEBILLETENTREE";
        $requete = $connexion->prepare($SQL);
        $requete->execute();
        $resultat = $requete->fetchAll();
        $listeObjetTypeBillet = array();
        foreach ($resultat as $row) {
            $billet = new TypeBilletEntree($row['IDTypeEntree'], $row['CategorieTarifEntree'], $row['TarifEntree']);
            array_push($listeObjetTypeBillet, $billet);
        }

        return $listeObjetTypeBillet;
    }

}

?>
