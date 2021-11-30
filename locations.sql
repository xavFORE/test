
drop table if exists locations;
create table locations (
    id int PRIMARY KEY not null auto_increment,
    id_client int,
    id_voiture int,
    id_couleur int,
    date_deb date,
    date_fin date
);

insert into locations ( id_client, id_voiture, id_couleur, date_deb, date_fin )
values  ( 1, 4, 3,  '2021-12-10', '2021-12-25' ),
        ( 2, 2, 2,  '2021-11-13', '2021-12-05' ),
        ( 4, 1, 4,  '2021-10-18', '2021-12-10' ),
        ( 5, 3, 1,  '2021-09-09', '2021-12-31' );

select * from locations; 

update locations set id_voiture=1 where id=3;

select clients.nom, 
       voitures.nom,  
       couleurs.nom, 
       date_deb, 
       date_fin
from   locations, 
       clients, 
       voitures, 
       couleurs
where  locations.id_client = clients.id and
       locations.id_voiture = voitures.id and
       locations.id_couleur = couleurs.id; 

        


