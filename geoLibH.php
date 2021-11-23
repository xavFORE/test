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

    function __construct( $x, $y, $cote, $color="" )
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
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\"></div>\n");
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
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\">".$this->text."</div>\n");
    }

}

class foto extends Carre
{
       private $foto;

    function __construct( $x, $y, $cote,$color="", $foto="" )
    {
        parent::__construct( $x, $y, $cote,$color );
        $this->foto = $foto;
    }


    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px; background-color:".$this->color.";\"><img class='foto' src='".$this->foto."'></div>\n");
    }

}
class lien extends foto
{
       private $lien;

    function __construct( $x, $y, $cote, $lien )
    {
        parent::__construct( $x, $y, $cote );
        $this->lien = $lien;
    }


    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x."px; top:".$this->y."px; width:".$this->cote."px; height:".$this->cote."px;\"><a href=".$this->lien.">voyage</a></div>\n");

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
