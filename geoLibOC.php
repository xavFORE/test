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

    function __construct($x, $y, $cote, $color = "")
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
        print("<div class=\"figure\" style=\"left:" . $this->x . "px; top:" . $this->y . "px; width:" . $this->cote . "px; height:" . $this->cote . "px; background-color:" . $this->color . ";\" ></div>\n");
    }
}


class Page
{
    protected $formes = [];

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

class Photo extends Carre
{
    private $phot;

    function __contruct($x, $y, $cote, $photx)
    {
        parent::__construct($x, $y, $cote);
        $this->phot = $photx;
        print($photx);
    }

    function affHTML()
    {
        print("<div class=\"figure\" style=\"left:" . $this->x . "px; top:" . $this->y . "px; width:" . $this->cote . "px; height:" . $this->cote . "px; background-image: url('" . $this->phot . "');\"></div>\n");
    }
}
