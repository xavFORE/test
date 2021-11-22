<?php

class Article
{
    private $nom;
    private $prix;

    function __construct( $nom, $prix )
    {
        $this->nom = $nom;
        $this->prix = $prix;
        print("nouvel article : $this->nom<br>");
    }

    function __toString()
    {
        return $this->nom;
    }

    function getPrix()
    {
        return $this->prix;
    }
}

?>