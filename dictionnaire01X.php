<?php


    $uneListe = [ "toto", "tata", 3.14, "Donald", "riri", "fifi", 'loulou'   ];
    
    
    $tabFantome = [ 0 => "toto", 1 => "tata", 2 => 3.14, 5 => "Donald", "riri", "fifi", 'loulou'   ];


    $dictionnaire = [ "sport" => [ "ext" => 'foot', 'int' => 'echecs', 'violences gratuites' => "lutte" ], "plat" => "couscous", "music" => "Céline Dion", "voiture" => "lamborghini"   ];


    $magasin = [ "couscous" => 17, "tomates" => 4.3, "navet" => 5, "carrotes" => 6, "pois chiche" => 1.4 ];
    

    
    
    
 
    print( $dictionnaire[ music ]."<br>" ) ;



    for( $i = 0 ; $i < count( $uneListe ) ; $i++ )
    {
        print( "element $i : ".($uneListe[$i])." <br>");
    }





    print( "-----------------------------<br>");
    affDict( $uneListe  );

    print( "-----------------------------<br>");
    affDict( $dictionnaire );

    print( "-----------------------------<br>");
    affDict( $magasin );

    print( "-----------------------------<br>");
    affDict( $tabFantome );
    




    function affDict(  $dict )
    {
        foreach( $dict as $i => $element )
        {
            if ( is_array( $element )  )
            {
                print( "$i ____________ <br>");
    
                foreach( $element as $key => $value )
                    print( "$i  ----- $key : $value <br>");
    
            }
            else
                print( " $i : $element <br>");
        }
    }

?>

