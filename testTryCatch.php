<?php
    require( "maLibCalculeList.php" );

    try 
    {
        //$maListe = [ 3, 12, 2, 8 ];
        //$maListe = [ 3, True, 2, 8 ];
        $maListe = [ 3, 12, 'tata', 2, 8 ];
        $maListe = [  2 , 3.2, 2, True  ];
        $maListe = [  2 , [2, 2]  ];
        //$maListe = [  0 , 0, 0  ];
        //$maListe = [  2 , -2  ];
        
        $maListe = [  '2' , '-2'  ];
        //$maListe = [  '0b11' , 'O543'  ];

        $res = moyenne( $maListe );
        print( $res );
    } 
    catch ( Exception $th) 
    {
        print( "une erreur s'est produite : " .$th->getMessage() );
        if ( $th->getMessage() == "Array n'est pas un chiffre")
            print( "attention tartempion tu as encore mis un array dans ta liste");
        if ( $th->getMessage() == "1 n'est pas un chiffre" || $th->getMessage() == "n'est pas un chiffre")
            print( "attention toto tartempion tu as encore mis un boolean dans ta liste");
    }



?>