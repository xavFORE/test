<?php

   require_once "ClientH.php";

class Panier
{
    
     private $articles = [];

    function __construct()
    {
       
        print("neveau panier:<br>");
    }
    function metDansLePanier($article)
    {
       $this->articles [] = $article;
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