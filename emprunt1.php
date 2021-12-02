
<?php
session_start();
//header( "location: emprunt.php");
require_once "fonctions.php";
require_once "ressources.php";

    if ($_GET)
    {
        $pw                 = $_SESSION['pw_client'];
        $nom                = $_SESSION['nom_client'];
        $livre_sectionner   = $_GET[ 'livres' ];

        //$pw = md5( $pw );

        
        $mysqli = new mysqli($servername, $username, $password, $database);
        //emprunteur
        $query  = "select * from emprunteurs where nom='$nom' and pw='$pw';";
        //print( $query );
        $res = $mysqli->query( $query );
        if ( $res->num_rows == 0 )
        {
            print( "<h3>circulez y'a rien à voir</h3>");            
        }
        else
        {
            $ligne = $res->fetch_assoc();
            $nom_de_emprunteur = $ligne[ "nom"];
            $id_emprunteur  = $ligne[ "id"];
            print( "<h3>bienvenue $nom_de_emprunteur</h3>");
        }
        //livre
        $query  = "select * from livres where id='$livre_sectionner';";
        //print( $query );
        $res = $mysqli->query( $query );
        if ( $res->num_rows == 0 )
        {
            print( "<h3>Le livre et pas dans la liste </h3>");            
        }
        else
        {
            $ligne = $res->fetch_assoc();
            $nom_du_livre = $ligne[ "nom"];
            print( "<h3>bienvenue $nom_de_emprunteur tu as sectionner le livre $nom_du_livre</h3>");
        }
        //ajout dans la base
        $query  = "insert into emprunts ( ide, idl, dateDeb, dateFin ) 
        values ( $id_emprunteur, $livre_sectionner, CURDATE(), NULL );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>$nom_de_emprunteur emprunte $nom_du_livre</h3>");
        else
            print( "<h3>emprunt erreur </h3>");
        $mysqli->close();
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription emprumteur</title>
</head>
<body>

<form action="#" method="get">

 
<?php comboBox( "livres" ); ?> 

<br>
<button type="submit">OK</button>
</form>
</body>
</html>