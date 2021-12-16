```
create database todolist CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use todolist;

```

```

drop table if exists users;

create table users (
    id int PRIMARY KEY not null auto_increment,
    mail varchar(30) unique,
    login varchar(30),
    pw varchar(256),
    role int default 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into users ( mail, login, pw, role ) values("remi@gmail.com","Remi", "remi", 0 );
insert into users ( mail, login, pw, role ) values( "nelly@gmail.com","Nelly", "nelly", 0 );
insert into users ( mail, login, pw, role ) values( "medhi@gmail.com","Mehdi", "mehdi", 0 );
insert into users ( mail, login, pw, role ) values( "bouchra@gmail.com","Bouchra", "bouchra", 0 );
insert into users ( mail, login, pw, role ) values( "admin@gmail.com","Admin", "admin", 1 );

```