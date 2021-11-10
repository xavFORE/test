
<h1>Hello le PHP</h1>

<?php

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