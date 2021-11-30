<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_GET)
    {
<<<<<<< HEAD
        $idco = $_GET[ 'couleur' ];
        

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);


        $query  = "select * from couleurs where id=$idco;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom         = $ligne[ 'nom' ];
   
       
        $mysqli->close();

        print( "<h3> couleur $nom </h3>");
      
    }
?>


<form action="#" method="get"> 


=======
        $id = $_GET[ 'couleur' ];

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from couleurs where id=$id;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        
        $id          = $ligne[ 'id' ];
        $nom         = $ligne[ 'nom' ];
        
        $mysqli->close();

        print( "<h3>$nom</h3>");
        print( "id : $id<br>");
    }
?>

<form action="#" method="get"> 
>>>>>>> mysqlX
<select name="couleur">
<?php
        // affichage des voitures dans le COMBO
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from couleurs;";
        $res = $mysqli->query( $query );
        while(  ($ligne = $res->fetch_assoc()) )
        {
<<<<<<< HEAD
            $idco  = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
            print( "<option value=$idco> $nom</option>\n" );
        }
?>
</select>
<br>
<button type="submit">OK</button>
</form>
=======
            $id  = $ligne[ 'id' ];
            $nom = $ligne[ 'nom' ];
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
>>>>>>> mysqlX
