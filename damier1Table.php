<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damier en php</title>
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
    for( $ligne=0 ; $ligne<8 ; $ligne++ )
    {
        print( "<tr>\n");
        for( $colone=0 ; $colone<8 ; $colone++ )
        {
            if ( $colone % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
            print( "<td $class>\n");
            print( "</td>\n");
        }
        print( "</tr>\n");
    }
?>
</table>

</body>
</html>