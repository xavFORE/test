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
        $articles[] = $article;
    }

    function affiche( )
    {       
    }
}

?>