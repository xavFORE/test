
drop table if exists enregistrementTache;
CREATE TABLE enregistrementTache
(
    id int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    titre VARCHAR(30),
    descriptio VARCHAR(200),
    statu INT,
    priorite INT,
    dateCreation datetime NOT NULL  CURRENT_TIMESTAMP,
    dateFin datetime
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;


insert into enregistrementTache (titre, descriptio, statu,priorite,dateCreation,dateFin)
values("faire la vaiselle","il faut tout bien laver et surtout ne pas oublier d'essuyer la vaiselle", 1,1,"2021-12-17","2021-12-19");



drop table if exists statu;
CREATE TABLE statu
(
    id int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    etat VARCHAR(30)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

insert into  statu (etat) values('a faire'), ('en cours'),('fait');


drop table if exists priorite;
CREATE TABLE priorite 
(
  id int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    priorisation VARCHAR(30)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

insert into priorite (priorisation) values('Urgent-important'),('pas urgent-important'),('pas important-urgent'), ('pas important-pas urgent');






pour creer une database en UTF8
[3:52 PM]
CREATE DATABASE mydb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
[3:54 PM]
Create Table  toto (
  id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom char(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

drop table if exists genres;
create table genres 
 (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30) UNIQUE
)CHARACTER SET latin1 COLLATE latin1_swedish_ci;

insert into genres ( nom ) values
(  "Policier"     ),
(  "SF"      ),
(  "Enfants"      ),
(  "Cuisine"       ),
(  "Histoire"     )
;