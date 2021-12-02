select 
              emprunts.idl,
              emprunts.dateFin
          from 
              emprunts
          where 
              dateFin is NULL;

///

select 
    livres.nom
from
    livres,
    (select
        idl
     from
     emprunts)
as emp
where
emp.idl=livres.id;


