<?php
    // creer un table nom et pw
    //require_once "ressources.php";
    $servername = "mysql:host=localhost;dbname=test";
    $username = "xxx";
    $password = "xxx";
    $database = 'test';

    if ( $_POST )
    {
        try 
        {
            // connecter à votre DB
            $pdo = new PDO($servername, $username, $password );
        }
        catch( Exception $e )
        {
            print( "erreur d'ouverture de la DB<br>");
        }
        // 
        $nom  = $_POST[ 'nom' ];
        //$nom = htmlspecialchars( $nom );
        $nom = strip_tags( $nom );

        $age  = $_POST[ 'age' ];

        // forger la requete
        //  select id from users where nom='Germaine' and pw='123';
        //$query  = "select * from users where id=$champ;";

        //$q = "SELECT nom FROM users WHERE id = $id and nom = '$nom";

        //$rs = $pdo->prepare("SELECT nom FROM users WHERE id = :p1 and nom = :p2" );

        try{
            $rs = $pdo->prepare("INSERT INTO user ( nom, age ) 
                                VALUES (  ?,? )" );
        
            $pdo->beginTransaction();
            $rs->execute(
            [ 
                $nom, 
                $age 
            ]);
        }
        $pdo->commit();

        //$pdo->rollback();
    

        /*
        while(   $ligne = $rs->fetch(PDO::FETCH_ASSOC) )
        {
            $nom = $ligne[  'nom' ];
            print( "$nom<br>" );
        }
        */
    }
?>
<form action="#" method="post">
<input type="text" name="nom" placeholder='nom'>
<input type="text" name="age" placeholder='age'>
    <button type="submit">OK</button>
</form>
