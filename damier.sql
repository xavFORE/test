create database damier; 
use damier; 
drop table if exists users; 
create table users (
    id int PRIMARY KEY not null auto_increment,
    nom varchar(30),     
)

insert into users ( nom ) values
("Remi")
;

select * from users ;


