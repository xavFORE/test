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
    protected $content="";

    function __construct( $x, $y, $cote, $color="pink" )
    {
        parent::__construct( $x, $y );
        $this->cote = $cote;
        $this->color = $color;
    }

    function aff()
    {
        print( "carré( $this->x, $this->y, $this->cote)<br>"  );
    }

    function __toString()
    {
        return "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" >$this->content</div>\n";
    }

    function affHTML()
    {
        print( $this );
    }

    function addContent( $str )
    {
        $this->content = $str;
    }
}


class Text extends Carre 
{
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
    }

    function affHTML()
    {
        print( "<a href='$this->lien'>\n");
        parent::affHTML();
        print( "</a>\n");
    }
}

class MyButton extends Lien 
{
    function __construct( $x, $y, $cote, $color, $libel, $lien )
    {
        parent::__construct( $x, $y, $cote, $color, $lien);
        parent::addContent( "<h3>$libel</h3>");
    }
}

class LienT extends Carre
{
    function __construct( $x, $y, $cote, $color, $libel, $lien )
    {
        parent::__construct( $x, $y, $cote, $color );
        parent::addContent( "<a href='$lien'>$libel</a>" );
    }
}

class LienN extends Carre 
{
    private $lien;
    private $content1;

    function __construct( $x, $y, $cote, $color, $lien )
    {
        parent::__construct( $x, $y, $cote, $color );
        $this->lien = $lien;
    }

    function affHTML()
    {
        print( "<a href='$this->lien'>");
        print( $this->content1 );
        print( "</a>");
    }

    function addContent( $str )
    {
        $this->content1 = $str;
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
