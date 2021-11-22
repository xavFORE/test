<?php
require_once("PanierAS.php");
class Client
{
    private $nom;
    function __construct( $nom )
    {
        $this->nom = $nom;
        print("nouveaux client : ".$this->nom."<br>");
        
    }

    function ajouteArticle( $panier, $article )
    {   
        $panier->mes_dans_le_pagnier($article);
        print($this->nom." à ajouter ".$article." dans son panier<br>");
    }
    


}

?>