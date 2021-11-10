<?php

$db_server = 'localhost';
$db_name = 'test';
$db_user_login = 'root';
$db_user_pass = '';

$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}


$str = "hello le php";
$str = strtoupper($str);
print("<h1>" . $str . "</h1>" . "<br>\n");

    $nom = "mehdi";
    $nom = ucfirst( $nom );

    for( $i = 0 ; $i < 3 ; $i++ )
        print( "<h1>Hello $nom ligne : $i</h1>\n" );

        disBonjour( "olivier" );
        disBonjour( "karim" );

        calcul(3,5);

        function calcul( $num1, $num2 )
        {
            $res = $num1 + $num2;
            print("Résultat du calcul : " . $res . "<br>\n");
        }

    function disBonjour( $nom )
    {
        $nom = ucfirst( $nom );

        print( "Bonjour $nom <br>\n");
    }

    $lesprenoms = ["xavier", "bouchra", "karim"];

    foreach ( $lesprenoms as $prenom ) {
        $prenom = strtoupper($prenom);
        print($prenom . "<br>\n");
    }

    $tabnum = [52,6,7,12,3];

    calc($tabnum);

    function calc($montab)
    {
        $somme = 0;

        for ($i = 0; $i < count($montab); $i++)
        {
            $somme += $montab[$i];
        }

        $moyen = $somme / count($montab);

        print "Moyenne du tableau : " . $moyen . "<br>\n";
    }

?>