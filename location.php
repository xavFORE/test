<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once "fonctions.php";

    if ($_GET)
    {
        $id_voiture = $_GET[ 'voitures' ];
        $id_client  = $_GET[ 'clients' ];
        $id_couleur = $_GET[ 'couleurs' ];
        $dateDeb    = $_GET[ 'dateDeb' ];
        $dateFin    = $_GET[ 'dateFin' ];

        //print( "$id_voiture - $id_voiture - $dateDeb" );

        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from clients where id=$id_client;";
        //print( $query."<br>");
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom_client = $ligne[ 'nom' ] ;

        $query  = "select * from voitures where id=$id_voiture;";
        //print( $query."<br>");
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom_voiture = $ligne[ 'nom' ] ;
  
        //$nom = utf8_encode($nom);
        //$nom = utf8_decode($nom);
  
        $query = "insert into locations ( id_client, id_voiture, id_couleur, date_deb, date_fin )values ( , 3, 2, '2021-11-30', '2021-12-25'  );";

        $mysqli->close();

        print( "<h3>$nom_client loue $nom_voiture</h3>");
    }
?>
<form action="#" method="get"> 
    <?php
        comboBox( "voitures");
        comboBox( "clients");
        comboBox( "couleurs");
    ?>
    <br>
    <input type="date" name="dateDeb">
    <input type="date" name="dateFin">

    <button type="submit">OK</button>
</form>
</body>
</html>