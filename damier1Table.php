<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blanc
        {
            width: 50px;
            height: 50px;
            background-color: white;
        }
        .noir
        {
            width: 50px;
            height: 50px;
            background-color: black;
        }
    </style>
</head>
<body>

<table>
<?php

for( $mesligne=0 ; $mesligne<4 ; $mesligne++ )
{
    for( $ligne1=0 ; $ligne1<1 ; $ligne1 )
    {
        print( "<tr>\n");
        for( $colone1=0 ; $colone1<8 ; $colone1++ )
        {
            if ( $colone1 % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
            print( "<td $class>\n");
            print( "</td>\n");
        }
        print( "</tr>\n");
    }

    for( $ligne2=0 ; $ligne2<1 ; $ligne2++ )
    {
        print( "<tr>\n");
        for( $colone2=0 ; $colone2<8 ; $colone2++ )
        {
            if ( $colone2 % 2 == 0 )
                $class="class='blanc'";
            else
                $class="class='noir'";
            print( "<td $class>\n");
            print( "</td>\n");
        }
        print( "</tr>\n");
    }
}

?>
</table>

</body>
</html>