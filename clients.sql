```
drop table if exists clients;

create table clients (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into clients ( nom ) values( "Zorro" );
insert into clients ( nom ) values( "Batman" );
insert into clients ( nom ) values( "Ligonnez" );
insert into clients ( nom ) values( "Daniel" );
insert into clients ( nom ) values( "Alezi" );
insert into clients ( nom ) values( "Vin Diesel" );

```

