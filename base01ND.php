
<h5>Hello le PHP</h5>

<?php
/*
    $nom = "toto";

    for( $i=0 ; $i<3 ; $i++ ) 
        print( "<h1>Hello $nom    ligne:$i</h1>\n" );
*/
    $cle = "la porte";

    for( $i=0 ; $i<2 ; $i++)
        print("<h3> ouvrez $cle</h3>");

/*      disBonjour( "Olivier" );    
        disBonjour( "Karim" );  
        
        
    function disBonjour( $nom )
    {
        print( "bonjour $nom<br>\n" );
    }
*/
        /*passeMoiLeSel( "Titi" );
        passeMoiLeSel( "toto" );
        passeMoiLeSel( "tata" ); équivalent à : */

        $lesPrenoms = ["titi" , "turlututu" , "tata"];

        foreach ($lesPrenoms as $tt)
        {
            passeMoiLeSel($tt);
        }

    function passeMoiLeSel($prenom)
    {
        $prenom = strtoupper($prenom);
        print("passe moi le sel $prenom <br>\n");
    }

    
        additionne (2, 3);

    function additionne($x, $y)
    {
        $calcResultat = $x + $y;
        print("$calcResultat<br>\n");
        print(($x + $y)."<br>\n");
    }


       $tab = [2,5,600,200,];

       moyenneTab( $tab );

    function moyenneTab($calcMoyenne)
    {
        $average = array_sum($calcMoyenne)/count($calcMoyenne);
        print("moyenne du tab = $average");
    }
   


?>