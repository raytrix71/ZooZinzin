create table ALIMENT
(
    IDAliment            smallint unsigned auto_increment
        primary key,
    NomAliment           varchar(255)   null,
    QteReelle            decimal(10, 2) null,
    QteMoyenneNecessaire decimal(10, 2) null
);

create table CLIENT
(
    IDClient      smallint unsigned auto_increment
        primary key,
    PrenomClient  varchar(50)  null,
    NomClient     varchar(50)  null,
    EmailClient   varchar(255) null,
    AdresseClient varchar(255) null,
    CPClient      varchar(5)   null,
    TelClient     varchar(13)  null,
    MDPClient     varchar(255) null
);

create table FOURNISSEUR
(
    IDFournisseur      smallint unsigned auto_increment
        primary key,
    NomFournisseur     varchar(40)  null,
    AdresseFournisseur varchar(255) null,
    TelFournisseur     varchar(13)  null
);

create table COMMANDE
(
    IDCommande    smallint unsigned auto_increment
        primary key,
    IDFournisseur smallint unsigned null,
    IDAliment     smallint unsigned null,
    DateCommande  date              null,
    QteCommande   decimal(10, 2)    null,
    DateLivraison date              null,
    constraint COMMANDE_ALIMENT_IDAliment_fk
        foreign key (IDAliment) references ALIMENT (IDAliment),
    constraint COMMANDE_FOURNISSEUR_IDFournisseur_fk
        foreign key (IDFournisseur) references FOURNISSEUR (IDFournisseur)
);

create table PRIXFOURNISSEUR
(
    IDPrixFournisseur smallint unsigned auto_increment
        primary key,
    IDAliment         smallint unsigned null,
    IDFournisseur     smallint unsigned null,
    PrixUnitaire      decimal(10, 2)    null,
    constraint PRIXFOURNISSEUR_ALIMENT_IDAliment_fk
        foreign key (IDAliment) references ALIMENT (IDAliment),
    constraint PRIXFOURNISSEUR_FOURNISSEUR_IDFournisseur_fk
        foreign key (IDFournisseur) references FOURNISSEUR (IDFournisseur)
);

create table ResultatRecherche
(
    NomEspece int null
);

create table TYPEACTIVITE
(
    IDTypeActivite      smallint unsigned auto_increment
        primary key,
    NomActivite         varchar(50)       null,
    LieuActivite        varchar(50)       null,
    DescriptionActivite varchar(255)      null,
    TarifActivite       decimal(3, 2)     null,
    CapaciteMaxActivite smallint unsigned null
);

create table ACTIVITE
(
    IDActivite     smallint unsigned auto_increment
        primary key,
    IDTypeActivite smallint unsigned null,
    DateActivite   date              null,
    HeureActivite  time              null,
    constraint ACTIVITE_TYPEACTIVITE_IDTypeActivite_fk
        foreign key (IDTypeActivite) references TYPEACTIVITE (IDTypeActivite)
);

create table TYPEBILLETENTREE
(
    IDTypeEntree         smallint unsigned auto_increment
        primary key,
    CategorieTarifEntree varchar(30)   null,
    TarifEntree          decimal(4, 2) null
);

create table TYPESPECTACLE
(
    IDTypeSpectacle      smallint unsigned auto_increment
        primary key,
    NomSpectacle         varchar(50)       null,
    LieuSpectacle        varchar(50)       null,
    DescriptionSpectacle varchar(255)      null,
    TarifSpectacle       decimal(5, 2)     null,
    CapaciteMaxSpectacle smallint unsigned null
);

create table SPECTACLE
(
    IDSpectacle     smallint unsigned auto_increment
        primary key,
    IDTypeSpectacle smallint unsigned null,
    DateSpectacle   date              null,
    HeureSpectacle  time              null,
    constraint SPECTACLE_TYPESPECTACLE_IDTypeSpectacle_fk
        foreign key (IDTypeSpectacle) references TYPESPECTACLE (IDTypeSpectacle)
);

create table ZONE
(
    IDZone             smallint unsigned auto_increment
        primary key,
    NomCategorieEspece varchar(20) null comment '(oiseau,reptiles,poisson,mamiphere)',
    NOMZONE            varchar(20) null comment 'Aquatique,terrestre'
);

create table EMPLOYE
(
    IDEmploye      smallint unsigned auto_increment
        primary key,
    PrenomEmploye  varchar(50)       null,
    NomEmploye     varchar(50)       null,
    AdresseEmploye varchar(255)      null,
    CPEmploye      int               null comment 'Limiter a 5',
    MailEmploye    varchar(255)      null,
    MDPEmploye     varchar(255)      null,
    TelEmploye     varchar(13)       null,
    IDZone         smallint unsigned null,
    Role           tinytext          null,
    constraint EMPLOYE_ZONE_IDZone_fk
        foreign key (IDZone) references ZONE (IDZone)
);

