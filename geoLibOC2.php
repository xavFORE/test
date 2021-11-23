<?php

class Point
{
    protected $x;
    protected $y;

    function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class Carre extends Point
{
    protected $cote;
    protected $color;
    protected $content = "";
    protected $lien;
    protected $onclick;


    function __construct($x, $y, $cote, $color = "pink")
    {
        parent::__construct($x, $y);
        $this->cote = $cote;
        $this->color = $color;
    }

    function aff()
    {
        print("carré( $this->x, $this->y, $this->cote)<br>");
    }

    function affHTML()
    {
        print("<div class=\"figure\" style=\"left:" . $this->x . "px; top:" . $this->y . "px; width:" . $this->cote . "px; height:" . $this->cote . "px; background-color:" . $this->color . ";\" >$this->content</div>\n");
    }

    function addContent($str)
    {
        $this->content = $str;
    }
}


class Text extends Carre
{
    private $text;

    function __construct($x, $y, $cote, $color, $text)
    {
        parent::__construct($x, $y, $cote, $color);
        parent::addContent($text);
    }
}

class Foto extends Carre
{
    function __construct($x, $y, $cote, $image)
    {
        parent::__construct($x, $y, $cote, "");
        parent::addContent("<img class=\"fototadapt\" src='$image'>");
    }
}



class Page
{
    private $formes = [];

    function addFigure($figure)
    {
        $this->formes[] = $figure;
    }

    function affiche()
    {
        foreach ($this->formes as $forme)
            $forme->affHTML();
    }
}
class Lien extends Carre
{
    function __construct($x, $y, $cote, $color, $lien)
    {
        parent::__construct($x, $y, $cote, $color, $lien);
        $this->lien = $lien;
    }
    function affHTML()
    {
        print("<a href=\"" . $this->lien . "\">");
        parent::affHTML();
        print("</a>");
    }
}
