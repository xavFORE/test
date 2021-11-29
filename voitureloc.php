<?php
      require_once "ressources.php";

      $nom = $_GET[ "voiture" ];
      $id = $_GET[ "ID" ];
      
      // connecter à votre DB
      $mysqli = new mysqli($servername, $username, $password, $database);

      $id="select id from voitures;";
           print( $id );

      // forger la requete
      $query  = "select * from voitures;";
    
      //print( $query );
      // execute la requete
      $res = $mysqli->query( $query );
      //print_r( $res );
      //print( "<br><br><br>" );
      
      print( "<form>\n");
 


      $mysqli->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="#" method="get">

<select name="voiture" id="cars">
<option value="ID">ford</option>
<option value="ID">2cv</option>
<option value="ID">Juvaquatre</option>
<option value="ID">renauld 4</option>
</select>
</form>
<button type="submit">ok</button>

<br>
</select>
</form>
</body>
</html>