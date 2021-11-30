
drop table if exists couleurs;
create table couleurs (id int PRIMARY KEY not null auto_increment, nom  varchar(30));
insert into couleurs ( nom ) values( "vert");
insert into couleurs ( nom ) values( "bleu");
insert into couleurs ( nom ) values( "rouge");
insert into couleurs ( nom ) values( "blanc");
insert into couleurs ( nom ) values( "noir");

