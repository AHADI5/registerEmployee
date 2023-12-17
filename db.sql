-- Active: 1701414220904@@127.0.0.1@3306@agents
CREATE TABLE IF NOT EXISTS ouvriers(
    id_ouvriers INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50) NOT NULL ,
    postnom VARCHAR(50) NOT NULL ,
    prenom VARCHAR(50) NOT NULL ,
    adresse VARCHAR(50) NOT NULL ,
    type_agent VARCHAR(50) NOT NULL , 
    domainr VARCHAR(50)  NOT NULL ,
    description VARCHAR(255) NOT NULL ,
    niveau VARCHAR(255) NOT NULL ,
    specialite VARCHAR(255) NOT NULL ,
    PRIMARY KEY (id_ouvriers)
);

CREATE TABLE IF NOT EXISTS ingenieurs(
    id_ouvriers INT AUTO_INCREMENT NOT NULL,
    nom VARCHAR(50) NOT NULL ,
    postnom VARCHAR(50) NOT NULL ,
    prenom VARCHAR(50) NOT NULL ,
    adresse VARCHAR(50) NOT NULL ,
    type_agent VARCHAR(50) NOT NULL , 
    domainr VARCHAR(50)  NOT NULL ,
    description VARCHAR(255) NOT NULL ,
    niveau VARCHAR(255) NOT NULL ,
    specialite VARCHAR(255) NOT NULL ,
    PRIMARY KEY (id_ouvriers)
);