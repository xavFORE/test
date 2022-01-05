<?php
    // creer un table nom et pw
    //require_once "ressources.php";
    //$servername = "mysql:host=localhost;dbname=test";
    $servername = "localhost";
    $username = "xxx";
    $password = "xxxx";
    $database = 'test';

    if ( $_POST )
    {
        try 
        {
            // connecter à votre DB
            $db = new mysqli($servername, $username, $password, $database );
        }
        catch( Exception $e )
        {
            print( "erreur d'ouverture de la DB<br>");
            print_r( $e );
            exit( 1 );
        }
        // 
        $nom  = $_POST[ 'nom' ];
        $nom = strip_tags( $nom );
        $age  = $_POST[ 'age' ];

        // forger la requete
        $query  = "INSERT INTO user (non, age) VALUES ( '$nom', $age );";

        print( $query ); 

        try
        {
            $db->query( $query );
        }
        catch( Exception $e )
        {
            $e->getMessage();
           //print( "une erreur s'est produite : ");
           //print_r( $e ); 
        }
        finally
        {
            print( "je close");
            $db->close();
        }
    }
?>
<form action="#" method="post">
<input type="text" name="nom" placeholder='nom'>
<input type="text" name="age" placeholder='age'>
    <button type="submit">OK</button>
</form>
