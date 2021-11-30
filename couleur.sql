DROP TABLE IS EXISTS couleurs;

CREATE TABLE couleurs (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(30)
);


insert into couleurs ( nom ) values ( 'rouge' );
insert into couleurs ( nom ) values ( 'bleu' );
insert into couleurs ( nom ) values ( 'blanc' );
insert into couleurs ( nom ) values ( 'vert' );
insert into couleurs ( nom ) values ( 'rose' );