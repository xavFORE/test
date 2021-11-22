<?php

class Article
{
    private $nom;
    private $prix;

    function __construct( $n, $m )
    {
        // this représente l'instance de l'objet
        $this->nom  = $n;
        $this->prix = $m;
        print( "nouvel article : $this->nom<br>" );        
    }

    function __toString()
    {
        return $this->nom;
    }
}

?>