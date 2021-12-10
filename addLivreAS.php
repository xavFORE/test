<?php
    require_once "ressources.php";
    require_once "fonctions.php";

   // $auteur = $_GET[ 'auteur'];
    //$titre = $_GET['titre'];
    //$query  = "insert into auteurs ( nom, auteur ) values ('$titre' , '$auteur');";
    //
    $query = "select * from auteurs where nom= 'Bouchra'";
    $result = query($query);
    $nombre_de_ligne = $result->num_rows;
    if($nombre_de_ligne == 0){
        $query  = "insert into auteurs (nom) values ('Bouchra');";
        
    }
        $query = "select id from auteurs where nom= 'Bouchra'";
        $result_id = query($query);
        print($result_id[0]);
    
    
    //
   // 
    //print( $query );
    //query( $query );
?>