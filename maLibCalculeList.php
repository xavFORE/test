<?php
    function sommeDuneListe( $liste )
    {
        if ( count($liste) == 0 )
        {
            throw new Exception( "la liste est vide" );
        }

        $total = 0;
        foreach ($liste as $key => $value)
        {
           
            $type = gettype( $value );

            if ( is_array( $value ) )
                throw new Exception( "Array n'est pas un chiffre" );                
            
            if ( is_numeric( $value ) ) 
                $total += floatval( $value );
            else
                throw new Exception( "$value n'est pas un chiffre" );                
        }
        return $total;
    }


    function moyenne( $liste)
    {
        $total = sommeDuneListe( $liste );

        if ( count($liste) == 0 )
        {
            throw new Exception( "division par zéro" );
        }
        $moyenne = $total / count($liste);
        return $moyenne;
    }


    if ( $_TEST )
    {
        test( [  6, 12, 3], 7 );
        test( [  3, True, 2, 8 ], "1 n'est pas un chiffre" );
        test( [  3, False, 2, 8 ], " n'est pas un chiffre" );
        test( [  3, 12, 'tata', 2, 8 ], "tata n'est pas un chiffre") ;
        test( [  2 , 3.2, 2  ], 2.4);
        test( [  2 , [2, 2]  ], "Array n'est pas un chiffre");
        test( [  0 , 0, 0  ], 0 );
        test( [  2 , -2 ], 0 );
        test( [  '2' , '-2' ], 0 );
        test( [  '2' , '4' ], 3 );
    }
?>