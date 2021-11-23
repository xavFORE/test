<?php

class Point
{
    protected $x;
    protected $y;

    function __construct( $x, $y )
    {
        $this->x = rand(0,300);
        $this->y = rand(0,300);
    }
}

class Carre extends Point 
{
    protected $cote;
    protected $color;
    protected $content="";
    protected $sortant1="";
    protected $sortant2="";
    protected $new_lien="";

    function __construct( $x, $y, $cote, $color="pink" )
    {
        parent::__construct( $x, $y );
        $this->cote = rand(0,300);
        $this->color = $color;
    }

    function aff()
    {
        print( "carré( $this->x, $this->y, $this->cote)<br>"  );
    }

    function affHTML()
    {
        print( "$this->sortant1"."<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" >".$this->content.$this->new_lien."</div>". "$this->sortant2\n");
    }

    function addContent( $str )
    {
        $this->content = $str;
    }
    function addsortant1( $str )
    {
        $this->sortant1 = $str;
    }
    function addsortant2( $str )
    {
        $this->sortant2 = $str;
    }
}


class Text extends Carre 
{
    private $text;

    function __construct( $x, $y, $cote, $color, $text )
    {
        parent::__construct( $x, $y, $cote, $color );
        parent::addContent($text);
    }
}

class Foto extends Carre 
{
    function __construct( $x, $y, $cote, $image )
    {
        parent::__construct( $x, $y, $cote, "" );
        parent::addContent( "<img class=\"fototadapt\" src='$image'>" );
    }
}
class Lien extends Carre 
{
    private $lien;
    function __construct( $x, $y, $cote, $color, $lien )
    {
        parent::__construct( $x, $y, $cote, $color );
        $this->lien = $lien;
        parent::addsortant1( '<a href="'.$lien.'">' );
        parent::addsortant2( '</a>' );
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
