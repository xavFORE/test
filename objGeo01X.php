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
        print("(".$this->x  );
        print(",".$this->y  );
        print(")<br>" );        
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


print("--------------------------------------<br>" );

$tableauPoints = [ 
                [ 14, 18],
                [  1,  8],
                [  4, 1],
                [ 39, 45]
            ];

foreach( $tableauPoints as $point )
{
    print("x=".$point[0]  );
    print(" y=".$point[1]  );
    print("<br>" );
}
            
            









?>