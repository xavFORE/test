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
</form>
</body>
</html>