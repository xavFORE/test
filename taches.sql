```

drop table if exists taches;

create table taches (
    id int PRIMARY KEY not null auto_increment,
    titre  varchar(256),
    description varchar(256),
    status int,
    priorite int,
    dateCreation date,
    dateLimit date,
    dateFinie date
);

insert into taches ( titre, description, status, priorite, dateCreation, dateLimit, dateFinie ) 
values( "Courses", "Acheter des légumes", 1, 0, "2021-12-16", "2021-12-18", NULL );

insert into taches ( titre, description, status, priorite, dateCreation, dateLimit, dateFinie ) 
values( "Apéro", "Aller voir les amis", 1, 1, "2021-12-16", "2021-12-19", NULL );

```