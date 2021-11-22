<?php

require_once "ClientX.php";

class Panier
{
    // tableau qui contient les articles
    private $articles = [];

    function __construct( )
    {
        print( "nouveau panier <br>" );        
    }

    function metDansLePanier( $article )
    {
        $this->articles[] = $article;
    }

    function affiche( )
    {       
        print( "<table>" );
        foreach( $this->articles as $article  )
            $article->affLigneTab();
        print( "</table>" );
    }
}

?>