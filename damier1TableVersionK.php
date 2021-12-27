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
        $ligne = 7;
        $colone = 7;
        $cpt = 0;
        $caseGagnante = 0;



        for ($i = 0; $i < $ligne; $i++) {
            print("<tr>\n");
            for ($j = 0; $j < $colone; $j++) {
                //if ( $i % 2 == 0 && $j % 2 == 0)
                if (($i + $j) % 2 == 0)
                    $class = "class='noir'";
                else
                    $class = "class='blanc'";

                print("<td onclick ='testeCase($cpt)' $class>\n");
                $cpt++;
                print("</td>\n");
            }
            print("</tr>\n");
        }
        $caseGagnante = (rand(0, $cpt));
        print($caseGagnante);
        ?>



        <div id="mess"></div>

        <script>
            function testeCase(numCase) {
                let messagev = "perdu"
                if (numCase == <?= $caseGagnante ?>) {

                    document.getElementById("mess").innerHTML = "gagné";
                } else {
                    document.getElementById("mess").innerHTML = "perdu";
                    if (numCase < (<?= $caseGagnante ?>)) {
                        document.getElementById("mess").innerHTML = "la case est plus grande, tu chauffes !"}
                        else {
                            document.getElementById("mess").innerHTML = "la case est plus petite, cherche encore !"
                        }

                    }

                }
            
        </script>
    </table>

</body>

</html>