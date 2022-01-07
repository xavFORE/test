<?php
    require( "maLibCalculeListAS.php" );


    function test( $list, $valAttendue )
    {
        try 
        {
            $res = moyenne( $list );
            if ( $res == $valAttendue )
                print( "OK <br>" );
            else 
                print( "KO ($res != $valAttendue)<br>" );
        } 
        catch (Exception $th) 
        {
            $res = $th->getMessage();
            if ( $res == $valAttendue) 
                print( "OK <br>" );
            else 
                print( "KO ($res != $valAttendue)<br>" );
        }
    }

    test( [  6, 12, 3], 7 );
    test( [  3, True, 2, 8 ], "1 n'est pas un chiffre" );
    test( [  3, false, 2, 8 ], " n'est pas un chiffre" );
    test( [  3, 12, 'tata', 2, 8 ], "tata n'est pas un chiffre") ;
    test( [  2 , 3.2, 2  ], 2.4);
    test( [  2 , [2, 2]  ], "Array n'est pas un chiffre");
    test( [  0 , 0, 0  ], 0 );
    test( [  2 , -2 ], 0 );

    test( [  '2' , '-2' ], 0 );
    test( [  '2' , '4' ], 3 );
