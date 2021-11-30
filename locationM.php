<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="#"><br>
        <?php
            require_once "ressources.php";
            require_once "fonctions.php";
            comboBox("clients");
            comboBox("voitures");
            comboBox("couleurs");
        ?>
        <br><br>
        <p>Date de début : <input type="date" name="dateDebut"></p>
        <p>Date de fin : <input type="date" name="dateFin"></p>
        <br>
        <input value="Valider" type="submit">
    </form>
    <br>
<?php
    if($_POST)
    {
        $idClient = $_POST[ 'clients' ];
        $idVoiture = $_POST[ 'voitures' ];
        $idCouleur = $_POST[ 'couleurs' ];
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];

        require_once "ressources.php";

        $mysqli = new mysqli($servername, $username, $password, $dbname);

        //$query = "insert into locations (id_client,id_voiture,id_couleur,date_deb,date_fin) values ($idClient,$idVoiture,$idCouleur,'$dateDebut','$dateFin');";
        //$res = $mysqli->query( $query );


        $query = "select clients.nom as nomC,voitures.nom as nomV,couleurs.nom as nomK,date_deb,date_fin from locations,clients,voitures,couleurs where locations.id_client = clients.id and locations.id_voiture = voitures.id and locations.id_couleur = couleurs.id;";
        $res = $mysqli->query($query);

        while($ligne = $res->fetch_assoc())
        {
            print("client, voiture, couleur : ".$ligne['nomC']." ".$ligne['nomV']." ".$ligne['nomK']."<br>");
        }

        /*$query  = "select * from clients where id=$idClient;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $nom         = $ligne[ 'nom' ];

        $query  = "select * from voitures where id=$idVoiture;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $marque      = $ligne[ 'nom' ];

        $query  = "select * from couleurs where id=$idCouleur;";
        $res = $mysqli->query( $query );
        $ligne = $res->fetch_assoc();
        $couleur      = $ligne[ 'nom' ];*/

        $mysqli->close();
        
        //print("<h3>".$nom." à loué une ".$marque." $couleur du $dateDebut au $dateFin</h3><br>\n");
    }
?>
</body>
</html>