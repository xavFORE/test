<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fotoIdent
        {
            width: 70px;
            height: 70px;
        }
    </style>
</head>
<body>
    
<?php
class Ident
{
    public $nom;
    public $age;
    public $pw;
    public $foto;

    function __construct( $n, $a, $p )
    {
        $fotos = [   "av10.jpg",  "av2.jpeg",  "av4.png",  "av6.jpeg",  "av8.png",  "av1.jpeg",  "av3.png",  "av5.png",  "av7.jpeg",  "av9.png"  ];

        $this->nom = $n;
        $this->age = $a;
        $this->pw = $p;
        $this->foto = $fotos[ rand(0, 9 ) ];
    }

    function aff()
    {
        print(">>>> $this->nom <<<<<br>");
        print($this->age." ans<br>");
        print($this->pw."<br>");
        print( "<img class='fotoIdent' src='images/$this->foto' ><br>" );
    }
}

class Boss extends Ident
{
    function aff()
    {
        print("I am the Boss !!!! <br>");
        parent::aff();
    }
}

class Salarie extends Ident
{
    public $salaire;

    function __construct( $n, $a, $p, $s )
    {
        parent::__construct( $n, $a, $p );
        $this->salaire = $s; 
    }

    function aff()
    {
        print("I a worker ! <br>");
        parent::aff();
        print( "mon salaire est de ".$this->salaire."<br>" ); 
    }
}

class Client extends Ident
{
    private $nbrTicket = 0;

    function aff()
    {
        print("I a customer ! <br>");
        parent::aff();
        print("Crédits : $this->nbrTicket");
    }

    function acheterTicket( $nt )
    {
        $this->nbrTicket += $nt;
    }
}

class Stagiaire extends Salarie
{
    function __construct( $n, $a, $p )
    {
        parent::__construct( $n, $a, $p, 0 );
    }

    function aff()
    {
        print("I a stagiaire ! <br>");
        parent::aff();
    }
}

$c1 = new Client( "Manu", 13, "aaaa" );
$c1->acheterTicket( 5 );

$entreprise = 
[
    new Salarie( "Dupont", 23, "JHDG", 10000000000 ),
    new Salarie( "Durant", 28, "nbdbnd", 5678 ),
    new Salarie( "Zorro",  21, "4435", 70 ),
    new Boss( "Gaston", 45, "boss" ),
    new Client( "Ramirez", 33, "123" ),
    new Salarie( "Olivier", 28, "764YDJJDWW", 80000 ),
    new Stagiaire( "JeanJean", 60, "GDGDG" ),
    new Stagiaire( "ZZ Stop", 90, "mohamed" ),
    new Client( "Ligonnes", 60, "GDGDG" ),
    $c1
];

foreach( $entreprise as $personne )
{
    $personne->aff();
    print( "<br><br>");
}

?>
</body>
</html>

