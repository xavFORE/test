<?php

class Point
{
    protected $x;
    protected $y;

    function __construct( $x, $y )
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Carre extends Point 
{
    private $cote;
    private $color;

    function __construct( $x, $y, $cote, $color )
    {
        parent::__construct( $x, $y );
        $this->cote = $cote;
        $this->color = $color;
    }

    function aff()
    {
        print( "carré( $this->x, $this->y, $this->cote)<br>"  );
    }

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" ></div>\n");
       
    }

}
class photo extends Carre{
    private $text;
    function __construct($x, $y, $cote, $color, $text)
    {
        parent::__construct($x, $y, $cote, $color);
        $this->text = $text;
    }
    
    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" >".'<img class="taille_image" src="./images/'.$this->text.'.png" '."</div>\n");
        print("<form action=".'"https://google.com"'.'><input type="submit" value="Go to Google" /></form>');
    }
    
}



class Page
{
    private $formes = [];

    function addFigure( $figure )
    {
        $this->formes[] = $figure;
    }

    function affiche()
    {
        foreach( $this->formes as $forme)
            $forme->affHTML();
    }
}




$p1 = new Point( 12, 5 );
// creation Point 12,5
$c1 = new Carre( 3, 15, 100, "yellow");
// creation Carré 3, 15, 100


$c2 = new Carre( -3, -15, 50, "black");
$c3 = new Carre( 30, 150, 10, "orange");
$c4 = new Carre( 6, 30, 200, "green");
// creation Carré 6, 30, 200

$p = new Page();
// creation de la page


$p->addFigure( $c1 );
$p->addFigure( $c2 );
$p->addFigure( $c3 );
$p->addFigure( $c4 );

$p->affiche();

?>