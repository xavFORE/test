drop table if exists enregistrementTache;
CREATE TABLE enregistrementTache
(
    id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    titre VARCHAR(30),
    descriptio VARCHAR(200),
    statu INT,
    priorite INT,
    dateCreation DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    dateFin DATETIME
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


insert into enregistrementTache (titre, descriptio, statu,priorite,dateCreation,dateFin)
values                       ("faire la vaiselle","il le",1, 1,"2021-12-05","2021-12-07");

drop table if exists statu;
CREATE TABLE statu
(
    id INT PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    etat VARCHAR(30)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into  statu (etat) values('a faire'), ('en cours'),('fait');

drop table if exists priorite;
CREATE TABLE priorite 
(
  id int PRIMARY KEY  NOT NULL AUTO_INCREMENT,
    priorisation VARCHAR(30)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into priorite (priorisation) values('Urgent-important'),('pas urgent-important'),('pas important-urgent'),('pas important-pas urgent');





