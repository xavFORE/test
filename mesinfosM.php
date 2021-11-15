<?php

require "maLibM.php";

entete( "mes infos");

ecritEnGrand( "le magasin est ouvert de 11:55 à midi ", "enMoyen" );

$horaires = [ 
                "lundi"     => "fermé",
                "mardi"     => "9h-12  14-18",
                "mercredi"  => "9h-12  14:39-18:45",
                "jeudi"     => "9h-12  14-18",
                "vendredi"  => "9h-12  14-18",
                "samedi"    => "9h-12  14-18"
            ];

afficheTableau( $horaires );      

printSL(lienVers("Accueil", "bonjourToto01M.php"));

pied();

?>