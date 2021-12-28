<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    if($_POST)
    {
        $ligne = $_POST['damier'];
        $colone = $_POST['damier'];
    }
    else
    {
        $ligne = 8;
        $colone = 8;
    }

    $compteur=0;    
    for( $i=0 ; $i<$ligne ; $i++ )
    {
        print( "<tr>\n");
        for( $j=0 ; $j < $colone ; $j++ )
        {
            //if ( $i % 2 == 0 && $j % 2 == 0)
            if ( ($i+$j) % 2 == 0 )
                $class="class='noir'";
            else
                $class="class='blanc'";
            //print( "<td $class>\n");
            print( "<td onclick='testCase( $compteur )' $class>\n");
            print( "</td>\n");
            $compteur++;
        }
        print( "</tr>\n");
    }

    // $numHaz = rand( 0, $compteur);
?>
</table>

<div id="mess"></div>
<br>

<form action="damier1TableAjax.php" method="post">
    <input onchange="damierValue()" name="damier" type="range" id="damier" value="<?=$ligne?>" min="2" max="12">
    <label for="damier">Damier</label>
    <button type="submit">Ok</button>
</form>

<p id="desc"></p>

<script>
    let numHaz = getNumberRandom();
    damierValue();
    
    function damierValue()
    {
        let valeur = $("#damier").val();
        $("#desc").text(valeur);
    }
    
    function testCase( numCase )
    {
        console.log( "je suis la case : " + numCase);
        let message = "";
        if ( numCase > numHaz  )
            message = "trop grand !!!!";
        else 
        if ( numCase < numHaz )
            message = "trop petit !!!!";
        else
            message = "gagné !!!!";

        document.getElementById( "mess").innerHTML = message;
    }

    function getNumberRandom()
    {
        return $.ajax({
                            type: "GET",
                            url: "rand.php?cpt=<?=$compteur?>",
                            async: false
                        }).responseText;
    }
</script>

</body>
</html>