<?php


class Point
{
    private $x;
    private $y;
    
    public function __construct( $x, $y )
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function aff()
    {
        print("(&nbsp".$this->x  );
        print(",&nbsp ".$this->y  );
        print("&nbsp)<br>" );        
    }

    public function deplace( $dx, $dy )
    {
        $this->x  += $dx;
        $this->y  += $dy;
    }

    public function raz( )
    {
        $this->x = 0;
        $this->y = 0;
    }
    public function affL()
    {
        print("x  =&nbsp ".$this->x."&nbsp" );
        print(", y  =&nbsp ".$this->y  );
        print("<br>");
    }
    
   

}



$point01 = new Point( 14, 18);
$point02 = new Point(  4,  1);
$point03 = new Point(  1,  8);
$point04 = new Point( 39, 45);

$tableauPoints = [ $point01, $point02, $point03, $point04 ];

foreach( $tableauPoints as $point )
{
    $point->aff();
}

foreach( $tableauPoints as $point )
{
    $point->deplace( 3, 0);
    $point->aff();
}

foreach( $tableauPoints as $point )
{
    // <<--------
    $point->aff();
}

foreach( $tableauPoints as $point )
{
    
    $point->affL();
    // (14,18)  ->  (x=14, y=1)
}


?>