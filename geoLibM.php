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

    function move( $x, $y )
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Carre extends Point 
{
    protected $cote;
    protected $color;

    function __construct( $x, $y, $cote, $color="" )
    {
        parent::__construct( $x, $y );
        $this->cote = $cote;
        $this->color = $color;
    }

    function aff()
    {
        print( "carré( $this->x, $this->y, $this->cote )<br>" );
    }

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" ></div>\n");
    }

}

class Photo extends Carre
{
    private $src;

    function __construct( $x, $y, $cote, $src, $color="" )
    {
        parent::__construct( $x, $y, $cote, $color );
        $this->src = $src;
    }

    function affHTML()
    {
        if( $this->color == "" )
            print( "<div class='figure' style='left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px;'><img class='monimg' src='".$this->src."'></div>\n");
        else
            print( "<div class='figure' style='left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";'><img class='monimg' src='".$this->src."'></div>\n");
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
