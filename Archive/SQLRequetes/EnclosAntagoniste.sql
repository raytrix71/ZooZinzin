SET @nomespece = 'arina';
SELECT IDParcelle
FROM PARCELLE
WHERE IDZone=(SELECT IDZone FROM ESPECE WHERE NomEspece=@nomespece)
AND
 IDParcelle NOT IN (
    SELECT IDParcelle
    FROM ANIMAL
    WHERE NomEspece IN (
        SELECT NomEspecePredateur AS NomEspeceAntagoniste
        FROM ANTAGONISTE
        WHERE NomEspeceProie = @nomespece
        UNION
        SELECT NomEspeceProie AS NomEspeceAntagoniste
        FROM ANTAGONISTE
        WHERE NomEspecePredateur = @nomespece
    )
    UNION
    SELECT IDParcelle
    FROM GROUPE
    WHERE NomEspece IN (
        SELECT NomEspecePredateur AS NomEspeceAntagoniste
        FROM ANTAGONISTE
        WHERE NomEspeceProie = @nomespece
        UNION
        SELECT NomEspeceProie AS NomEspeceAntagoniste
        FROM ANTAGONISTE
        WHERE NomEspecePredateur = @nomespece
    )
);