CREATE USER 'toto'@'localhost' IDENTIFIED BY 'motdepasse';
CREATE USER 'toto'@'215.10.2.44' IDENTIFIED BY 'motdepasse';
CREATE USER 'toto'@'%' IDENTIFIED BY 'motdepasse';


CREATE USER 'toto'@'localhost' IDENTIFIED BY 'motdepasse';
GRANT ALL PRIVILEGES ON NomBase.* TO 'toto'@'localhost';


GRANT ALL PRIVILEGES ON NomBase.* TO '%'@'%';

GRANT SELECT ON NomBase.users TO 'toto'@'localhost';





SHOW DATABASES;

CREATE DATABASE NomDeLaBase;

USE NomDeLaBase;
	
SHOW TABLES;


CREATE TABLE users (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(30),
  pw VARCHAR(30)
);


Crud
insert into users ( nom ) values ( 'toto' );

cRud
select * from users;
select * from users WHERE nom='toto';

crUd

update users set nom='toto' where nom='titi'; 
update users set pw='soleil' where nom='toto'; 

cruD
delete from users where nom='toto';



REATE USER 'toto'@'localhost' IDENTIFIED BY 'motdepasse';
GRANT ALL PRIVILEGES ON NomBase.* TO 'toto'@'localhost';

drop table if exists clients;
create table clients (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into clients ( nom ) values( "Zorro" );
insert into clients ( nom ) values( "Batman" );
insert into clients ( nom ) values( "Ligonnez" );
insert into clients ( nom ) values( "Daniel" );
insert into clients ( nom ) values( "Alezi" );
insert into clients ( nom ) values( "Vin Diesel" );