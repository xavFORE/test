```
create table couleurs (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);
drop table if exists couleurs;

insert into couleurs ( nom ) values( "noir" );
insert into couleurs ( nom ) values( "bleu" );
insert into couleurs ( nom ) values( "blanc" );
insert into couleurs ( nom ) values( "rouge" );
insert into couleurs ( nom ) values( "rose" );
insert into couleurs ( nom ) values( "orange );
```