<?php
require_once "ressources.php";
require_once "fonctions.php";
            $requete = $_GET['url']

       if ($requete == "listLivresSortis.php") 
       {

        $query  = "select nom from livres where absent = 1 ";
        //print( $query );
        $res = query( $query );
        
        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc()){
            $ligne[ 'nom' ]= utf8_encode($ligne[ 'nom' ]);
             $tab[] = $ligne;
}
       
        
        print( json_encode( $tab ) );
}
    if ($requete == "listLivresSortis.php") {
            $query  = "select id, nom from livres where absent=0;";
            //print( $query );
            $res = query( $query );

            //print_r($res );

            $tab = [];
        while ( $ligne = $res->fetch_assoc()){
        $ligne[ 'nom' ]= utf8_encode($ligne[ 'nom' ]);
        $tab[] = $ligne;
        }


print( json_encode( $tab ) );
}
    if ($requete == "listEmprunteurs.php") {
        $query  = "select *from emprunteurs;";
        //print( $query );
        $res = query( $query );

        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc()){
        $ligne[ 'nom' ]= utf8_encode($ligne[ 'nom' ]);
        $tab[] = $ligne;
}


print( json_encode( $tab ) );
    }
    if ($requete == "listLivres.php") {
    $query  = "select * from livres;";
    //print( $query );
    $res = query( $query );

    $tab = [];
    while ( $ligne = $res->fetch_assoc())
    {
        $ligne['nom'] = utf8_encode($ligne[ 'nom']);
        $tab[] = $ligne;
    }
    print( json_encode( $tab ) );
}


?>
 



