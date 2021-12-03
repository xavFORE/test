<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    entete( "ajouter un livre" );

    if ($_GET)
    {
        $nom      = $_GET[ 'nom' ];
        $auteur     = $_GET[ 'auteurs' ];
        $genre      = $_GET[ 'genres' ];

        $query  = "insert into livres ( nom, auteur, genre ) values ( '$nom', $auteur, $genre );";
        print( $query );
        $res = query( $query );
        if ( $res )
            print( "<h3>livre $nom enregistré</h3>\n");
        else        
            print( "<h3>erreur enregistrement !!!</h3>\n");
    }
?>
<form action="#" method="get">
    <input type="text" name='nom' placeholder="titre">
    <br>
    <?php 
        comboBox("auteurs");
        comboBox("genres");
    ?>
    <br>
    <button type="submit">OK</button>
</form>

</body>
</html>