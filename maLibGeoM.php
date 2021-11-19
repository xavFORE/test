<?php

class Point
{
    protected $x;
    protected $y;
    
    public function __construct( $x, $y )
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function aff()
    {
        print("(".$this->x  );
        print(",".$this->y  );
        print(")" );        
    }

    public function affL()
    {
        print("(x=".$this->x  );
        print(", y=".$this->y  );
        print(")" );        
    }

    public function deplace( $dx, $dy )
    {
        $this->x  += $dx;
        $this->y  += $dy;
    }

    public function raz( )
    {
        $this->x = 0;
        $this->y = 0;
    }

    public function add1( $p )
    {
        $this->x += $p->x;
        $this->y += $p->y;
    }

    public function add2( $p )
    {
        $this->deplace( $p->x, $p->y);
    }
}

class PointColor extends Point
{
    protected $color;

    public function __construct( $x, $y, $couleur  )
    {
        parent::__construct( $x, $y );
        $this->color = $couleur;
    }

    public function aff()
    {
        parent::aff();
        print( $this->color."<br>" );     
    }
}

class Cercle extends PointColor
{
    protected $rayon;

    public function __construct( $x, $y, $rayon, $couleur="" )
    {
        parent::__construct( $x, $y, $couleur );
        $this->rayon = $rayon; 
    }

    public function aff()
    {
        print( "je suis un cercle en ($this->x, $this->y) de rayon $this->rayon<br>" );
    }

    public function surface()
    {
        $res = ($this->rayon * $this->rayon)*pi();
        return $res;
    }

}

class Carre extends Cercle
{
    public function __construct( $x, $y, $rayon, $couleur="" )
    {
        parent::__construct( $x, $y, $rayon, $couleur );
    }

    public function aff()
    {
        print( "je suis un carré en ($this->x, $this->y) de coté $this->rayon $this->color<br>" );
    }

    public function surface()
    {
        $res = $this->rayon * $this->rayon;
        return $res;
    }
}

class Rectangle extends Carre
{
    private $longueur;

    public function __construct( $x, $y, $rayon, $longueur, $couleur="" )
    {
        parent::__construct( $x, $y, $rayon, $couleur );
        $this->longueur = $longueur;
    }

    public function aff()
    {
        print( "je suis un rectangle en ($this->x, $this->y) de largeur $this->rayon, de longueur $this->longueur $this->color<br>" );
    }

    public function surface()
    {
        $res = $this->rayon * $this->longueur;
        return $res;
    }
}

?>