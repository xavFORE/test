```
drop table if exists emprunts;
create table emprunts (
    id int PRIMARY KEY not null auto_increment,
    ide int,
    idl int,
    dateDeb date,
    dateFin date
);

insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 2, 5, '2021-11-22', '2021-11-27' ),
( 2, 7, '2021-11-22', NULL ),
( 2, 8, '2021-11-22', NULL ),
( 4, 6, '2021-11-25', '2021-11-26' ),
( 4, 2, '2021-11-26', NULL ),
( 6, 1, '2021-11-26', NULL )
;

insert into emprunts ( ide, idl, dateDeb )
value ( $ide, $idl, current_date);


select livres.nom, livres.id 
from livres, emprunts
where livres.id=emprunts.idl and emprunts.dateFin is NULL;


select livres.id 
from livres, emprunts
where livres.id=emprunts.idl and emprunts.dateFin is NULL;


update livres set absent=0;
flush table livres;
update 
    emprunts, livres 
set 
    livres.absent=1
where 
    livres.id = emprunts.idl and emprunts.dateFin is NULL;
select nom from livres where absent=0;



select 
    livres.nom 
from 
    livres,  
    (select livres.id 
    from livres, emprunts
    where livres.id=emprunts.idl and emprunts.dateFin is NULL) as absents
where 
    livres.id != absents.id;


select 
    livres.nom, livres.id
from 
    livres, emprunts
where emprunts.ide=2 and livres.id=emprunts.idl and emprunts.dateFin is NULL;




```