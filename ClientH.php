<?php
require_once "PanierH.php";
class Client
{
 private $nom;
    function __construct( $n )
    {
         $this->nom = $n;
         print("neveau client : $this->nom <br>");
    }

    function ajouteArticle( $panier, $article )
    {
        $panier-> metDansLePanier($article);
        print("$this->nom a ajouter $article dans <br>");
    }


}

?>