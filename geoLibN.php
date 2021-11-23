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
   
    function __construct( $x, $y, $cote, $color)
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
        print( "<div class=\"figure\" style=\"left:".$this->x.
        "px; top:".$this->y."px; width:".$this->cote."px; height:"
        .$this->cote."px; background-color :".$this->color.";\" ></div>\n");
    }

  
}

class Texte extends Carre 
{
  
    private $texte;
    
    function __construct( $x, $y, $cote, $col, $texte)
    {
        parent::__construct( $x, $y, $cote, $col );
        $this->texte = $texte;
        
    }

    function aff()
    {
        print( "carré( $this->x, $this->y, $this->cote)<br>"  );
    }
    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x.
        "px; top:".$this->y."px; width:".$this->cote."px; height:"
        .$this->cote."px; background-color :".$this->color."; \">".$this->texte."</div>\n");
    }

}

class Image extends Carre 
{
  
    private $image;
    
    function __construct( $x, $y, $cote, $image)
    {
        parent::__construct( $x, $y, $cote, "" );
        $this->image = $image;
        
    }

  
    function affHTML()
    {
        print( "<div class=\"figure\" style=\"left:".$this->x.
        "px; top:".$this->y."px; width:".$this->cote."px; height:"
        .$this->cote."px; background-image : url(".$this->image."); \"></div>\n");
    }

    //background-image: url("../images/fond_or.png");

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
