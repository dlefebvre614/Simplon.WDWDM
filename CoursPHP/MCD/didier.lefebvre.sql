#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Bien
#------------------------------------------------------------

CREATE TABLE Bien(
        idBien   Int  Auto_increment  NOT NULL ,
        typeBien Varchar (50) NOT NULL
	,CONSTRAINT Bien_PK PRIMARY KEY (idBien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Agence
#------------------------------------------------------------

CREATE TABLE Agence(
        idAgence        Int  Auto_increment  NOT NULL ,
        nomAgence       Varchar (50) NOT NULL ,
        adresseAgence   Varchar (255) NOT NULL ,
        telephoneAgence Varchar (25) NOT NULL ,
        emailAgence     Varchar (25) NOT NULL
	,CONSTRAINT Agence_PK PRIMARY KEY (idAgence)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Negociateur
#------------------------------------------------------------

CREATE TABLE Negociateur(
        idNegociateur     Int  Auto_increment  NOT NULL ,
        nomNegociateur    Varchar (50) NOT NULL ,
        mobileNegociateur Varchar (25) NOT NULL ,
        emailNegociateur  Varchar (25) NOT NULL ,
        idAgence          Int NOT NULL
	,CONSTRAINT Negociateur_PK PRIMARY KEY (idNegociateur)

	,CONSTRAINT Negociateur_Agence_FK FOREIGN KEY (idAgence) REFERENCES Agence(idAgence)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Annonce
#------------------------------------------------------------

CREATE TABLE Annonce(
        idAnnonce           Int  Auto_increment  NOT NULL ,
        proprietaireAnnonce Varchar (50) NOT NULL ,
        AdresseAnnonce      Varchar (255) NOT NULL ,
        dateCreationAnnone  Datetime NOT NULL ,
        prixAnnonce         Float NOT NULL ,
        nbPiecesAnnonce     Int NOT NULL ,
        SurfaceAnnonce      Float NOT NULL ,
        DescriptifAnnonce   Text NOT NULL ,
        idBien              Int NOT NULL ,
        idNegociateur       Int NOT NULL
	,CONSTRAINT Annonce_PK PRIMARY KEY (idAnnonce)

	,CONSTRAINT Annonce_Bien_FK FOREIGN KEY (idBien) REFERENCES Bien(idBien)
	,CONSTRAINT Annonce_Negociateur0_FK FOREIGN KEY (idNegociateur) REFERENCES Negociateur(idNegociateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Acquereur
#------------------------------------------------------------

CREATE TABLE Acquereur(
        idAcquereur        Int  Auto_increment  NOT NULL ,
        nomAcquereur       Varchar (50) NOT NULL ,
        adresseAcquereur   Varchar (25) NOT NULL ,
        telephoneAcquereur Varchar (25) NOT NULL ,
        idNegociateur      Int NOT NULL
	,CONSTRAINT Acquereur_PK PRIMARY KEY (idAcquereur)

	,CONSTRAINT Acquereur_Negociateur_FK FOREIGN KEY (idNegociateur) REFERENCES Negociateur(idNegociateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Photographie
#------------------------------------------------------------

CREATE TABLE Photographie(
        idPhotographie   Int  Auto_increment  NOT NULL ,
        lienPhotographie Varchar (255) NOT NULL ,
        idAnnonce        Int NOT NULL
	,CONSTRAINT Photographie_PK PRIMARY KEY (idPhotographie)

	,CONSTRAINT Photographie_Annonce_FK FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Afficher
#------------------------------------------------------------

CREATE TABLE Afficher(
        idAgence  Int NOT NULL ,
        idAnnonce Int NOT NULL
	,CONSTRAINT Afficher_PK PRIMARY KEY (idAgence,idAnnonce)

	,CONSTRAINT Afficher_Agence_FK FOREIGN KEY (idAgence) REFERENCES Agence(idAgence)
	,CONSTRAINT Afficher_Annonce0_FK FOREIGN KEY (idAnnonce) REFERENCES Annonce(idAnnonce)
)ENGINE=InnoDB;