create table ESPECE
(
    NomEspece         varchar(255)                  not null
        primary key,
    Esperance         smallint unsigned             not null,
    TailleMoyenne     decimal(10, 2)                not null,
    PoidsMoyen        decimal(10, 2)                not null,
    DescriptionEspece varchar(255)                  not null,
    TempsGestation    smallint unsigned             not null,
    Effectif          smallint unsigned default '0' not null,
    TempMax           decimal(3, 1)                 not null,
    TempMin           decimal(3, 1)                 not null,
    PHMAX             int                           null,
    PHMin             decimal(3, 1)                 null,
    TxHumMax          decimal(3, 1)                 null,
    TxHumMin          decimal(3, 1)                 null,
    Protege           tinyint(1)        default 0   not null,
    Individuel        tinyint(1)        default 0   not null,
    IDZone            smallint unsigned             not null,
    Alim1             smallint unsigned             not null,
    Qte1              decimal(4, 1)                 not null,
    Alim2             smallint unsigned             not null,
    Qte2              decimal(4, 1)                 not null,
    Alim3             smallint unsigned             not null,
    Qte3              decimal(4, 1)                 not null,
    constraint ESPECE_ALIMENT_IDAliment_fk
        foreign key (Alim1) references ALIMENT (IDAliment),
    constraint ESPECE_ALIMENT_IDAliment_fk_2
        foreign key (Alim2) references ALIMENT (IDAliment),
    constraint ESPECE_ALIMENT_IDAliment_fk_3
        foreign key (Alim3) references ALIMENT (IDAliment),
    constraint ESPECE_ZONE_IDZone_fk
        foreign key (IDZone) references ZONE (IDZone),
    constraint Hum
        check ((`TxHumMax` <= 100) and (`TxHumMin` >= 0)),
    constraint PH
        check ((`PHMin` >= 0) and (`PHMAX` <= 14)),
    constraint Temp
        check ((`TempMax` <= 55) and (`TempMin` >= -(10)))
);

create table ANTAGONISTE
(
    IDAntagoniste      smallint unsigned auto_increment
        primary key,
    NomEspecePredateur varchar(255) null,
    NomEspeceProie     varchar(255) null,
    constraint ANTAGONISTE_ESPECE_NomEspece_fk
        foreign key (NomEspecePredateur) references ESPECE (NomEspece),
    constraint ANTAGONISTE_ESPECE_NomEspece_fk_2
        foreign key (NomEspeceProie) references ESPECE (NomEspece)
);

create table LIENEMPLOYEACTIVITE
(
    IDLienEmployeActivite smallint unsigned auto_increment
        primary key,
    IDEmploye             smallint unsigned null,
    IDActivite            smallint unsigned null,
    constraint LIENEMPLOYEACTIVITE_ACTIVITE_IDActivite_fk
        foreign key (IDActivite) references ACTIVITE (IDActivite),
    constraint LIENEMPLOYEACTIVITE_EMPLOYE_IDEmploye_fk
        foreign key (IDEmploye) references EMPLOYE (IDEmploye)
);

create table LIENEMPLOYESPECTACLE
(
    IDLienEmployeSpectacle smallint unsigned auto_increment
        primary key,
    IDEmploye              smallint unsigned null,
    IDSpectacle            smallint unsigned null,
    constraint LIENEMPLOYESPECTACLE_EMPLOYE_IDEmploye_fk
        foreign key (IDEmploye) references EMPLOYE (IDEmploye),
    constraint LIENEMPLOYESPECTACLE_SPECTACLE_IDSpectacle_fk
        foreign key (IDSpectacle) references SPECTACLE (IDSpectacle)
);

create table PARCELLE
(
    IDParcelle smallint unsigned auto_increment
        primary key,
    IDZone     smallint unsigned null,
    Dimension  decimal(10, 2)    null,
    constraint PARCELLE_ZONE_IDZone_fk
        foreign key (IDZone) references ZONE (IDZone)
);

create table ANIMAL
(
    IDAnimal      smallint unsigned auto_increment
        primary key,
    IDParcelle    smallint unsigned null,
    NomEspece     varchar(255)      null,
    NomAnimal     varchar(50)       null,
    DateNaissance date              null,
    Poids         decimal(10, 2)    null,
    Taille        decimal(6, 2)     null,
    Sexe          varchar(1)        null,
    Description   text              null,
    constraint ANIMAL_ESPECE_NomEspece_fk
        foreign key (NomEspece) references ESPECE (NomEspece),
    constraint ANIMAL_PARCELLE_IDPercelle_fk
        foreign key (IDParcelle) references PARCELLE (IDParcelle)
);

