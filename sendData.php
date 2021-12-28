<?php
    $dict[ 'listeParticipants' ] = 'toto, tata, titi';
    $dict[ 'tableauParticipants' ] = [ 'toto', 'tata', 'titi' ];
    $dict[ 'nom1' ] = 'toto';
    $dict[ 'nom2' ] = 'tata';
    $dict[ 'message' ] =  "salut la compagnie<br>" ;
    $dict[ 'date' ] =  date("Y/m/d s");
    //print_r( $dict );
    $dictJson = json_encode( $dict );
    print( $dictJson ); 
    // attente 
    sleep( 1 );
?>