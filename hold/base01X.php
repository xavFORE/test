
<h1>Hello le PHP</h1>

<?php

     


    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );


    $lesPrenons = [ "Olivier", "Karim", "Bouchra", "nanin" ];

    foreach ( $lesPrenons as $prenom ) {
        disBonjour( $prenom );            
    }

   
    function disBonjour( $nom )
    {
        $nom = strtoupper( $nom );
        print( "bonjour $nom<br>" );
    }


    addition( 6, 8 );


    function addition( $a, $b )
    {
        $resultat = $a + $b;
        print( "$resultat<br>" );

        print( ($a+$b)."<br>" );
        print ("voilà le résultat ".($a+$b)   );
    
    }


    $temperatures = [ 12, 45, 13, 53  ];

    $somme = array_sum( $temperatures   );

    print( "<br>somme des temp : ".$somme );

    $moyenne = $somme / count( $temperatures );

    print( "<br>moyenne des temp : ".$moyenne );



?>
