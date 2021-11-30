
drop table if exists couleurs;
create table couleurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into couleurs ( nom ) values( "vert" );
insert into couleurs ( nom ) values( "jaune" );
insert into couleurs ( nom ) values( "noir" );
insert into couleurs ( nom ) values( "gris" );
insert into couleurs ( nom ) values( "blanc" );
