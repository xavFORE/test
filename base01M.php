<?php

$str = "<h1>hello le php</h1>";
$str = strtoupper($str);
print( $str . "<br>");

    $nom = "mehdi";
    $nom = ucfirst( $nom );

    for( $i = 0 ; $i < 3 ; $i++ )
        print( "<h1>Hello $nom ligne : $i</h1>\n" );

        disBonjour( "olivier" );
        disBonjour( "karim" );


    function disBonjour( $nom )
    {
        $nom = ucfirst( $nom );

        print( "Bonjour $nom <br>\n");
    }

?>