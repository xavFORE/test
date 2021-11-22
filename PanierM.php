<?php

require_once "ClientM.php";

class Panier
{
    private $articles = [];

    function __construct()
    {
        print("nouveau panier<br>");
    }

    function metDansLePanier( $article )
    {
        $this->articles[]= $article;
    }

    function affiche()
    {
        print( "<table style='border: solid 3px black;'><tr><td style='border: solid 2px black;'>Article</td><td style='border: solid 2px black;'>Prix</td></tr>" );

        foreach( $this->articles as $article  )
            $article->affLigneTab();

        print( "</table>" );
    }
}

?>