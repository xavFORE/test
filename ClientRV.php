<?php

require_once "PanierRV.php";

class Client
{
    private $nom; 
    function __construct( $n )
    {
        $this->nom = $n;
        print( "nouveau client : $this->nom<br>" );            
    }

    function ajouteArticle( $panier, $article )
    {
        $panier->metDansLePanier( $article );
        print( "$this->nom a ajouté $article dans son panier<br>" ); 
    }
}

?>