<?php
    function test( $t )
    {
        print( "floatval( $t ) = " );
        print( floatval( $t ) );
        print( "<br>");
    }

    $values = [ 1, 1.0, '2', '2.0', 'O', 'toto', '', NULL, True, False ];
    foreach( $values as $k => $val )
        test( $val );
    ?>