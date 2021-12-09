<?php
require_once "ressources.php";
require_once "fonctions.php";

    if ($_GET)
    {
        $nom            = $_GET[ 'nom' ];
        $pw             = $_GET[ 'pw' ];

        //$pw = md5( $pw );

        $query  = "select * from emprunteurs where nom='$nom' and pw='$pw';";
        //print( $query );
        if ( $res = query( $query ) )
        {
            if( $res->num_rows == 0 )
            {
                header( "location: badLog.php" );
            }    
            else
            {
                $ligne = $res->fetch_assoc(); 
                $id = $ligne['id']; 
                $dateNaiss = $ligne['dateNaiss']; 
                session_start( );
                $_SESSION[ 'id' ] = $id;
                $_SESSION[ 'nom' ] = $nom;
                $_SESSION[ 'dateNaiss' ] = $dateNaiss;                                
                header( "location: accueil.php" );
            }
        }
    }
    entete( "inscription emprunteur" );
?>


<form action="#" method="get">
<input type="text" name='nom' placeholder="ton nom">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>
<button type="submit">OK</button>
</form>
</body>
</html>