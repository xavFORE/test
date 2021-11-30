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
        //html 
        $id = $_GET[ 'client' ];
        print($id);
        
        $query  = "select * from clients where id=$id;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();
        $id          = $ligne[ 'id' ];
        $nom         = $ligne[ 'nom' ];
        $mysqli->close();
        print( "<h3>$nom</h3>");
        
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
    //html 
    $query  = "select * from clients;";
    $res = $mysqli->query($query);
    print('<form action="#" method="get"><select name="client" id="client">');
    while (($ligne = $res->fetch_assoc())) {
        $id  = $ligne['id'];
        $nom = $ligne['nom'];
        print('<option value="' . $id . '">');
        print($nom);
        print("</option>\n");
    }
    print('</select><br><button type="submit">OK</button></form>');

    ?>
</body>

</html>