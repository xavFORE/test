drop database if exists zanimaux;
create database zanimaux CHARACTER SET utf8;

use zanimaux;

drop table if exists animals;
create table animals 
(
    id int primary key not null auto_increment,
    stampCreate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    species VARCHAR(255) NOT NULL, 
    race VARCHAR(255) NOT NULL,
    classe int,
    country int
)  CHARACTER SET utf8 COLLATE utf8_unicode_ci;


drop table if exists classes;
create table classes 
(
    id int primary key not null auto_increment,
    stampCreate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    libel varchar( 255 ) UNIQUE 
)  CHARACTER SET utf8 COLLATE utf8_unicode_ci;


drop table if exists countries;
create table countries 
(
    id int primary key not null auto_increment,
    stampCreate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    stamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    libel varchar( 255 ) UNIQUE 
)  CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO classes ( libel ) VALUES 
( "mammifère" ),
( "insecte" ),
( "poisson" ),
( "mollusque" ),
( "oiseaux" );

INSERT INTO countries ( libel ) VALUES
( "Togo" ), 
( "USA" ),
( "Népal" ),  
( "Chine" ),
( "Australie" ), 
( "Antartique" ),
( "France" ), 
( "Germany" ),
( "Brésil" ); 

INSERT INTO animals ( species, race, classe, country ) VALUES 
( "chien", "boxer", 1, 8  ),
( "chien", "Husky", 1, 6  ),
( "Canidé", "Renard", 1, 7  ),
( "Scarabé", "Phasme", 2, 9  ),
( "rat", "Chauve-Sourie", 1, 5  ),
( "Poule", "rousse", 1, 8  ),
( "Baleine", "bleu", 1,  NULL  ),
( "Sardine", "verte", 3,  NULL );
