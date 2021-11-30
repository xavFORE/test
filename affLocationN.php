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

    require_once "fonctions.php";

if($_GET)
{
    $idC = $_GET['clients'];
    $idV = $_GET['voitures'];
    $idColor = $_GET['couleurs'];
    $dateDeb = $_GET['dateDeb'];
    $dateFin = $_GET['dateFin'];

    require_once "ressources.php";
    $mysqli = new mysqli($servername, $username, $password, $database);

    $query  = "select * from clients where id=$idC;";
    $res = $mysqli->query( $query );
    $ligne = $res->fetch_assoc();

    $nomC         = $ligne[ 'nom' ];
   
    $query  = "select * from voitures where id=$idV;";
    $res = $mysqli->query( $query );
    $ligne = $res->fetch_assoc();

    $nomV         = $ligne[ 'nom' ];

    $query  = "select * from couleurs where id=$idColor;";
    $res = $mysqli->query( $query );
    $ligne = $res->fetch_assoc();

    $nomCo         = $ligne[ 'nom' ];

    $query = "insert into locations ( id_client, id_voiture, id_couleur, date_deb, date_fin )
            values ( $idC, $idV, $idColor, '$dateDeb', '$dateFin'  );";
    $mysqli->query( $query );
    
    $mysqli->close();

    print( "$nomC");
    print( " loue la voiture : $nomV<br>");
    print( " de couleur : $nomCo<br>");
    print( " du : $dateDeb au : $dateFin");  
}
?>
     <form action="#" method="get">
<?php
   
       comboBox("clients");
       comboBox("voitures");
       comboBox("couleurs");
?>
 
 <input type="date" name="dateDeb">
 <input type="date" name="dateFin">

<button type="submit">OK</button>
</form>
</body>
</html>