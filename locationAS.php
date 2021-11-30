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
    if ($_GET) {
        require_once "ressources.php";
        $database = "voitures";
        $mysqli = new mysqli($servername, $username, $password, $database);
        //
        
        //html 
        $id_voiture = $_GET['voitures'];
        $id_client  = $_GET['clients'];
        $id_couleur = $_GET['couleurs'];
        $id_date_deb = $_GET['datedeb'];
        $id_date_fin = $_GET['datefin'];

        $query  = "select * from voitures where id=$id_voiture;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();
        $id_voiture  = $ligne['id'];
        $nom_voiture        = $ligne['nom'];
        $annee       = $ligne['annee'];
        $puissance   = $ligne['puissance'];
        $kilometrage = $ligne['kilometrage'];
        $prix        = $ligne['prix'];

        // client

        $query  = "select * from clients where id=$id_client;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();
        $id          = $ligne['id'];
        $nom         = $ligne['nom'];
        //couleur

        $query  = "select * from couleurs where id=$id;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();
        $id          = $ligne['id'];
        $nom_couleur = $ligne['nom'];
        print("<h3>nom du client $nom conduit $nom_voiture de couleur $nom_couleur </h3> ");

        $query = "insert into locations ( id_client, id_voiture, id_couleur, date_deb, date_fin )
                                values ( $id_client, $id_voiture, $id_couleur, '$id_date_deb', '$id_date_fin'  );";
        print($query);
        $res = $mysqli->query($query);
        
        
    }
    ?>


    <?php

    //partie connection 
    require_once "ressources.php";
    $database = "voitures";
    $mysqli = new mysqli($servername, $username, $password, $database);
    //controle connection
    if (mysqli_connect_errno()) {
        print "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        print "connection ok\n";
    }
    //
    require_once "fonctionsAS.php";
    print('<form action="#" method="GET">');
    comboBoxHtml("voitures");
    comboBoxHtml("clients");
    comboBoxHtml("couleurs");

    //calendrier
    print('<input type="date" name="datedeb">');
    print('<input type="date" name="datefin">');
    //btn ok
    print('</select><button type="submit">OK</button></form>');
    //deconnection
    $mysqli->close();

    ?>
</body>

</html>