<?php

class Article
{
    private $prix;
    private $qte;
    public $nom;
    public $TVA;
    public $promo;

    private $prixTotal;


    function __construct( $name, $price, $qty )
    {
        $this->nom  = $name; 
        $this->prix = $price;
        $this->qte  = $qty;
        $this->TVA  = 0.2;
        $this->promo  = 0;
        $this->calculeMontant();
    }

    private function calculeMontant()
    {
        $this->prixTotal = $this->prix * $this->qte * (1 - ( $this->promo/100) ); 
    }

    public function setPrix( $price )
    {
        $this->prix = $price;
        $this->calculeMontant();
    }

    public function getMontant( )
    {
        return $this->prixTotal;    
    }

    public function setQte( $qty )
    {
        return $this->qte = $qty;
        $this->calculeMontant();
    }

    public function affiche()
    {
        $pro = "";
        if ( $this->promo != 0 )
            $pro = "SUPER PROMO !!!  "; 
        return  $pro.$this->nom."  ".$this->qte."X".$this->prix." = ".($this->getMontant())." (TVA ".($this->getMontant()*$this->TVA).")"; 
    }

    // 
    public function setPromoPercent( $prom )
    {
        $this->promo  = $prom;
    }

}

class Service extends Article 
{
    public $heure;

    function __construct( $name, $price, $hour )
    {
        parent::__construct( $name, $price, 1 );  
        $this->heure  = $hour; 
        $this->TVA  = 0.12;
    }
    
    public function affiche()
    {
        return parent::affiche()." service à ".$this->heure; 
    }
}

?>