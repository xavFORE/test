```
drop table if exists users;

create table users (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30),
    pw varchar(256),
    idDep int
);

insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );
insert into users ( nom, pw, idDep ) values( "Ligonnes", "danger", 44 );
insert into users ( nom, pw, idDep ) values( "Nicolas", "glouglou", 20 );

```
        SELECT users.nom, 
       departement.departement_nom
        FROM users,
        INNER JOIN  departement ON id.key = departement_id.key




SELECT users.nom as nom,
	departement.departement_nom as departement
FROM users
INNER JOIN departement ON users.idDep = departement.departement_id;
