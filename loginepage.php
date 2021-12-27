
<?php
session_start();
    require_once "ressources.php";
    require_once "fonctions.php";
               
            if ($_GET)
            {
                $nom = $_GET[ 'Pseudo' ];
                $pw = $_GET[ 'pw' ];


                $mysqli = new mysqli($servername, $username, $password, $database);
                $query  = "insert into utilisateur_inscrit ( pseudo ) values (' $nom' );";
                //print( $query );
                $res = $mysqli->query( $query );

                if ($res)
                // {
                //     if ($res->num_rows == 0)
                print("<h3>Vous etes bien inscrit pour le tirage au sort</h3>");
                
                // }
                // else
                //    print("<h3>erreur</h3>");

                $mysqli->close();
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> utilisateur_inscrit</title>
</head>
<style>

.button
{
    width: 150px;
    border-left: 1px solid #000;

}
body
{
    background-size: 100%;
    text-align: center;
    color: black;
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    
}
</style>
<!--javascripte -->
<script>
        document.getElementById( 'butok').disabled= true;
        function verifie()
        {
            if ( document.getElementById( 'accept').checked  )
                document.getElementById( 'butok').disabled= false;
            else
                document.getElementById( 'butok').disabled= true;
                
        }

</script>

<body background="Noel98.gif">

        <form action="#" method="get">
                 <button type="text">Inscription</button>
                    <br>
                    <br>
                <label for="Pseudo"><b>Pseudo</b></label>
                <input type="Pseudo" placeholder="Enter Pseudo" name="Pseudo" id="Pseudo" required>
                    <br>
                    <br>
                <label for="PW"><b>modPasse</b></label>
                <input type="pw" placeholder="Enter pw" name="PW" id="pw" required>
                    <br>
                    <br>
                <label for="Validation"><b>Clique ici</b></label>
                <input type="checkbox" name="NomCadeau" id="accept" onclick="verifie()"> 
                    <br>
                    <br>
                <button type="submit" class="registerbtn" id="butok" disabled="true">OK</button>
                
        </form>
</body>
</html>