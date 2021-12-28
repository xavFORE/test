<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .blanc {
            width: 50px;
            height: 50px;
            background-color: white;
            color: black;
            text-align: center;
        }

        .noir {
            width: 50px;
            height: 50px;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
<?php 
    if ($_POST == false) {
        $ligne = 8;
        $colone = 8;
    }
    else{
    $ligne = $_POST['ligne'];
    $colone = $_POST['colone'];
}
    print("<table>\n");
    
    $compteur = 0;
    for ($i = 0; $i < $ligne; $i++) {
        print("<tr>\n");
        for ($j = 0; $j < $colone; $j++) {
            //if ( $i % 2 == 0 && $j % 2 == 0)
            if (($i + $j) % 2 == 0)
                $class = "class='noir'";
            else
                $class = "class='blanc'";
            //print( "<td $class>\n");
            print("<td onclick='testCase( $compteur )' $class>\n");
            print("$compteur</td>\n");
            $compteur++;
        }
        print("</tr>\n");
    }

    print("</table>\n");
?>

    <div id="jeux"></div>
    <form action="damier1TableAjaxAS.php" method="POST">
    <input type="number" name="ligne" id="ligne" placeholder="nombre de ligne" min="2" value=<?=$ligne?>>
    <input type="number" name="colone" id="colone" placeholder="nombre de colone" min="2" value=<?=$colone?>>
    <input type="submit" name="submit" value="Envoie ! " >
    </form>
    <div id="mess"></div>

    <script>
        var numHaz = chercherDataBackB1(<?= $compteur ?>);

        function testCase(numCase) {
            console.log("je suis la case : " + numCase);
            console.log(numHaz);
            let message = "";
            if (numCase > numHaz)
                message = "trop grand !!!!";
            else
            if (numCase < numHaz)
                message = "trop petit !!!!";
            else
                message = "gagné !!!!";

            document.getElementById("mess").innerHTML = message;
        }


        function chercherDataBackB1(compteur) {
            let dictTXT = $.ajax({
                type: "GET",
                url: "http://localhost/work/test01/test/resultaAS.php?chiffre=" + compteur,
                async: false
            }).responseText;
            dictVal = JSON.parse(dictTXT);
            let num = dictVal['numHaz'];
            return num;
        }
    </script>

</body>

</html>