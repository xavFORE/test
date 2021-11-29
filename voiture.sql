
drop table if exists voitures;
create table voitures (
    ID int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    annee int,
    puissance int,
    kilometrage int,
    prix int
);

insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "ford T", 1925, 1, 189897, 70 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "2CV", 1965, 2, 120200, 90 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Juva 4", 1951, 4, 80311, 100 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Renault 4", 1968, 4, 57044, 100 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Dauphine", 1973, 2, 33041, 100 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Multipla", 2005, 6, 130002, 150 );


