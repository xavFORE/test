<?php
require_once "ressources.php";
require_once "fonctions.php";
entete( "emprunt de livre" );

    if ($_GET)
    {
        $idl            = $_GET[ 'livres' ];
        $ide             = $_GET[ 'emprunteurs' ];

        // insert into emprunteurs ( nom, pw, dateNaiss, civil ) values ( "Zorro", "123", '1955-07-14', 2 );
        $query  = "insert into emprunts ( ide, idl, dateDeb, dateFin ) values ( '$ide', '$idl', current_date, NULL );";
        //print( $query );
        if ( query( $query ) )
            print( "<h3>enregistré</h3>");
        else
            print( "<h3>erreur d'enregistrement</h3>");
    }
?>


<form action="#" method="get">
<?php 
    comboBox( "emprunteurs" , "", 0 ); 
    query( "update livres set absent=0;");

    query( "update 
        emprunts, livres 
    set 
        livres.absent=1
    where 
        livres.id = emprunts.idl and emprunts.dateFin is NULL;");

    comboBox( "livres"      , "select id, nom from livres where absent=0;", 0 ); 
?>    
<br>
<button type="submit">OK</button>
</form>
</body>
</html>