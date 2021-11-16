<?php

require "maLibM.php";

entete( "salut" );

ecritEnGrand( "bonjour TOTO !!", "enMoyen" );
ecritEnGrand( "hello hello TOTO !!", "enGrand" );
ecritEnGrand( "TOTO manque de classe..." );
ecritEnGrand( "TOTO avec la classe...", "enMoyen" );

printSL(lienVers( "mes infos", "mesinfosM.php" ));

pied();

?>