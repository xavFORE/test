/*voiture*/
//modifier un tab créer 
drop table if exists voitures;
//creer
create table voitures (
    id int PRIMARY KEY not null auto_increment,
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
/*client*/
create table clients (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into clients ( nom )
values( "Zorro");
insert into clients ( nom )
values( "Batman");
insert into clients ( nom )
values( "Ligonnez");
insert into clients ( nom )
values( "Daniel");
insert into clients ( nom )
values( "Alezi");
insert into clients ( nom )
values( "vin diesel");
/*departement*/
create table departement (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    num varchar(30)
);

insert into departement ( nom )
values( "Ain");
insert into departement ( nom )
values( "Aisne");
insert into departement ( nom )
values( "Allier");
insert into departement ( nom )
values( "Hautes-Alpes");
insert into departement ( nom )
values( "Alpes-de-Haute-Provence");
insert into departement ( nom )
values( "Alpes-Maritimes");
insert into departement ( nom )
values( "Ardèche");
insert into departement ( nom )
values( "Ardennes");
/*client*/
create table clients (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into clients ( nom )
values( "Zorro");
insert into clients ( nom )
values( "Batman");
insert into clients ( nom )
values( "Ligonnez");
insert into clients ( nom )
values( "Daniel");
insert into clients ( nom )
values( "Alezi");
insert into clients ( nom )
values( "vin diesel");

/*departement*/
create table departement (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    num varchar(30)
);

insert into departement ( nom )
values( "Ain");
insert into departement ( nom )
values( "Aisne");
insert into departement ( nom )
values( "Allier");
insert into departement ( nom )
values( "Hautes-Alpes");
insert into departement ( nom )
values( "Alpes-de-Haute-Provence");
insert into departement ( nom )
values( "Alpes-Maritimes");
insert into departement ( nom )
values( "Ardèche");
insert into departement ( nom )
values( "Ardennes");
/*couleurs*/
create table couleurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into couleurs ( nom )
values( "Noir");
insert into couleurs ( nom )
values( "blanc");
insert into couleurs ( nom )
values( "Rouge");
insert into couleurs ( nom )
values( "Vert");
insert into couleurs ( nom )
values( "bleu");

/*locations*/
create table locations (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into locations ( nom )
values( "Noir");




