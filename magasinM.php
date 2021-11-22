<?php

class Article
{
    private $produit;
    private $prix;

    function __construct($produit, $prix)
    {
        $this->produit = $produit;
        $this->prix = $prix;
        print("nouveau produit : $this->produit - prix : $this->prix €<br>");
    }

    function __toString()
    {
        return $this->produit;
    }

    function affiche()
    {
        print("$this->produit, $this->prix €<br>");
    }
}

class Client
{
    private $prenom;

    function __construct($prenom)
    {
        $this->prenom = $prenom;
        print("nouveau client : $this->prenom<br>");
    }

    function prendUnArticle($panier, $article)
    {
        print("$this->prenom ajoute $article à mon panier<br>");
        $panier->metDansLePanier($article);
    }
}

class Panier
{
    private $mesArticles = [];

    function __construct()
    {
        print("nouveau panier<br>");
    }

    function metDansLePanier($article)
    {
        $this->mesArticles[] = $article;
    }

    function affiche()
    {
        foreach ($this->mesArticles as $article )
            $article->affiche();
    }
}

$a1 = new Article("Sauce à la mangue", 5);
$a2 = new Article("Donuts", 2);
$a3 = new Article("Hot-Dog", 6);
$a4 = new Article("Hamburger", 8);
$a5 = new Article("Paillasson", 15);

$c1 = new Client("Bill");
$c2 = new Client("Edouard");
$c3 = new Client("Oscar");

$p = new Panier();

$c1->prendUnArticle($p, $a5);
$c1->prendUnArticle($p, $a3);

$p->affiche();

?>