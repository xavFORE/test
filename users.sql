```
create database todolist CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use todolist;

```

```

drop table if exists users;

create table users (
    id int PRIMARY KEY not null auto_increment,
    login varchar(30),
    pw varchar(256),
    role int default 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into users ( login, pw, role ) values( "Remi", "remi", 0 );
insert into users ( login, pw, role ) values( "Nelly", "nelly", 0 );
insert into users ( login, pw, role ) values( "Mehdi", "mehdi", 0 );
insert into users ( login, pw, role ) values( "Bouchra", "bouchra", 0 );
insert into users ( login, pw, role ) values( "Admin", "admin", 1 );

```