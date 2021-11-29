

create table voitures
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(30),
    annee integer,
    puissance integer,
    kilometrage integer,
    prix integer

);

insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "ford T", 1925, 1, 189897, 70 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "2CV", 1965, 2, 120200, 90 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Juva 4", 1951, 4, 80311, 100 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Renault 4", 1968, 4, 57044, 100 );


