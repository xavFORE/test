<?php

require_once "ressources.php";
require_once "fonctions.php";
entete( "inscription emprunteur" );

    if ($_GET)
    {
        $nom            = $_GET[ 'nom' ];
        $pw             = $_GET[ 'pw' ];
        $dateNaiss      = $_GET[ 'dateNaiss' ];
        $civilite       = $_GET[ 'civils' ];

        //$pw = md5( $pw );

        $mysqli = new mysqli($servername, $username, $password, $database);
        //insert into users ( nom, pw, idDep ) values( "Zorro", "zora", 22 );

        // insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( "Zorro", "123", '1955-07-14', 2 );
        $query  = "insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( '$nom', '$pw', '$dateNaiss', $civilite );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>$nom enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
        $mysqli->close();
    }
?>


<form action="#" method="get">

<?php comboBox( "civils" ); ?>    
<input type="text" name='nom' placeholder="ton nom">
<br>
<input type="text" name='pw' placeholder="ton pw">
<br>
<input type="date" name='dateNaiss'>

<br>
<button type="submit">OK</button>
</form>
</body>
</html>