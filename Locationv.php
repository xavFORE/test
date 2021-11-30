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
    require_once "function.php";

    if ($_GET) {

        $idv = $_GET['voitures'];
        $idc = $_GET['client'];
        $idco = $_GET['couleurs'];
        $date = $_GET['datedeb'];
        $dates = $_GET['datefin'];

        //  print($id);
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from voitures where id=$idv;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();

        $nomv         = $ligne['nom'];


        $query  = "select * from client where id=$idc;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();

        $nomc         = $ligne['nom'];

        $query  = "select * from couleurs where id=$idco;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();

        $nomsco         = $ligne['nom'];

        // $time = strtotime($_GET['datedeb']);
        // if ($time) {
        //     $new_date = date('Y-m-d', $time);
        // }

        // $times = strtotime($_GET['datefin']);
        // if ($times) {
        //     $fin_date = date('Y-m-d', $times);
        // }

        $query  = "
        insert into locations 
        ( id_client, id_voiture, id_couleur, date_deb, date_fin )
        values 
        ( $idc, $idv, $idco, '$date', '$dates' );";
        $mysqli->query($query);
        $res   = $mysqli->query("
        select 
        client.nom as nomc, 
        voitures.nom as nomv, 
        couleurs.nom as nomco, 
        date_deb, 
        date_fin
        from 
        locations,
        client,
        voitures,
        couleurs
        where 
        locations.id_client = client.id and 
        locations.id_voiture = voitures.id and 
        locations.id_couleur = couleurs.id
        ; ");
        print( "<table>\n");
        while(  ($ligne = $res->fetch_assoc()) )
        {
            print( "<tr>\n" );
            foreach( $ligne as $key => $values )
            {
                print("<td>\n" );
                    print( $values  );
                print("</td>\n" );
            }
            print( "</tr>\n" );
        }
        print( "</table>\n");
        print( "<br><br>");



        // $ligne = $res->fetch_assoc();
        // $location = $ligne[""];

        // print($location);





        //print("Monsieur $nomc a louer la $nomv de la couleur $nomsco a la date du $date jusqu'au $dates !!!");
    }
    ?>

    <form action="#" method="get">

        <?php
        combobox("voitures");
        combobox("client");
        combobox("couleurs");
        ?>
        <br>
        <input type="date" name="datedeb">
        <input type="date" name="datefin">
        <br>
        <button type="submit">OK</button>
    </form>
</body>

</html>