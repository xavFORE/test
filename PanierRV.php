<?php

require_once "ClientRV.php";

class Panier
{
    // tableau qui contient les articles
    private $articles = [];
    public $article; 

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
        foreach ($this->articles as $article) {
            print("$article");
        }
    }
}

?>