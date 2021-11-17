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
    private $color;

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
    private $rayon;

    public function __construct( $x, $y, $rayon, $couleur="" )
    {
        parent::__construct( $x, $y, $couleur );
        $this->rayon = $rayon; 
    }

    public function aff()
    {
        print( "je suis un cercle en ($this->x, $this->y) de rayon $this->rayon<br>" );
    }

}

class Rectangle extends Point
{
    private $largeur;
    private $longueur; 

    public function __construct( $x, $y, $largeur, $longueur)
    {
        parent::__construct( $x, $y);
        $this->largeur = $largeur; 
        $this->longueur = $longueur;
    }
    public function aff()
    {
        print( "je suis un rectangle en ($this->x, $this->y) de largeur $this->largeur et de longueur $this->longueur<br>" );
    }
}
class Carre extends Point
{
    private $cote;
     

    public function __construct( $x, $y, $cote)
    {
        parent::__construct( $x, $y);
        $this->cote = $cote; 
        
    }
    public function aff()
    {
        print( "je suis un carré en ($this->x, $this->y) de côté $this->cote<br>" );
    }
}

?>