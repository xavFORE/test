```
drop table if exists auteurs;
create table auteurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into auteurs ( nom ) values
(  "Bouchra"     ),
(  "Alexis"      ),
(  "Hanane"      ),
(  "Mehdi"       ),
(  "Olivier"     ),
(  "Remi"        ),
(  "Karim"       ),
(  "Nelly"       ),
(  "Xavier"      )
;


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



drop table if exists livres;
create table livres (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    auteur int,
    genre in
);

insert into livres ( nom, auteur, genre ) values
( "La cuisine facile"           , 1,  4     ),
( "La mécanique pour les Nuls"  , 2,  NULL  ),
( "La beauté chez soi"          , 3,  NULL  ),
( "La boulangerie"              , 4,  4     ),
( "Le tourisme en France"       , 5,  NULL  ),
( "Le tourisme avec les gosses" , 5,  NULL  ),
( "ma sortie piscine en enfer"  , 5,  NULL  ),
( "Le tourisme internationnal"  , 6,  NULL  ),
( "Les sales gosses"            , 7,  NULL  ),
( "les virus faciles"           , 8,  2     ),
( "l'anglais facile"            , 9,  3     )
;


```