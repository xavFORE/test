<?php

class Article 
{
    public $nom; 
    public $prix; 
    function __construct( $nom, $prix )
    {
        $this->nom = $nom; 
        $this->prix = $prix; 

        print("nouvel article : $this->nom <br>");
    }



}

?>