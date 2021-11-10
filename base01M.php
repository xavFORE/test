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
            print($res);
        }

    function disBonjour( $nom )
    {
        $nom = ucfirst( $nom );

        print( "Bonjour $nom <br>\n");
    }

?>