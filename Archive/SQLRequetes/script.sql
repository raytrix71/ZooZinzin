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

create table ESPECE
(
    NomEspece         varchar(255)      not null
        primary key,
    Esperance         smallint unsigned null,
    TailleMoyenne     decimal(10, 2)    null,
    PoidsMoyen        decimal(10, 2)    null,
    DescriptionEspece varchar(255)      null,
    TempsGestation    smallint unsigned null,
    Effectif          smallint unsigned null
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
    TarifEntree          decimal(3, 2) null
);

create table TYPESPECTACLE
(
    IDTypeSpectacle      smallint unsigned auto_increment
        primary key,
    NomSpectacle         varchar(50)       null,
    LieuSpectacle        varchar(50)       null,
    DescriptionSpectacle varchar(255)      null,
    TarifSpectacle       decimal(3, 2)     null,
    CapaciteMaxSpectacle smallint unsigned null
);

create table SPECTACLE
(
    IDSpectacle     smallint unsigned auto_increment
        primary key,
    IDTypeSpectacle smallint unsigned null,
    DateActivite    date              null,
    HeureActivite   time              null,
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
    CPEmploye      smallint          null comment 'Limiter a 5',
    MailEmploye    varchar(255)      null,
    MDPEmploye     varchar(255)      null,
    TelEmploye     varchar(13)       null,
    IDZone         smallint unsigned null,
    constraint EMPLOYE_ZONE_IDZone_fk
        foreign key (IDZone) references ZONE (IDZone)
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
    IDPercelle     smallint unsigned auto_increment
        primary key,
    IDZone         smallint unsigned null,
    TemperatureMAx decimal(2, 1)     null,
    TemperatureMin decimal(2, 1)     null,
    Dimension      decimal(10, 2)    null,
    PHMax          smallint          null,
    PHMin          smallint          null,
    TxHumiditeMax  smallint          null,
    TxHumiditeMin  decimal(2)        null,
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
        foreign key (IDParcelle) references PARCELLE (IDPercelle)
);

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
        foreign key (IDParcelle) references PARCELLE (IDPercelle)
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

create table RESERVATION
(
    IDReservation   smallint unsigned auto_increment
        primary key,
    IDClient        smallint unsigned null,
    IDEmploye       smallint unsigned null,
    DateReservation date              null,
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
    HeureRepas      varchar(5)           null comment 'On mettra matin ou soir',
    QteDonnee       decimal(10, 2)       null,
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


