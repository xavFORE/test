<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
=======
<html lang="fr">
>>>>>>> origin/mysqlX
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
<<<<<<< HEAD
            require_once "fonction.php"; 
    if ($_GET)
    {
        $id_client = $_GET[ 'clients' ];
        $id_voiture = $_GET[ 'voitures']; 
        $id_couleur = $_GET[ 'couleurs'];
        $dateDeb = $_GET[ 'dateDeb'];
        $dateFin = $_GET[ 'dateFin'];


        
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "insert into locations ( id_client, id_voiture, id_couleur, date_deb, date_fin )
        values ($id_client,$id_voiture,$id_couleur,'$dateDeb','$dateFin');";
        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "select clients.nom as nomC, voitures.nom as nomV, couleurs.nom as nomK, date_deb, date_fin
                    from   locations, clients, voitures, couleurs
                    where  locations.id_client = clients.id and
                            locations.id_voiture = voitures.id and
                            locations.id_couleur = couleurs.id;"; 
        
        $res = $mysqli->query( $query );
        while(  ($ligne = $res->fetch_assoc()) )
        {
            $id  = $ligne[ 'id' ];
            $nom_client = $ligne[ 'nomC' ];
            $nom_voiture = $ligne[ 'nomV']; 
            $nom_couleur = $ligne[ 'nomK']; 
            $date_debut = $ligne['dateDeb']; 
            $date_fin = $ligne['dateFin']; 

        }
        $mysqli->close();
        

 

        print( "<h3>$nom_client a réservé une $nom_voiture, $nom_couleur du $date_debut au $date_fin   </h3>");
        
    }
?>
<form action="#" method="get"> 

<?php

        comboBox("clients"); 
        comboBox("voitures"); 
        comboBox("couleurs"); 

?>    
<br>
<h3>date de début</h3>
<input type= date name="dateDeb">
<h3>date de fin</h3>
<input type= date name="dateFin">

<br>
<button type="submit">OK</button>
=======
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
>>>>>>> origin/mysqlX
</form>
</body>
</html>