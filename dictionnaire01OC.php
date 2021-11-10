<?php





    $frontback = [ "back" => [ "sql", "php" ], "front" => ["html", "css" , "javascript"]];


    print( "-----------------------------<br>");
    affDict( $frontback  );

   
    




    function affDict(  $dict )
    {
        foreach( $dict as $i => $element )
        {
            if ( is_array( $element )  )
            {
                print( "$i ____________ <br>");
    
                foreach( $element as $key => $value )
                    print( "$i  : $value <br>");
    
            }
            else
                print( " $i : $element <br>");
        }
    }

?>

