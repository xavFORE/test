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

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" ></div>\n");
    }

}


class Text extends Carre 
{
    private $text;

    function __construct( $x, $y, $cote, $color, $text )
    {
        parent::__construct( $x, $y, $cote, $color );
        $this->text = $text;
    }

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\" >$this->text</div>\n");
    }
}

class Foto extends Carre 
{
    private $image;

    function __construct( $x, $y, $cote, $image )
    {
        parent::__construct( $x, $y, $cote, "" );
        $this->image = $image;
    }

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px;\" ><img class=\"fototadapt\" src='$this->image'></div>\n");
    }
}
class Lien extends Carre{
    private $lien;

    function __construct( $x, $y, $cote, $lien )
    {
        parent::__construct( $x, $y, $cote, "" );
        $this->lien = $lien;
    }

    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px;\"".' ><form action="geoAS.php"><input type="submit" value="changement de direction" onclick="bouge()"/></form>'."</div>\n");
    }
    function bouge(){
        $this->x = rand(0,1000);
        $this->y = rand(0,1000);
        $this->cote = rand(0,1000);
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