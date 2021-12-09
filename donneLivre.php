<?php
require_once "ressources.php";
require_once "fonctions.php";


    


        $query  = "select * from livres;";
        //print( $query );
        $res = query( $query );
        
        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc()){
            $ligne[ 'nom' ]= utf8_encode($ligne[ 'nom' ]);
             $tab[] = $ligne;
}
        $ligne = $tab[0];
       
        $nom        = $ligne[ 'nom' ];
       
        $auteur  = $ligne[ 'auteur' ];

        $dict[ 'list' ] = $tab;
        $dict[ 'nom' ] = $nom;
        $dict[ 'auteur' ] = $auteur;

        
        print( json_encode( $dict ) );

      
?>
