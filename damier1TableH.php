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
        $ligne=8;
        $colonne=8;
        for ($i=0;$i<$ligne; $i++){
            print '<tr>';
        for ($j=0;$j<$colonne; $j++){
            if(($j+$i)%2==0)
                print '<td class="blanc"></td>';
            else
                print '<td class="noir"></td>';
            }
            print '</tr>';
        }
        
?>
</table>

</body>
</html>