<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        td 
        {
            border: 1px solid black;

        }

    </style>
</head>
<body>
    
</body>
</html>
<?php

$tablo1 =
[
    0   => "grand chauve",
    1   => "petit chauve",
    2   => "petit gros",
    3   => "robot",
    4   => "c'est ta cousine"
];

$tablo2 =
[
    "grand chauve",
    "petit chauve",
    "petit gros",
    "robot",
    "c'est ta cousine"
];

$dico =
[
    "xavier"    => "grand chauve",
    "sim"       => "petit chauve",
    "hardy"     => "petit gros",
    "goldorak"  => "robot",
    "becassine" => "c'est ta cousine"
];



print( '<table>' );
   
    foreach(  $dico as $cle => $valeur )
        print( "<tr> <td>$cle</td> <td>--></td>  <td>$valeur</td> </tr>\n"   ); 

    print( '</table>' );




?>