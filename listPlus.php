


<?php
require_once "ressources.php";
require_once "fonctions.php";
            $query = $_GET['query'];

       if ($query == "select * from emprunteurs;" || $query == "select * from livres;" || $query == "select nom from livres where absent = 1;" || $query == "select id, nom from livres where absent=0;")
       {
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
   
        query( "update livres set absent=0;");

        query( "update 
            emprunts, livres 
        set 
            livres.absent=1
        where 
            livres.id = emprunts.idl and emprunts.dateFin is NULL;");
    
        comboBox( "livres"      , "select id, nom from livres where absent=0;", 0 ); 



  


?>
 









query( "update livres set absent=0;update 
        emprunts, livres 
    set 
        livres.absent=1
    where 
        livres.id = emprunts.idl and emprunts.dateFin is NULL; livres", "select id, nom from livres where absent=0;");
