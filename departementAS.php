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
        $id = $_GET[ 'departement' ];
        print($id);
        
        $query  = "select * from departement where departement_code=$id;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();
        $id          = $ligne[ 'departement_code' ];
        $nom         = $ligne[ 'departement_nom' ];
        $mysqli->close();
        print( "<h3>$nom</h3>");
        
    }
    ?>


    <?php
    /*

create TABLE voitures 
(
    ID INT PRIMARY KEY not null AUTO_INCREMENT, 
    nom VARCHAR(100),
    annee INT not null,
    puissance INT not null ,
    kilometrage INT not null,
    prix INT not null
);

insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "ford T", 1925, 1, 189897, 70 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "2CV", 1965, 2, 120200, 90 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Juva 4", 1951, 4, 80311, 100 );
insert into voitures ( nom, annee, puissance, kilometrage, prix )
values( "Renault 4", 1968, 4, 57044, 100 );
*/
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
    $query  = "select * from departement;";
    $res = $mysqli->query($query);
    print('<form action="#" method="get"><select name="departement" id="departement">');
    while (($ligne = $res->fetch_assoc())) {
        $id  = $ligne['departement_code'];
        $nom = $ligne['departement_nom'];
        print('<option value="' . $id . '">');
        print($nom);
        print("</option>\n");
    }
    print('</select><br><button type="submit">OK</button></form>');

    ?>
</body>

</html>