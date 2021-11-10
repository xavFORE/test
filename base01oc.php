
<h1>Hello le PHP</h1>

<?php

    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );



        disBonjour( "Olivier"  );    
        disBonjour( "Karim" );  
        
        
    function disBonjour( $nom )
    {
        print( "bonjour $nom<br>\n" );
    }

?>