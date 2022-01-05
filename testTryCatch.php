<?php
    require( "maLibCalculeList.php" );

    try 
    {
        $maListe = [ 3, 12, 2, 8 ];
        $maListe = [ 3, True, 2, 8 ];
        $maListe = [ 3, 12, 'tata', 2, 8 ];
        $maListe = [  2 , 3.2, 2  ];
        $maListe = [  2 , [2, 2]  ];
        $maListe = [  0 , 0, 0  ];
        
        $res = moyenne( $maListe );
        print( $res );
    } 
    catch ( Exception $th) 
    {
        print( "une erreur s'est produite : " .$th->getMessage() );
    }
?>