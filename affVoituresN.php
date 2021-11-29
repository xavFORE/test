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





?>




  
    <form action="#" method="get">
      <select name="voitures">
<?php
   
       require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from voitures;";
        $res = $mysqli->query( $query );

       while ( ($ligne = $res->fetch_assoc()))
       {
        $id  = $ligne[ 'ID' ];
        $nom = $ligne[ 'nom' ];
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