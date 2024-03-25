create event TourneeAnimalMensuel on schedule
    every '1' MONTH
        starts '2024-03-01 00:00:00'
    enable
    do
    BEGIN
  DECLARE done INT DEFAULT FALSE;
  DECLARE a INT;
  DECLARE aliment1 INT;
  DECLARE aliment2 INT;
  DECLARE aliment3 INT;
  DECLARE quantite1 DECIMAL(10,2);
  DECLARE quantite2 DECIMAL(10,2);
  DECLARE quantite3 DECIMAL(10,2);
  DECLARE masse DECIMAL(10,2);
  DECLARE cur CURSOR FOR SELECT IDAnimal FROM ANIMAL;
  DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;

  OPEN cur;

  read_loop: LOOP
    FETCH cur INTO a;
    IF done THEN
      LEAVE read_loop;
    END IF;
    -- boucle reutilise du trigger
    SELECT Alim1 INTO aliment1 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Alim2 INTO aliment2 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Alim3 INTO aliment3 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Qte1 INTO quantite1 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Qte2 INTO quantite2 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Qte3 INTO quantite3 FROM ESPECE INNER JOIN ANIMAL ON ANIMAL.NomEspece=ESPECE.NomEspece WHERE ANIMAL.IDAnimal=a;
    SELECT Poids INTO masse FROM ANIMAL WHERE ANIMAL.IDAnimal=a;
    SET @jourrestant=DATEDIFF(LAST_DAY(NOW()),NOW());
    SET @jour=0;
    REPEAT
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (a,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite1*masse,aliment1);
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (a,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite2*masse,aliment2);
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (a,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite3*masse,aliment3);
    SET @jour=@jour+1;
    UNTIL @jour=@jourrestant

        END REPEAT;


    -- fin boucle :
    SELECT a;
  END LOOP;

  CLOSE cur;
END;

