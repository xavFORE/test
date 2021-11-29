
<?php
    // creer un table nom et pw
    require_once "ressources.php";

        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        // forger la requete
        $query  = "select * from form1 where nom='gerald';";     
        $key = "pw";

        print( $query );

        $res = $mysqli->query( $query );
        //print_r( $res );
        if ( $res->num_rows == 0 )
        {
            print( "aucune données<br>");
        }
        else
        if ( $res->num_rows == 1 )
        {
            print( "reponse sur une seule ligne<br>");
            $ligne = $res->fetch_assoc();
            $value  = $ligne[ $key ];
            print( "value=$value<br>"); 
        }
        else
        {
            print( "reponse dans un tableau<br>");
            while(    $ligne = $res->fetch_assoc()) 
            { 
                $value  = $ligne[ $key ];
                print( "value=$value<br>"); 
            }
        }
        $mysqli->close();
?>

