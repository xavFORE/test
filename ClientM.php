<?php

require_once "PanierM.php";

class Client
{
    private $nom;

    function __construct( $nom )
    {
        $this->nom = $nom;
        print("nouveau client $this->nom<br>");
    }

    function ajouteArticle( $panier, $article )
    {
        $panier->metDansLePanier( $article );
        print("$this->nom à ajouté $article dans son panier<br>");
    }
}

?>