<?php
session_start();
require_once "ressources.php";
require_once "fonctions.php";
entete( "emprunt livre" );

    if ($_GET)
    {
        $idEmprunteur = $_SESSION['id_client'];
        $idLivre = $_GET['livres'];

        $mysqli = new mysqli($servername, $username, $password, $database);

        $query  = "insert into emprunts (ide,idl,dateDeb,dateFin) values ($idEmprunteur,$idLivre,DATE(NOW()),NULL );";
        //print( $query );
        if ( $mysqli->query( $query ) )
            print( "<h3>Votre emprunt a bien été pris en compte.</h3>");
        else
            print( "<h3>erreur</h3>");

        $mysqli->close();
    }
?>


<form action="#" method="get">
<?php
    print("Bonjour ".$_SESSION['nom_client']."<br><br>");
    comboBox( "livres", "", 0 );
?>
<br>
<button type="submit">OK</button>
</form>
</body>
</html>