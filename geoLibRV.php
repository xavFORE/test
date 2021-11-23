<?php

class Point
{
    protected $x;
    protected $y;
    public $dx; 
    public $dy; 

    function __construct( $x, $y )
    {
        $this->x = $x;
        $this->y = $y;
    }

    function move($dx, $dy)
    {
        $this->dx = $dx;
        $this->dy = $dy;

        $x += $this->dx; 
        $y += $this->dy; 

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

class Foto extends Carre 
{       private $foto; 
    function __construct( $x, $y, $cote, $color, $foto )
    {
        parent::__construct( $x, $y, $cote, $color);
        $this->foto = $foto;
        
    }
    
    function affHTML()
    {
        print( "<div> <a href= # ><img src=$this->foto></a></div>\n");
    }
}

class Lien extends Foto
{   private $lien; 
    function __construct( $x, $y, $cote, $color, $foto, $lien)
    {       parent::__construct( $x, $y, $cote, $color, $foto);
            $this->lien = $lien;
    }
    function affHTML()
    {
        print( "<div> <a href= $this->lien   > cliquez ici </a></div>\n");
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
