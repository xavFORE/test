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
        foreach ($this->articles as $article) {
            print("$article<br>");
        }
    }
}

?>