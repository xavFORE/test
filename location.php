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
  require_once "ressources.php";
 
  if ($_GET)
  {
              $idc = $_GET[ 'clients' ];
              $idv = $_GET[ 'voitures' ];
              $idr = $_GET[ 'couleurs' ];
              $idd = $_GET[ 'datedeb' ]; 
              $idf = $_GET[ 'datefin' ];

      require_once "ressources.php";
      $mysqli = new mysqli($servername, $username, $password, $database);
      $query ="    insert into locations 
      ( id_client, id_voiture, id_couleur, date_deb, date_fin )
      values ( $idc, $idv, $idr, '$idd', '$idf'  );";
      $res = $mysqli->query( $query );





      $query  = "select * from clients where id=$idc;";
      $res = $mysqli->query( $query );
      $ligne = $res->fetch_assoc();
      $nomc        = $ligne[ 'nom' ];


      $query  = "select * from voitures where id=$idv;";
      $res = $mysqli->query( $query );
      $ligne = $res->fetch_assoc();
      $nomv         = $ligne[ 'nom' ];



      $query  = "select * from couleurs where id=$idr;";
      $res = $mysqli->query( $query );
      $ligne = $res->fetch_assoc();
      $nomr         = $ligne[ 'nom' ];



      $mysqli->close();

      print( "<h3>$nomc  loue  $nomv couleur $nomr datedeb $idd datefin $idf </h3><br>");
  }
?> 

<form action="#" method="get"> 



<?php
  require_once "ressources.php";
  require_once "fonction.php";

      comboBox("voitures");
      comboBox("clients");
      comboBox("couleurs");
      

?>



<!--cree une table pour calandrie-->
<input type="date" name="datedeb" >

<input type="date" name="datefin" >
<br>
<button type="submit">OK</button>
</form>
</body>
</html>