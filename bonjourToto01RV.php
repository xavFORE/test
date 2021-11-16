<?php
require "maLibRV.php";


// ma page commence ici

entete( "salut");

ecritEnGrand( "bonjour TOTO !!", "enMoyen" );
ecritEnGrand( "hello hello TOTO !!", "enGrand" );
ecritEnGrand( "TOTO manque de classe..." );
ecritEnGrand( "TOTO avec la classe...", "enMoyen" );
lienVers( "mes infos", "mesinfosRV.php"  );



//print( '<h1>bonjour TOTO !!</h1>');
pied();
?>