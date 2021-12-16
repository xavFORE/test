CREATE TABLE enregistrementTache
(
    id int(20) PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    titre VARCHAR(30),
    descriptio VARCHAR(200),
    statu INT,
    priorite INT,
    dateCreation date NOT NULL CURRENT_DATE,
    dateFin date,
    
); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


insert into enregistrementTache (titre, descriptio, statu,priorite,dateCreation,dateFin)values("faire la vaiselle","il faut tout bien laver et surtout ne pas oublier d'esseuyer la vaiselle", 1,)

CREATE TABLE statut

(
    id int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    etat VARCHAR(30),

); ENGINE=InnoDB DEFAULT CHARSET=utf8mb4


pour creer une database en UTF8
[3:52 PM]
CREATE DATABASE mydb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
[3:54 PM]
Create Table  toto (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4