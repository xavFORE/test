```
create database todolist;

use todolist;

```

```

drop table if exists users;

create table users (
    id int PRIMARY KEY not null auto_increment,
    login varchar(30),
    pw varchar(256),
    role int default 0
);

insert into users ( login, pw, role ) values( "Remi", "remi", 0 );
insert into users ( login, pw, role ) values( "Nelly", "nelly", 0 );
insert into users ( login, pw, role ) values( "Mehdi", "mehdi", 0 );
insert into users ( login, pw, role ) values( "Bouchra", "bouchra", 0 );
insert into users ( login, pw, role ) values( "Admin", "admin", 1 );

```