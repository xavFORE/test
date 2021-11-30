<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>

<?php

if($_GET)
{
    $id = $_GET['departement'];

    require_once "ressources.php";
    $mysqli = new mysqli($servername, $username, $password, $database);
    $query  = "select * from departement where departement_id=$id;";
    $res = $mysqli->query( $query );
    $ligne = $res->fetch_assoc();

    $id          = $ligne[ 'departement_id' ];
    $nom         = utf8_encode($ligne[ 'departement_nom' ]);
    $numeroD     = $ligne[ 'departement_code' ];
    
    $mysqli->close();

    print( "<h3>$nom</h3>");
    print( "numero du département : $numeroD<br>");
    
}

?>
 
    <form action="#" method="get">
      <select name="departement">
<?php
   
       require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from departement;";
        $res = $mysqli->query( $query );

       while ( ($ligne = $res->fetch_assoc()))
       {
        $id  = $ligne[ 'departement_id' ];
        $nom = utf8_encode($ligne[ 'departement_nom' ]);
        print( "<option value=$id> $nom</option>\n" );
        }
        $mysqli->close();
    
?>
 </select>

<br />

<button type="submit">OK</button>
</form>
</body>
</html>