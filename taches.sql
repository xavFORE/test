```

drop table if exists taches;

create table taches (
    id int PRIMARY KEY not null auto_increment,
    titre  varchar(256),
    description varchar(256),
    status int default 0,
    priorite int default 3,
    dateCreation date,
    dateLimit date,
    dateFinie date
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into taches ( titre, description, status, priorite, dateCreation, dateLimit, dateFinie ) 
values( "Courses", "Acheter des légumes", 1, 0, "2021-12-16", "2021-12-18", NULL );

insert into taches ( titre, description, status, priorite, dateCreation, dateLimit, dateFinie ) 
values( "Apéro", "Aller voir les amis", 1, 1, "2021-12-16", "2021-12-19", NULL );

```
-- status => soit 0 (en cours) ou 1 (finis); 
-- dateCreation => now(); 
-- priorite => 1 (urgent), 2(Important), 3(normal); 

-- select * from taches where id= $id; 

-- update taches set titre='$titre', description='$description', priorite=$priorite, dateLimit='$dateLimit' where id= $id; 
