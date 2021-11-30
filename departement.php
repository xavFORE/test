<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>departement</title>
</head>
<body>
<?php
    if ($_GET)
    {
        $id = $_GET[ 'departement' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from departement where departement_id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'departement_id' ];
        $nom         =  utf8_encode($ligne[ 'departement_nom' ]);
        $num        = $ligne[ 'departement_code' ];
    
        $mysqli->close();

        print( "<h3>$nom</h3>");
    
    }
?>


<form action="#" method="get"> 
<select name="departement">
<?php
        // affichage des voitures dans le COMBO
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from departement;";
        $res = $mysqli->query( $query );
        while(  ($ligne = $res->fetch_assoc()) )
        {
            $id  = $ligne[ 'departement_id' ];
            $nom = utf8_encode ($ligne[ 'departement_nom' ]);
            $num = $ligne[ 'departement_code' ];
            print( "<option value=$id> $nom</option>\n" );
        }
        $mysqli->close();
?>    
</select>
<br>
<button type="submit">OK</button>
</form>
</body>
</html>