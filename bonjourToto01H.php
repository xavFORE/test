<?php
require "maLibH.php";


// ma page commence ici

entete( "salut");

ecritEnGrand( 'bonjour TOTO !!', 'enGrand' );

ecritEnGrand( 'hello hello TOTO !!', 'enMoyen' );

ecritEnGrand( 'Ciao TOTO !!', 'enPetit');



pied();

function servir_cafe ($type = "cappuccino")
{
    return "Servir un $type.\n";
}
print servir_cafe();
echo servir_cafe(null);
echo servir_cafe("espresso");





?>