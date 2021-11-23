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
    protected $cote;
    protected $color;

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

class Text extends Carre
{
   
    protected $text;

    function __construct( $x, $y, $cote, $color, $text )
    {
        parent::__construct( $x, $y,$cote,$color );
        $this->text = $text;
        
    }

    
    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" >$this->text</div>\n");
    }

}

class Photo extends Carre
{
   
    protected $image;

    function __construct( $x, $y, $cote, $image )
    {
        parent::__construct( $x, $y,$cote, "");
        $this->image = $image;
        
    }

    
    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" ><img class='photot' src='$this->image' ></div>\n");
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





?>
