<?php
require "./maLibOC.php";


// ma page commence ici

entete( "salut");

ecritEnGrand( "bonjour TOTO !!", "enMoyen" );
ecritUneClass("bonjour TOTO !!", "enMoyen");
ecritUneClass("bonjour Titi !!","");
ecritUneClass("bonjour Titi !!","enGrand");

liensvers(" mes infos" , "./mesinfosOC.php");
//print( '<h1>bonjour TOTO !!</h1>');
pied();
?>