```
drop table if exists livres;
create table livres (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    auteur varchar(256)
);

insert into livres ( nom, auteur ) values
( "La cuisine facile"           , "Bouchra"     ),
( "La mécanique pour les Nuls"  , "Alexis"      ),
( "La beauté chez soi"          , "Hanane"      ),
( "La boulangerie"              , "Mehdi"       ),
( "Le tourisme en France"       , "Olivier"     ),
( "Le tourisme avec les gosses" , "Olivier"     ),
( "ma sortie piscine en enfer"  , "Olivier"     ),
( "Le tourisme internationnal"  , "Remi"        ),
( "Les sales gosses"            , "Karim"       ),
( "les virus faciles"           , "Nelly"       ),
( "l'anglais facile"            , "Xavier"      )
;


```