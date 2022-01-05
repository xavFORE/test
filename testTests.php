<?php
    require( "maLibCalculeList.php" );


    function test( $list, $valAttendue )
    {
        try 
        {
            if ( moyenne( $list ) == $valAttendue )
                print( "OK<br>" );
            else 
                print( "KO<br>" );
        } 
        catch (Exception $th) 
        {
            if ( $th->getMessage() == $valAttendue) 
                print( "OK<br>" );
            else 
                print( "KO<br>" );
        }
    }

    test( [  6, 12, 3], 7 );
    test( [  3, True, 2, 8 ], "1 n'est pas un chiffre" );
    test( [  3, 12, 'tata', 2, 8 ], "tata n'est pas un chiffre") ;
    test( [  2 , 3.2, 2  ], 2.4);
    test( [  2 , [2, 2]  ], "array n'est pas un chiffre");
    test( [  0 , 0, 0  ], 0 );
    test( [  2 , -2 ], 0 );

    test( [  '2' , '-2' ], 0 );
?>