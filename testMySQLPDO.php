
<?php
    // creer un table nom et pw
    //require_once "ressources.php";
    $servername = "localhost";
    $username = "xxx";
    $password = "xxx";
    $database = 'test';

    if ( $_POST )
    {
        // connecter à votre DB
        $mysqli = new mysqli($servername, $username, $password, $database);

        $champ = $_POST[ 'champ' ];

        // forger la requete
        //  select id from users where nom='Germaine' and pw='123';
        $query  = "select * from users where id=$champ;";

        // un print bien utile pour débugger
        print( $query."<br>" );

        $res = $mysqli->query( $query );

        while(   $ligne = $res->fetch_assoc( ) )
        {
            $nom = $ligne[  'nom' ];
            print( "$nom<br>" );
        }
        //fermer la DB
        $mysqli->close();
    }
?>
<form action="#" method="post">
    <input type="text" name="champ">
    <button type="submit">OK</button>
</form>
