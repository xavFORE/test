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

    public function affL()
    {
        print("(x=".$this->x  );
        print(", y=".$this->y  );
        print(")<br>" );        
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
    public function add($p)
    {
        $this->deplace( $p->x, $p->y );

    }
}


// ********************************************************

$p1 = new Point( 10, 15 );
$p2 = new Point( 2, 2 );

$p1->add(  $p2  );


$p1->aff();
// (12, 17)


//$p1->deplace( 2, 2 );
 

?>