SELECT COUNT(*),BILLETENTREE.IDTypeEntree,CategorieTarifEntree,DateValidatiteEntree FROM BILLETENTREE
    INNER JOIN TYPEBILLETENTREE ON BILLETENTREE.IDTypeEntree = TYPEBILLETENTREE.IDTypeEntree
    WHERE IDReservation=31 GROUP BY IDTypeEntree,CategorieTarifEntree,DateValidatiteEntree;

