<?php
require "maLibKm.php";


// ma page commence ici

entete( "salut");
ecritEnGrand( "Ceci à la taille d'un titre grace à la balise h1 !!", 'enGrand' );
ecritEnGrand( "bonjour TOTO !!", 'enMoyen' );
ecritEnGrand( "nous sommes lundi  !!", 'enMoyen');
//print('<h1>bonjour TOTO !!</h1>');
//enGrand("test");

lienVers( "mes infos", "mesinfosK.php"  );

pied();
?>