create definer = root@`%` trigger alimentationAnimal
    after insert
    on ANIMAL
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
    SELECT Poids INTO masse FROM ANIMAL WHERE NEW.IDAnimal=ANIMAL.IDAnimal;
    SET @jourrestant=DATEDIFF(LAST_DAY(NOW()),NOW());
    SET @jour=0;
    REPEAT
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDAnimal,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite1*masse,aliment1);
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDAnimal,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite2*masse,aliment2);
    INSERT INTO TOURNEEREPAS (IDAnimal,ValidationRepas,DateRepas,QteDonnee,IDAliment) VALUES (NEW.IDAnimal,0,DATE_ADD(NOW(),INTERVAL @jour DAY),quantite3*masse,aliment3);
    SET @jour=@jour+1;
    UNTIL @jour=@jourrestant

        END REPEAT;
END;

create table DONEESANTE
(
    IDMesure        smallint unsigned auto_increment
        primary key,
    IDAnimal        smallint unsigned null,
    BPM             smallint unsigned null,
    Temperature     decimal(2, 1)     null,
    Localisation    varchar(255)      null,
    DateHeureMesure datetime          null,
    constraint DONEESANTE_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal)
);

create table GROUPE
(
    IDGroupe          smallint unsigned auto_increment
        primary key,
    IDParcelle        smallint unsigned null,
    NomEspece         varchar(255)      null,
    EffectifGroupe    smallint unsigned null,
    PoidsTotalGroupe  decimal(10, 2)    null,
    CommentaireGroupe varchar(255)      null,
    constraint GROUPE_ESPECE_NomEspece_fk
        foreign key (NomEspece) references ESPECE (NomEspece),
    constraint GROUPE_PARCELLE_IDPercelle_fk
        foreign key (IDParcelle) references PARCELLE (IDParcelle)
);

create table LIENANIMALACTIVITE
(
    IDActivite           smallint unsigned null,
    IDAnimal             smallint unsigned null,
    IDLienAnimalActivite smallint unsigned auto_increment
        primary key,
    constraint LIENANIMALACTIVITE_ACTIVITE_IDActivite_fk
        foreign key (IDActivite) references ACTIVITE (IDActivite),
    constraint LIENANIMALACTIVITE_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal)
);

create table LIENANIMALSPECTACLE
(
    IDLienAnimalSpectacle smallint unsigned auto_increment
        primary key,
    IDAnimal              smallint unsigned null,
    IDSpectacle           smallint unsigned null,
    constraint LIENANIMALSPECTACLE_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal),
    constraint LIENANIMALSPECTACLE_SPECTACLE_IDSpectacle_fk
        foreign key (IDSpectacle) references SPECTACLE (IDSpectacle)
);

create table PROBLEME
(
    IDProbleme                    smallint unsigned auto_increment
        primary key,
    IDAnimal                      smallint unsigned null,
    IDGroupe                      smallint unsigned null,
    IDEmploye                     smallint unsigned null,
    DescriptionPB                 varchar(255)      null,
    DatePB                        date              null,
    SoinsRealiseAvantIntervention varchar(255)      null,
    StatutProblene                varchar(255)      null,
    constraint PROBLEME_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal),
    constraint PROBLEME_EMPLOYE_IDEmploye_fk
        foreign key (IDEmploye) references EMPLOYE (IDEmploye),
    constraint PROBLEME_GROUPE_IDGroupe_fk
        foreign key (IDGroupe) references GROUPE (IDGroupe)
);

create table CONSULTATION
(
    IDConsultation      smallint unsigned auto_increment
        primary key,
    IDEmploye           smallint unsigned null,
    IDProbleme          smallint unsigned null,
    Conclusion          varchar(255)      null,
    SoinsEffectue       varchar(255)      null,
    DateDebutTraitement date              null,
    DateFinTraitement   date              null,
    ProtocoleJournalier date              null,
    constraint CONSULTATION_EMPLOYE_IDEmploye_fk
        foreign key (IDEmploye) references EMPLOYE (IDEmploye),
    constraint CONSULTATION_PROBLEME_IDProbleme_fk
        foreign key (IDProbleme) references PROBLEME (IDProbleme)
);

