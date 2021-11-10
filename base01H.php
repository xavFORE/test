
<h1>Hello le PHP</h1>

<?php

    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );

      $lesprenon=["olivier", "karim" , "hanane"];
     foreach ($lesprenon as  $prenom) {
    disBonjour($prenom);
}

    
        
    function disBonjour( $nom )
    {
        $nom =strtoupper($nom);
        print( "bonjour $nom<br>\n" );
    }

$temperateure=[34,36,12,45];
$somme=0;
foreach ($temperateure as $relev) 
{
$somme += $relev;
}
 print("<br>la somme :" . $somme);
$moyenner = $some /count ($temperateure);

?>
