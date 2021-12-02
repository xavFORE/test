-- requete pour emprunter un livre
insert into emprunts ( ide, idl, dateDeb, dateFin) values (1, 3, now(), NULL); 


-- requete pour non null date de fin 
select livres.nom as livre
from   emprunts,
       emprunteurs, 
       livres
where  emprunts.ide = emprunteurs.id and
       emprunts.idl = livres.id and 
       emprunts.dateFin is not null;


--  voir listes des emprunteurs
select distinct emprunteurs.nom as nom, 
       livres.nom as livre
from   emprunts,
       emprunteurs, 
       livres
where  emprunts.ide = emprunteurs.id and
       emprunts.idl = livres.id ;

-- 


select livres.nom from (livres) ,(select distinct emprunts.idl) as idl 
where idl = livres.id ;