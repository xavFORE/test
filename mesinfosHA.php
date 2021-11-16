<?php
require "maLibHA.php";


// ma page commence ici

entete( "mes infos");

ecritEnGrand( "le magasin est ouvert de 11:55 à midi ", "enMoyen" );

lienVers( "retour accueil", "bonjourToto01HA.php"  );

//print( '<h1>bonjour TOTO !!</h1>');



$horaires = [ 
    
   "lundi"     => "fermé", 
    "mardi"     => "9h-12  14-18",
    "mercredi"  => "9h-12  14:39-18:45",
    "jeudi"     => "9h-12  14-18",
    "vendredi"  => "9h-12  14-18",
    "samedi"    => "9h-12  14-18"
  ];

  afficheTableau( $horaires );


pied();
?>