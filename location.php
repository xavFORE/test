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
        $id = $_GET['voiture'];
        print($id);
        require_once "ressources.php";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select * from voitures where id=$id;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();

        $id          = $ligne['id'];
        $nom         = $ligne['nom'];
        $annee       = $ligne['annee'];
        $puissance   = $ligne['puissance'];
        $kilometrage = $ligne['kilometrage'];
        $prix        = $ligne['prix'];


        print("<h3>$nom</h3> la puisance et $puissance cv l'année et de $annee le kilometrage et de $kilometrage le prix par jour et de $prix <br>");
        $id = $_GET['voiture'];
        // print($id);

        $query  = "select * from client where id=$id;";
        $res = $mysqli->query($query);
        $ligne = $res->fetch_assoc();

        $id          = $ligne['id'];
        $nom         = $ligne['nom'];

        $query  = "select * from client;";
        $res = $mysqli->query($query);

        while (($ligne = $res->fetch_assoc())) {
            $id  = $ligne['id'];
            $nom = $ligne['nom'];
            print("<option value=$id> $nom</option>\n");
        }
        $mysqli->close();

        print("<h3>Bonjour $nom !!!! tu est le numero $id de le liste.</h3><br>");
    }
    ?>


    <form action="#" method="get">
        <select name="voiture">
            <?php
            // affichage des voitures dans le COMBO
            require_once "ressources.php";
            $mysqli = new mysqli($servername, $username, $password, $database);
            $query  = "select * from voitures;";
            $res = $mysqli->query($query);
            while (($ligne = $res->fetch_assoc())) {
                $id  = $ligne['id'];
                $nom = $ligne['nom'];
                print("<option value=$id> $nom</option>\n");
            }
            $mysqli->close();
            ?>
        </select>
        <br>
        <button type="submit">OK</button>
    </form>
</body>

</html>