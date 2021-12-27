<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .blanc {
            width: 50px;
            height: 50px;
            background-color: white;
        }

        .noir {
            width: 50px;
            height: 50px;
            background-color: black;
        }
    </style>
</head>

<body>

    <table>
        <?php
        $ligne = 8;
        $colone = 8;
        $nbr = 0;
        $NbrAzar = rand(0,($ligne*$colone));
        for ($i = 0; $i < $ligne; $i++) {
            print("<tr>\n");
            
                for ($j = 0; $j < $colone; $j++) {
                    if (($i+$j) % 2 == 0){
                        $class = "class='noir'";
                        $nbr++;
                    }
                    else{
                        $class = "class='blanc'";
                        $nbr++;
                    }
                    print("<td $class onclick=\"ici($nbr)\">\n");
                    print("</td>\n");
                }
            
            
            print("</tr>\n");
        }
        ?>
    </table>
    <div id="text"></div>
    <script>
        
        
        var NbrMax = <?=$NbrAzar?>;
        console.log(NbrMax);
        function ici(nbr){
            if (nbr == NbrMax) {
                document.getElementById("text").innerHTML= "<h1>Gagner</h1>"
            }
            else{
                document.getElementById("text").innerHTML= "<h1>Perdu</h1>"
            }
        console.log(NbrMax);
        }
    </script>

</body>

</html>