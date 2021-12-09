```
drop table if exists emprunteurs;
create table emprunteurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    pw varchar(256),
    dateNaiss date,
    civil int
);

drop table if exists civils;
create table civils (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);
insert into civils ( nom ) values( "Madame" );
insert into civils ( nom ) values( "Monsieur" );
insert into civils ( nom ) values( "Mademoiselle" );
insert into civils ( nom ) values( "Autres" );
insert into civils ( nom ) values( "Capitaine" );


insert into emprunteurs ( nom, pw, dateNaiss, civil ) values
( "Zorro", "123", '1955-07-14', 2 ),
( "Zorra", "123", '1999-01-01', 1 ),
( "Haddock", "123", '1946-02-28', 5 ),
( "Michael", "123", '1958-08-29', 4 ),
( "Ligonnes", "123", '1965-05-01', 2 ),
( "Hanane", "123", '1991-12-14', 3 )
;


```