create table REGIMEALIMENTAIRE
(
    IDRegimeAlimentaire smallint unsigned auto_increment
        primary key,
    IDAliment           smallint unsigned null,
    NomEspece           varchar(255)      null,
    QteParKgAnimal      decimal(5, 2)     null,
    constraint REGIMEALIMENTAIRE_ALIMENT_IDAliment_fk
        foreign key (IDAliment) references ALIMENT (IDAliment),
    constraint REGIMEALIMENTAIRE_ESPECE_NomEspece_fk
        foreign key (NomEspece) references ESPECE (NomEspece)
);

create table RELEVEPARCELLE
(
    IdReleveParcelle int auto_increment
        primary key,
    PH               int               null,
    IDParcelle       smallint unsigned not null,
    TxHum            decimal(3, 1)     null,
    Temp             decimal(3, 1)     not null,
    constraint RELEVEPARCELLE_PARCELLE_IDParcelle_fk
        foreign key (IDParcelle) references PARCELLE (IDParcelle)
);

create table RESERVATION
(
    IDReservation   smallint unsigned auto_increment
        primary key,
    IDClient        smallint unsigned                  null,
    IDEmploye       smallint unsigned                  null,
    DateReservation datetime default CURRENT_TIMESTAMP not null,
    constraint RESERVATION_CLIENT_IDClient_fk
        foreign key (IDClient) references CLIENT (IDClient),
    constraint RESERVATION_EMPLOYE_IDEmploye_fk
        foreign key (IDEmploye) references EMPLOYE (IDEmploye)
);

create table BILLETACTIVITE
(
    IDBilletActivite   smallint unsigned auto_increment
        primary key,
    IDReservation      smallint unsigned    null,
    IDActivite         smallint unsigned    null,
    ValidationActivite tinyint(1) default 0 null,
    constraint BILLETACTIVITE_ACTIVITE_IDActivite_fk
        foreign key (IDActivite) references ACTIVITE (IDActivite),
    constraint BILLETACTIVITE_RESERVATION_IDReservation_fk
        foreign key (IDReservation) references RESERVATION (IDReservation)
);

create table BILLETENTREE
(
    IDBilletEntree       smallint unsigned auto_increment
        primary key,
    IDReservation        smallint unsigned    null,
    DateValidatiteEntree date                 null,
    ValidationEntree     tinyint(1) default 0 null,
    IDTypeEntree         smallint unsigned    null,
    constraint BILLETENTREE_RESERVATION_IDReservation_fk
        foreign key (IDReservation) references RESERVATION (IDReservation),
    constraint BILLETENTREE_TYPEBILLETENTREE_IDTypeEntree_fk
        foreign key (IDTypeEntree) references TYPEBILLETENTREE (IDTypeEntree)
);

create table BILLETSPECTACLE
(
    IDBilletSpectacle   smallint unsigned auto_increment
        primary key,
    IDReservation       smallint unsigned    null,
    IDSpectacle         smallint unsigned    null,
    ValidationSpectacle tinyint(1) default 0 null,
    constraint BILLETSPECTACLE_RESERVATION_IDReservation_fk
        foreign key (IDReservation) references RESERVATION (IDReservation),
    constraint BILLETSPECTACLE_SPECTACLE_IDSpectacle_fk
        foreign key (IDSpectacle) references SPECTACLE (IDSpectacle)
);

create table TOURNEEREPAS
(
    IDRepas         smallint unsigned auto_increment
        primary key,
    IDAnimal        smallint unsigned    null,
    IDGroupe        smallint unsigned    null,
    ValidationRepas tinyint(1) default 0 not null,
    DateRepas       date                 null,
    QteDonnee       decimal(10, 2)       null,
    IDAliment       smallint unsigned    not null,
    constraint TOURNEEREPAS_ALIMENT_IDAliment_fk
        foreign key (IDAliment) references ALIMENT (IDAliment),
    constraint TOURNEEREPAS_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal),
    constraint TOURNEEREPAS_GROUPE_IDGroupe_fk
        foreign key (IDGroupe) references GROUPE (IDGroupe)
);

create table TOURNEESOINS
(
    IDSoins         smallint unsigned auto_increment
        primary key,
    IDAnimal        smallint unsigned    null,
    IDGroupe        smallint unsigned    null,
    ValidationSoins tinyint(1) default 0 null,
    DateSoins       date                 null,
    SoinsAdmnistre  varchar(255)         null,
    constraint TOURNEESOINS_ANIMAL_IDAnimal_fk
        foreign key (IDAnimal) references ANIMAL (IDAnimal),
    constraint TOURNEESOINS_GROUPE_IDGroupe_fk
        foreign key (IDGroupe) references GROUPE (IDGroupe)
);

