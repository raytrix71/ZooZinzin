create definer = root@`%` trigger alimentationGroupe
    after insert
    on GROUPE
    for each row
BEGIN
    DECLARE aliment1 INT;
    DECLARE aliment2 INT;
    DECLARE aliment3 INT;
    DECLARE quantite1 DECIMAL(10,2);
    DECLARE quantite2 DECIMAL(10,2);
    DECLARE quantite3 DECIMAL(10,2);
    DECLARE masse DECIMAL(10,2);

    SELECT Alim1 INTO aliment1 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT Alim2 INTO aliment2 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT Alim3 INTO aliment3 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT Qte1 INTO quantite1 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT Qte2 INTO quantite2 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT Qte3 INTO quantite3 FROM ESPECE WHERE NEW.NomEspece=ESPECE.NomEspece;
    SELECT PoidsTotalGroupe INTO masse FROM GROUPE WHERE NEW.IDGroupe=GROUPE.IDGroupe;
    SET @jourrestant=DATEDIFF(LAST_DAY(NOW()),NOW());
    SET @jour=0;
    REPEAT
    INSERT INTO TOURNEEREPAS (IDGroupe,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDGroupe,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite1*masse,aliment1);
    INSERT INTO TOURNEEREPAS (IDGroupe,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDGroupe,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite2*masse,aliment2);
    INSERT INTO TOURNEEREPAS (IDGroupe,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDGroupe,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite3*masse,aliment3);
    SET @jour=@jour+1;
    UNTIL @jour=@jourrestant

        END REPEAT;
END;

