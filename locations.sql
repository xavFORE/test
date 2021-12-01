drop table if exists locations;
create table locations (
    id int PRIMARY KEY not null auto_increment,
    id_client  int,
    id_voiture int,
    id_couleur int,
    date_deb date,
    date_fin date
);

insert into locations 
( id_client, id_voiture, id_couleur, date_deb, date_fin )
values 
( 2, 3, 2, '2021-11-30', '2021-12-25'  ),
( 3, 1, 2, '2021-11-23', '2021-12-15'  ),
( 1, 2, 4, '2021-12-01', '2021-12-02'  );


insert into locations 
( id_client, id_voiture, id_couleur, date_deb, date_fin )
values ( 2, 3, 2, '2021-11-30', '2021-12-25'  );


select * from locations;

select 
    clients.nom as nomC, 
    voitures.nom as nomV, 
    couleurs.nom as nomK, 
    date_deb, 
    date_fin
from 

                  couleurs
where 
    locations.id_client = clients.id and 
    locations.id_voiture = voitures.id and 
    locations.id_couleur = couleurs.id
    ; 


    select 
    users.nom as nomc, 
users.pw as pw,
    departement.departement_nom as nomd
from 
    departement,
    users  
where 
    users.iddep = departement_id and pw
    ;