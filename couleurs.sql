
drop table if exists couleurs;
create table couleurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into couleurs ( nom ) values( "Noir");
insert into couleurs ( nom ) values( "Blanc");
insert into couleurs ( nom ) values( "Rouge");
insert into couleurs ( nom ) values( "Vert");
insert into couleurs ( nom ) values( "Bleu");

