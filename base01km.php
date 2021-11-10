
<h1>Hello le PHP</h1>

<?php

    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );

        disBonjour( "Olivier" );    
        disBonjour( "Karim" ); 
        
    $prenoms = ["Karim", "Kevin", "steve", "brian"];

    foreach ($prenoms as $key => $prenom) {
        disBonjour($prenom);
    }
        

        
        
    function disBonjour( $nom )
    {
        $nom = strtoupper ($nom);
        print( "bonjour $nom<br>\n" );
        
    }
     function addition($a, $b){


     print ("voilà le résultat ". ($a + $b));

     }

     addition(1,2);


     $temperature =[ 12, 25, 30, 40, 50, 6];
     $somme=0;
     for ($i=0; $i < count($temperature); $i++) { 
         $somme+= $temperature[$i];

     }

$moyenne=$somme/count($temperature);

print("<br><br>");

print( "le résultat de la moyenne est ".($moyenne));


?>