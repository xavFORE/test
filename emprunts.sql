```
drop table if exists emprunts;
create table emprunts (
    id int PRIMARY KEY not null auto_increment,
    ide int,
    idl int,
    dateDeb date,
    dateFin date
);

insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 2, 5, '2021-11-22', '2021-11-27' );

insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 2, 7, '2021-11-22', NULL );
insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 2, 8, '2021-11-22', NULL );
insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 4, 6, '2021-11-25', '2021-11-26' );
insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 4, 2, '2021-11-26', NULL );
insert into emprunts ( ide, idl, dateDeb, dateFin ) values
( 6, 1, '2021-11-26', NULL );



```