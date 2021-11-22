<?php
require_once("ClientAS.php");
class Panier 
{
    private $articles = [];
    
    function __construct(  )
    {
        print("nouveaux pagnier <br>");
    }
    
    function mes_dans_le_pagnier( $article){
        $articles[]= $article;
    }

    function affiche()
    {
        
    }


}

?>