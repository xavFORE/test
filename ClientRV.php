<?php

class Client
{
    private $nom; 
    function __construct( $nom )
    {
        $this->nom = $nom; 
        print("nouveau client : $this->nom <br>");
    }
    
    function ajouteArticle( $panier, $article )
    {
        $this->panier = $panier; 
        $this->article = $article; 
        $panier += $article;

        print($panier);

    }
    


}

?>